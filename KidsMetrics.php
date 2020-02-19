<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="output.css">
  </head>

  <body class="bg-gray-800 font-montserrat">
    <h1 class="text-6xl text-white text-center">
      Kids Church Metrics
    </h1>

    <div class="grid grid-cols-7 gap-10 my-20">
            <span></span>

            <a href="index.php" class="bg-red-500 hover:bg-red-600 text-white text-center font-bold rounded py-8">
              Home
            </a>

            <span></span>

            <a href="YouthMetrics.php" class="bg-red-500 hover:bg-red-600 text-white text-center font-bold rounded py-8">
              Youth Metrics
            </a>

            <span></span>

            <a href="YAMetrics.php" class="bg-red-500 hover:bg-red-600 text-white text-center font-bold rounded py-8">
              YA Metrics
            </a>

            <span></span>
    </div>

    <div>
      <form action="APICall.php" target="_blank" method="get">
        <input type="radio" id="kids" name="graph" value="2">
        <label class="bg-gray-800 font-montserrat text-white" for="kids">Kids Attendance</label><br>
        <input type="radio" id="team" name="graph" value="2">
        <label class="bg-gray-800 font-montserrat text-white" for="team">Team Attendance</label><br>
        <input type="radio" id="2018" name="graph" value="2">
        <label class="bg-gray-800 font-montserrat text-white" for="2018">2018 Attendance</label><br>
        <input type="radio" id="monthly" name="graph" value="2">
        <label class="bg-gray-800 font-montserrat text-white" for="monthly">Monthly Average</label><br>
        <input type="radio" id="NtC" name="graph" value="2">
        <label class="bg-gray-800 font-montserrat text-white" for="NtC">Average New to Church</label><br>
        <input type="submit" Value="Generate Graph" class="bg-red-500 hover:bg-red-600 text-white text-center font-bold rounded py-4 px-2">
      </form>
    </div>

  </body>
</html>
