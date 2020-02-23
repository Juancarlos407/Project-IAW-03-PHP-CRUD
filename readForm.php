<?php
//connect to the data base
require_once "connection.php";

//Show a list of all registration plates when the paràmeter is empty or doesn't exist in the request

//Show only the one that the user has typed the plate in the input text below.


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
<h2 style="font-family:verdana;">Read Form</h2>
<form action="read.php" method="get">
  <p>Car registration plate (Matrícula): <input type="text" name="plate"></p>
  <input type="submit">
</form>
</body>
</html>
