<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
//connect to the data base
require_once "connection.php";
//declaración de variables
$plate = $_POST['plate'];
$colour = $_POST['colour'];
$doors = $_POST['doors'];
$engine = $_POST['engine'];

//Update only the one that the user has typed the plate in the input text below.
$sql_update= "UPDATE cars SET colour='$colour', doors='$doors', car_engine='$engine' WHERE plate = '$plate'";
if ($db->query($sql_update) === TRUE and $plate != null ) {
    echo "Registro modificado con exito";
} else {
    echo "Error al modificar registro";
}



//close connection
$db->close();

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
<h2 style="font-family:verdana;">Update Form</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<p>Car registration plate (Matrícula): <input type="text" name="plate"></p>
<p>Colour: <input type="text" name="colour"></p>
<p>Number of doors: <input type="text" name="doors"></p>
<p>Engine (Motor): <input type="text" name="engine"></p>
<input type="submit" value="Submit">
</form>
</body>
</html>
