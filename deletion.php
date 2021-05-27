<?php
       include 'db.php';
        $district=$_POST['district'];
        $date=$_POST['date'];
        $location=$_POST['location'];
        
 $reg="delete from camp_details where district='$district' and date='$date' and location='$location'";

       

        if(!mysqli_query($con,$reg)){
                header("location:delete_camp.php?error=No such Camps Found...");
        }
        else{
             header("location:delete_camp.php?success=Deleted Successfully");
        }
       
?>
