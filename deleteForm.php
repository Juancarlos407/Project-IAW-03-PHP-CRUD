<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
//connect to the data base
require_once "connection.php";
//declaración de variables
$plate = $_POST['plate'];




//Delete only the one that the user has typed the plate in the input text below.
$sql_delete= "DELETE FROM cars WHERE plate = '$plate'";
if ($db->query($sql_delete) === TRUE and $plate != null ) {
    echo "Registro eliminado con exito";
} else {
    echo "Error al borrar registro";
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
<h2 style="font-family:verdana;">Delete Form</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<p>Car registration plate (Matrícula): <input type="text" name="plate"></p>
<input type="submit" value="Submit">
</form>
</body>
</html>
