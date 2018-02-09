<?php
$username = "root";
$password = "";
$database = "capstone";
$server = "127.0.0.1";

$connect = @mysqli_connect($server, $username, $password);
$select = mysqli_select_db($connect, $database);

if(!$connect) { die("Connection failed: ".mysqli_error()); }
if(!$select) { die("Selection failed: ".mysqli_error()); }
?>
