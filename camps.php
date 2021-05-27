<?php include('header.php'); ?>
<?php require('db.php'); ?>
<?php 
require('db.php');
if(isset($_POST["search"])){
    $valuetosearch=$_POST['valuetosearch'];
    $query="select district from 'bloodbank_details' where district='$valuetosearch' ";
    $search_result=filtertable($query);
}
else{
    $query="select * from 'bloodbank_details' ";
    $search_result=filtertable($query);
}
function filtertable($query){
    require('db.php');
    $filter_result=mysqli_query($con,$query);
    return $filter_result;
}

?>
<style>
    h4,h1{
        text-transform: uppercase;
        font-weight: 600;
    }
    .title{
        color: red;
    }
</style>

<nav class="navbar navbar-expand-md navbar-dark bg-danger">
          <a class="navbar-brand" href="">Blood Drive</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                 <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item active">
                 <a class="nav-link" href="home.html">Back</a>
                </li>
            </ul>
          </div>
        </nav> <br><Br><br>
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center mt-3 ml-3 mr-3 ">
        <?php
        require 'db.php';
        $query = "select * from camp_details where now() <= date";
        $query_run = mysqli_query($con,$query);
        $check_faculty = mysqli_num_rows($query_run)>0;
        
        if($check_faculty){
            while($row = mysqli_fetch_array($query_run)){
                ?>
                        <div class="col-md-12" id="myitems">
                            <div class="card mb-15 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                        <h4 class="my-0 fw-normal names"><?php echo $row['district']; ?></h4>
                                </div>
                                 <div class="card-body" id="card-body">
                                    <h1 class="card-title pricing-card-title"><?php echo $row['date']; ?></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li><strong>LOCATION</strong> : <?php echo $row['location']; ?></li>
                                    </ul>
                                      <button type="button" class="w-100 btn btn-lg btn-danger">TIMING : <?php echo $row['timing']; ?></button>
                            </div>
                         </div>
 </div>
                            
                  
                
                <?php
                
            }
        }
        else{
            echo "no upcomming camps";
        }
        
        ?>
</div>