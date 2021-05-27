<?php include('header.php'); ?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `bloodbank_details` WHERE CONCAT(`username`, `district`, `bloodgroup`, `phone_number`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `bloodbank_details`";
    $search_result = filterTable($query);
}

function filterTable($query)
{
    include 'db.php';
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>FILTER</title>
        <style>
           table{
             text-align:center;
            }
            .btn{
                width:100px;
                margin:auto;
            }
            input[type="text"]{
                width:300px;
                border-radius:5px;
                box-sizing:border-box;
                border:1px solid #ff4d4d;
                height:40px;
                margin:auto;
            }       
            ::placeholder{
              color:#ff3333;
              text-align:center;
            }
            .link{
                height:40px;
                width:100px;
                margin-top:10px;
                margin-left:30%;
                margin-bottom:10px;
                background:#fff;
                border:1px solid #ff4d4d;
                text-align:center;
                border-radius:5px;
                color:red;
            }
             </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
    <a class="navbar-brand" style="color:#fff;font-weight:900;"><span class="title">Blood Drive</span></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                 <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="home.html"> Main Page</a>
                </li>
          </ul>
          
        </div>
      </nav>
        <br><br><br>
        <form action="filter.php" method="post">
            <input class="mr-sm-2 " type="text" name="valueToSearch" placeholder="SEARCH" autocomplete="off"><br><br>
            <input class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="search" value="Filter">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                    <th>NAME</th>
                    <th>DISTRICT</th>
                    <th>BLOOD GROUP</th>
                    <th>PHONE NUMBER</th>
                </tr>
            </thead>

                <?php while($row = mysqli_fetch_array($search_result)):?>
                  <tbody>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['district'];?></td>
                    <td><?php echo $row['bloodgroup'];?></td>
                    <td><?php echo $row['phone_number'];?></td>
                </tr>
                </tbody>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
