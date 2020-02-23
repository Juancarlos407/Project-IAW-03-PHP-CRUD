<?php
//connect to the data base
require_once "connection.php";





?>
<html>
<body>
  <style>
  body {
    background-image: url('Marca de agua.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
  </style>
<h2 style="font-family:verdana;">Update Form</h2>
<form action="update.php" method="get">
<p>Car registration plate (Matrícula): <input type="text" name="plate"></p>
<p>Colour: <input type="text" name="colour"></p>
<p>Number of doors: <input type="text" name="doors"></p>
<p>Engine (Motor): <input type="text" name="engine"></p>
<input type="submit">
</form>
</body>
</html>
