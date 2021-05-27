<?php

session_start();
include 'db.php';
if(isset($_POST['login'])){
$name = $_POST['username'];
$pass = $_POST['password'];

$s = "select * from admin_details where username='$name' && password='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($num!=1){
  header("Location: adminlogin.php?error=Invalid Username or Password!");
}

if($num==1)
{
    $_SESSION['userid']=$name;
  header('location:admin.php');
}

}
?>