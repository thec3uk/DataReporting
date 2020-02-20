<?php
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
  </head>

  <header class="bg-gray-800 font-montserrat">
    <h1 class="text-6xl text-white text-center">
      <?php echo $title?>
    </h1>
  </header>

<!-- For now just using this to check the values being passed by the form
      Later will pass different values and configure onto a graph here -->
  <body>
    <p> The following values were passed:</p>
    <p>
      <ul>
        <li> Ministry = <?php echo $ministry ?> </li>
        <li> Session = <?php echo $session ?> </li>
        <li> Graph = <?php echo $graph ?> </li>
      </ul>
    </p>
  </body>
</html>
