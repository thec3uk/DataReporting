<?php
  //Define variable for use
  $ministry = $_GET['ministry'];
  $session = $_GET['session'];
  $graph = $_GET['graph'];

  $title = $ministry . " " . $graph . " Graph (" . $session .")";
?>

<!DOCTYPE html>
<html>

<!-- Page Formatting -->
  <head>
    <title>C3 Data Reporting | Graph </title>
    <meta name="Author" content="mia.axtell@outlook.com"/>
    <link rel="stylesheet" href="output.css">
    <style type="text/css">
      #chart-container {
        width: 100%;
        height: auto;
      }
    </style>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
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

    <div id="chart-container">
      <canvas id="graphCanvas"></canvas>
    </div>

    <script>
      $(document).ready(function () {
        showGraph();
      });

      function showGraph()
      {
        {
          $.post("data.php", function (data)
          {
            console.log(data);
            var name = [];
            var marks = [];

            for var i in data){
              name.push(data[i].student_name);
              marks.push(data[i].marks);
            }

            var chartData = {
              labels: name,
              datasets: [
                {
                  label: 'Student Marks',
                  backgroundColor: '#49e2ff',
                  borderColor: '#46d5f1',
                  hoverBackgroundColor: '#CCCCCC',
                  hoverBorderColor: '#666666',
                  data: marks
                }
              ]
            };
            var graphTarget = $("#graphCanvas");

            var barGraph = new Chart(graphTarget, {
              type: 'bar',
              data: chartData
            });
          });
        }
      }
    </script>

  </body>
</html>
