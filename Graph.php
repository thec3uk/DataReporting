<?php
  //Define variable for use
  $ministry = $_GET['ministry'];
  $session = $_GET['session'];
  $graph = $_GET['graph'];

  $title = $ministry . " " . $graph . " Graph (" . $session .")";

  $baseURL = 'https://api.churchsuite.co.uk/v1/children/group/';

  $x_account = 'thec3';
  $x_application = 'C3-DataReporting';
  $x_auth = 'keyyzyy5l9uqicjacdtm';

  //Setting API Header
  $api_headers = array(
  	'Accept: application/json',
  	'Content-Type: application/json',
  	'X-Account: '.$x_account,
  	'X-Auth: '.$x_auth,
  	'X-Application: '.$x_application,
  );

  //If statement to extract the right data and then format it into something useable
  //Planning on tidying this up later - for now this is how my brain works
  if ($ministry == "Kids Church") {
  	$WtP_URL = $baseURL . "2/";
  	$PtR_URL = $baseURL . "11/";
  	$Y1t2_URL = $baseURL . "6/";
  	$Y3t4_URL = $baseURL . "10/";
  	$Y5t6_URL = $baseURL . "8/";
  	if ($graph == "Attendance") {
  		$WtP_URL = $WtP_URL . "attendance/";
  		$PtR_URL = $PtR_URL . "attendance/";
  		$Y1t2_URL = $Y1t2_URL . "attendance/";
  		$Y3t4_URL = $Y3t4_URL . "attendance/";
  		$Y5t6_URL = $Y5t6_URL . "attendance/";

  		$WtP_Data = extractData($WtP_URL, $api_headers);
  		$PtR_Data = extractData($PtR_URL, $api_headers);
  		$Y1t2_Data = extractData($Y1t2_URL, $api_headers);
  		$Y3t4_Data = extractData($Y3t4_URL, $api_headers);
  		$Y5t6_Data = extractData($Y5t6_URL, $api_headers);

  		$WtP_Attendance = extractAttendance($WtP_Data);
  		$PtR_Attendance = extractAttendance($PtR_Data);
  		$Y1t2_Attendance = extractAttendance($Y1t2_Data);
  		$Y3t4_Attendance = extractAttendance($Y3t4_Data);
  		$Y5t6_Attendance = extractAttendance($Y5t6_Data);

      $SOMETHING = array_merge($WtP_Attendance, $PtR_Attendance, $Y1t2_Attendance, $Y3t4_Attendance, $Y5t6_Attendance);
  	}
  } else if ($ministry == "Youth") {
  	if ($session == "Fridays") {
  		$YouthFridaysY7t8_URL = $baseURL . "15/";
  		$YouthFridaysY9t10_URL = $baseURL . "16/";
  		$YouthFridaysY11t13_URL = $baseURL . "17/";
  	} else if ($session == "Sundays") {
  		$YouthSundays_URL = $baseURL . "12/";
  	}
  } else if ($ministry == "YoungAdults") {
  	$YA_URL = $baseURL . "";
  }

  //Define function for extracting the data from API based upon the URL formed in the if statement
  function extractData($url, $api_headers) {
  	$ch = curl_init($url);

  	$curlopts = array();
  	$curlopts[CURLOPT_RETURNTRANSFER] = true;
  	$curlopts[CURLOPT_HTTPHEADER] = $api_headers;
  	curl_setopt_array($ch, $curlopts);

  	$response = curl_exec($ch);
  	$error = curl_errno($ch);
  	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);


  	$json = json_decode($response, 1);

  	if (in_array($http_code, array(200, 201))) {
  		// OK response
  		//echo "<h1>OK: ".$http_code."</h1>";
  		//echo "<h2>Array has " . sizeof($json) . " elements</h2>";
  		//var_dump($json);
  		return $json;
  	} else {
  		// got an error response
  		echo '<h1>Error: '.$http_code.'</h1>';
  		echo '<p>ChurchSuite reported the following error: '.$json['error']['message'].'</p>';
  	}
  }

  //Define function for extracting only the total number of Kids from a session
  function extractAttendance($dataArray){
  	$dateArray=(array_keys($dataArray));

  	$attendanceArray = array_column($dataArray, 'total');
  	//print_r($attendanceArray);

  	$attendanceData = array_combine($dateArray, $attendanceArray);
  	//print_r($attendanceData);

  	return $attendanceData;
  }
 ?>

<!DOCTYPE html>
<html>

<!-- Page Formatting -->
  <head>
    <title>C3 Data Reporting | Graph </title>
    <meta name="Author" content="mia.axtell@outlook.com"/>
    <link rel="stylesheet" href="output.css">
  </head>

  <header class="bg-gray-800 font-montserrat">
    <h1 class="text-6xl text-white text-center">
      <?php echo $title?>
    </h1>
  </header>

<!-- For now just using this to check the values being passed by the form
      Later will pass different values and configure onto a graph here -->
  <body class="bg-gray-800 font-montserrat text-white">
    <p> The following values were passed:</p>
    <p>
      <ul>
        <li> Ministry = <?php echo $ministry ?> </li>
        <li> Session = <?php echo $session ?> </li>
        <li> Graph = <?php echo $graph ?> </li>
      </ul>
    </p>

    <script>
    function generateGraph(var attendanceData) {
      var data = <?php echo json_encode($attendanceData, JSON_NUMERIC_CHECK); ?>;
      data = data.map(function (row, index) {
          return {
              x: index,
              y: row
          };
      });

      var chart = new CanvasJS.Chart("chartContainer", {
          title: {
              text: "Analysis"
          },
          axisY: {
              title: "Variables"
          },
          data: [{
              type: "line",
              dataPoints: data
          }]
      });
      chart.render();

    }
    </script>
  </body>
</html>
