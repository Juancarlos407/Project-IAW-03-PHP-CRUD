<?php
//connect to the data base

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "YOURPASSWORDHERE";
 $datab = "carStock";
 $db = new mysqli($dbhost, $dbuser, $dbpass, $datab);

//check if there is any problem to connect to the data base
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
