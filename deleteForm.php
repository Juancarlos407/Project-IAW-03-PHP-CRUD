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
<h2 style="font-family:verdana;">Delete Form</h2>
<form action="delete.php" method="get">
<p>Car registration plate (Matrícula): <input type="text" name="plate"></p>
<input type="submit">
</form>
</body>
</html>
