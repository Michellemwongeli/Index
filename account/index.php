<?php
session_start();
$user = $_SESSION["user"];

echo "Hi ".$user['name'];

?>