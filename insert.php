
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
  // code...
  require 'connection.php';

  createStudent();

}

function createStudent(){
  global $con;

  $fname=$_POST['firstname'];
  $lname =$_POST['lastname'];
  $age =$_POST['age'];

  $query="INSERT INTO `student`(`firstname`, `lastname`, `age`) VALUES ('$fname','$lname','$age')";

  mysqli_query($con,$query) or die(mysqli_error($con));
  mysqli_close($con);
}

 ?>
