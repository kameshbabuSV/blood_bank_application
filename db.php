<?php 
global $con;
$server="localhost";
$user="root";
$password="";
$db="blood_bank";
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>