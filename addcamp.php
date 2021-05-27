<?php
        include 'db.php';
        $district=$_POST['district'];
        $timing= $_POST['timing'];
        $location=$_POST['location'];
        $date=$_POST['date'];
 $reg="insert into camp_details(`district`,`timing`,`date`,`location`) values ('$district','$timing','$date','$location')";

       

        if(!mysqli_query($con,$reg)){
                //header("location:admin.php?error= Failed to add camp");
        }
        else{
             
             //header("location:admin.php?success=Added Successfully");
             echo "<script>window.alert('Added Successfully')</script>";
        }
       
?>
