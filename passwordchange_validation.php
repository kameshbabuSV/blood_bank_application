<?php

session_start();
include 'db.php';
if(isset($_POST['login'])){
$name = $_POST['username'];
$new_password = $_POST['new_password'];



$s = "select * from bloodbank_details where username='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($num!=1){
  header("Location: changepassword.php?error=No Such User..");
}

if($num==1)
{
    $_SESSION['userid']=$name;
    $s="update bloodbank_details set password='$new_password' where username='$name' ";
    mysqli_query($con,$s);
  header('location:signin.php');
}
else
{
    
    echo"sighin failed";
}

}
?>