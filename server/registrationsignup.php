<?php 
header('Access-Control-Allow-Origin: *');

//require 'vendor/autoload.php';

//use Mailgun\Mailgun;
$con=mysqli_connect("localhost","dbname","root","");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }

  $name=$_POST["name"];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $location=$_POST['location'];
  $company=$_POST['company'];
  $student=$_POST['student'];
  $year=$_POST['year'];
  $motivation=$_POST['motivation']; 

$result = mysqli_query($con,"INSERT INTO `users` VALUES('$name','$email','$number','$location','$company','$student','$year','$motivation');");
if($result){
echo "success";
}
else {
echo "fail";
}
?>