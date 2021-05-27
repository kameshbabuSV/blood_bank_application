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
</style>
<script>
function filter(){
    var input,filter,cards,cardcontainer,title,i,h4,li;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    cardcontainer = document.getElementById("myitems");
    cards = cardcontainer.getElementsByClassName("card");
    for(i=0;i<cards.length;i++){
        title = cards[i].querySelector(".card-header h4.names");
        if(title.innerText.toUpperCase().indexOf(filter)>-1){
            cards[i].style.display="";
        }
        else{
            cards[i].style.display="none";
        }
    }
}
</script>
<nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color:red">
    <a class="navbar-brand" href="#"><span class="title">Blood Drive</span></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                 <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="admin.php"> Main Page  </a>
                </li>
          </ul>
        </div>
      </nav><br><Br><br>
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center mt-3 ml-3 mr-3 ">
        <?php
        require 'db.php';
        $query = "select * from bloodbank_details order by name";
        $query_run = mysqli_query($con,$query);
        $check_faculty = mysqli_num_rows($query_run)>0;
        
        if($check_faculty){
            while($row = mysqli_fetch_array($query_run)){
                ?>
                        <div class="col" id="myitems">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                        <h4 class="my-0 fw-normal names"><?php echo $row['name']; ?></h4>
                                </div>
                                 <div class="card-body" id="card-body">
                                    <h1 class="card-title pricing-card-title"><?php echo $row['bloodgroup']; ?></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>GENDER : <?php echo $row['gender']; ?></li>
                                        <li class="district">DISTRICT : <?php echo $row['district']; ?></li>
                                    </ul>
                                      <button type="button" class="w-100 btn btn-lg btn-danger">CONTACT : <?php echo $row['phone_number']; ?></button>
                            </div>
                         </div>
 </div>
                            
                  
                
                <?php
                
            }
        }
        else{
            echo "no record found";
        }
        
        ?>
</div>
