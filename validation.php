<?php

session_start();
include 'db.php';
    


//mysqli_select_db($con,"blood_bank");
if(isset($_POST['login'])){
$name = $_POST['username'];
$pass = $_POST['password'];



$s = "select * from bloodbank_details where username='$name' && password='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($num!=1){
  header("Location: signin.php?error=Invalid Username or Password");
}

if($num==1)
{
    $_SESSION['userid']=$name;
  header('location:home.html');
}
else
{
    
    echo"sighin failed";
}

}
?>