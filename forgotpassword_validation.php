<?php

session_start();
include 'db.php';
if(isset($_POST['login'])){
$name = $_POST['username'];
$keyword = $_POST['keyword'];



$s = "select * from bloodbank_details where username='$name' && keyword='$keyword'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($num!=1){
  header("Location: forgotpassword.php?error=Invalid Username or Keyword");
}

if($num==1)
{
    $_SESSION['userid']=$name;
  header('location:changepassword.php');
}
else
{
    
    echo"sighin failed";
}

}
?>