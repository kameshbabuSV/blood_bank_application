<?php
include 'db.php';
        $name=$_POST['name'];
        $phonenum= $_POST['phonenum'];
        $address=$_POST['address'];
        $district=$_POST['district'];
        $gender=$_POST['gender'];
        $bloodgroup=$_POST['bloodgroup'];
        $camp=$_POST['camp'];
 $reg="insert into camp_donors(`name`,`phone_number`,`location`,`district`,`gender`,`bloodgroup`,`date`,`camp`) values ('$name','$phonenum','$address','$district','$gender','$bloodgroup',now(),'$camp' )";

       

        if(!mysqli_query($con,$reg)){
           echo "<script>window.alert('failed to add')</script>";
        }
        else{
           // echo"inserted to database";
            echo "<script>window.alert('added successfully')</script>";
             //header("location:add_donor_page.php?success=Added Successfully");
        }
       
?>
