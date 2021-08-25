<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
  // code...
  require 'connection.php';

  showStudent();

}
 
function showStudent(){
  global $con;

  $query =mysqli_query($con,"SELECT * FROM student");
  $number_of_rows = mysqli_num_rows($query);

  $temp_array= array();

if ($number_of_rows >0) {
  while ($row = mysqli_fetch_assoc($query)) {
    $temp_array[]=$row;
  }
}

header('content-type:application/json');
echo json_encode(array("student"=>$temp_array));

mysqli_close($con);

}



 ?>
