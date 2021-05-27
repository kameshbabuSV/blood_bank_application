<?php
        include 'db.php';
        $name=$_POST['name'];
        $username= $_POST['username'];
        $district=$_POST['district'];
        $phonenum=$_POST['phonenumber'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];
        $bloodgroup=$_POST['bloodgroup'];
        $keyword=$_POST['keyword'];

        if ($username == "admin212") {
            // header("Location: index.php?error=Invalid username you cannot use the username as admin212!");
            echo "<script>window.alert('Invalid username you cannot use the username as admin212!')</script>";
        }else if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM bloodbank_details WHERE username='$username'")) > 0) {
            // header("Location: index.php?error=user already exists!");
            echo "<script>window.alert('user already exists!')</script>";
        } 

        else{
        $reg="insert into bloodbank_details(`name`,`username`,`district`,`phone_number`,`password`,`gender`,`bloodgroup`,`keyword`) values ('$name','$username','$district','$phonenum','$password','$gender','$bloodgroup','$keyword')";
        mysqli_query($con,$reg);
        header("location:signin.php");

       

        
           
             
        
    }
?>
