<?php 	

$localhost = "localhost";
$username = "montanna";
$password = "password";
$dbname = "stock_db";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>