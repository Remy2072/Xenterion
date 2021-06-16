<?php
session_start();

$link = mysqli_connect("localhost", "root", "", "c979xenterion");

if ($link === false) {
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

$naam = $_POST['name'];
$email = $_POST['ename'];
// $password = $_POST['pname'];
$password = password_hash($_POST['pname'], PASSWORD_BCRYPT);


// Check user login or not
if(!isset($_SESSION['ename'])){
  $sql = "INSERT INTO `users` (`userid`, `name`, `email`, `password`) VALUES (NULL, '$naam', '$email', '$password');";
  if (mysqli_query($link, $sql)) {
  } else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
  mysqli_close($link);
  unset($_SESSION);
  session_destroy();
  header('Location: complete.html');
}


?>