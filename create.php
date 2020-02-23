<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
  //As the plate is the primary key, it cannot be null o empty

  if ($_GET["plate"]!=null && $_GET["plate"]!=""){
    //create vars with values
    $plate = $_GET["plate"];
    $colour = $_GET["colour"];
    $doors = $_GET["doors"];
    $car_engine = $_GET["engine"];

    //connect to the data base
    require_once "connection.php";

//check if there is any problem to connect to the data base
if ($db->connect_errno != null) {
  echo "An unexpected error happened.</br> Error number $db->connect_errno when conneting to the database.</br> Error message: $db->connect_error ";
  exit();
}else{
  //check if the plate already exist in the table cars as is a primary key
  $query_select="Select * from cars where plate='$plate'";
  //echo "query_select $query_select</br>";
  $result_select = $db->query($query_select);
  $cars=$result_select->fetch_object();
       if($cars != null){
              echo "The plate already exist, so it cannot be added. Go to Read or Update in case you need it</br>";
        }else{
              echo "Inserting";
              $query_insert="INSERT INTO cars (plate, colour, doors, car_engine) VALUES ('$plate', '$colour', $doors, '$car_engine')";
              //echo "query_insert $query_insert</br>";
              //insert the fields and values in the table cars
              $result = $db->query($query_insert);
              echo "result $result</br>";
              //if result os true the Insert has been done successfully
              if($result){
                echo "A new row with the info as follows has been added to the table </br>";
                //An error happened
              }else if ($db->errno != null){
                  echo "An unexpected error happened.</br> Error number $db->errno when inserting to the database.</br> Error message: $db->error </br>";
                  exit();
                  //sth else happened
              }else{
                echo "Something unexpected happened</br>";
              }
          }
      //connection has to be closed()
      $db->close();
    }
  }
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
<h2 style="font-family:verdana;">Create Result</h2>
<!--we are using GET method to see de parameters in the url-->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
<p>Car registration plate (Matrícula): <input type="text" name="plate"></p>
<p>Colour: <input type="text" name="colour"></p>
<p>Number of doors: <input type="text" name="doors"></p>
<p>Engine (Motor): <input type="text" name="engine"></p>
<input type="submit">
</form>
</body>
</html>
