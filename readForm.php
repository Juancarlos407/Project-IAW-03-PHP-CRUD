<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
//connect to the data base
require_once "connection.php";
//declaración de variables
$plate = $_POST['plate'];




//Show only the one that the user has typed the plate in the input text below.
$sql_select= "SELECT * FROM cars WHERE plate = '$plate'";
$resultado = $db->query($sql_select);
$cars = $resultado->fetch_array(MYSQLI_BOTH);

while ($cars != null){
echo $cars['plate']." color ".$cars[1]." doors ".$cars[2]." engine ".$cars[3]."</p>";
$cars = $resultado->fetch_array(MYSQLI_BOTH);}

$resultado->free();
//close connection
$db->close();
//Show a list of all registration plates when the parameter is empty or doesn't exist in the request
}
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
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<p>Car registration plate (Matrícula): <input type="text" name="plate"></p>
<input type="submit" value="Submit">
</form>
</body>
</html>
