<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "project";
// create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
  die("could not connect to the server or database:" . mysqli_error($conn));
}
 ?>
