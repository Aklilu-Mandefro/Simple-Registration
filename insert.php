<?php
include_once('db.php');
if(isset($_POST['submit'])){
  $name = $_POST['name']; 
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  //insert data
  $sql = "insert into user(name,email,password)
  values('$name', '$email', '$pass')";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo "New record added succefully";
  }
  else{
    echo "error" .$sql. "" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
 ?>
