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
      <form action="APICall.php">
        <input type="submit" Value="Attendance Graph">
      </form>
    </div>

  </body>
</html>
