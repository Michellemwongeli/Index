<?php
include("db.php");
$password = "1234567";
$email = "nthumomichelle@gmail.com"; 

$query = $conn->prepare("SELECT * FROM users WHERE email='$email' AND password='$password'");
$query->execute();

  // set the resulting array to associative
$result = $query->fetchAll();
print_r($result);

?>