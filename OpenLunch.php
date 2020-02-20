<!DOCTYPE html>
<html>

<!-- Page Formatting -->
  <head>
    <title>Open Lunch</title>
    <meta name="Author" content="mia.axtell@outlook.com"/>
    <link rel="stylesheet" href="output.css">
  </head>

<!-- Page Heading -->
  <header class="bg-gray-800 font-montserrat">
    <h1 class="text-6xl text-white text-center">
      Open Lunch
    </h1>
  </header>

<!-- Form Creation to Generate Data for Graphs -->
  <body class="bg-gray-800 font-montserrat">
    <!--<form action="APICall.php" target="_blank" method="get" id="graphData" name="GraphData">-->
      <table>
        <thead>
          <tr>
            <th colspan="2"><h3>Fill in this weeks information</h3><br></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Date:</td>
            <td><input type='date' name='firstName' id='firstName1' value=<?php echo $firstName; ?>></td>
          </tr>
          <tr>
            <td>Volunteers:</td>
            <td><input type='text' name='lastName' id='lastName1' value=<?php echo $lastName; ?>></td>
          </tr>
          <tr>
            <td>No. of Meals Served:</td>
            <td><input type='text' name='email' id='email1' value=<?php echo $email; ?>></td>
          </tr>
          <tr>
            <td>Food donation:</td>
            <td><input type='text' name='dob' id='dob1' value=<?php echo $dob; ?>></td>
          </tr>
          <tr>
            <td>Cash Donation:</td>
            <td><input type='text' name='username' id='username1' value=<?php echo $username; ?>></td>
          </tr>
          <tr>
            <td>Expenditure:</td>
            <td><input type='text' name='password' id='password1'></td>
          </tr>
          <tr>
            <td>Main Meal and Desert:</td>
            <td><input type='text' name='driverStatus' id='driverStatus1' value=<?php echo $driverStatus; ?>></td>
          </tr>
          <tr>
            <td></td>
            <td>
              <input type='submit' class="button" name="submitForm" value='Submit' onclick="submitForm">
              <input type='reset' class="button" name="clear" value='Reset'>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </body>
</html>
