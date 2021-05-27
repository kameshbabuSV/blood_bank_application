<?php include('header.php'); ?>
<?php
        include 'db.php';
        $reg="select * from camp_details where now() < date";
        $query=mysqli_query($con,$reg);
        $num=mysqli_num_rows($query);
       
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
                margin:auto;
                border-radius:5px;
                box-sizing:border-box;
                border:1px solid #ff4d4d;
                height:40px;
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
    <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color:red;">
    <a class="navbar-brand" style="color:#fff;font-weight:900;"><span class="title">Blood Drive</span></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                 <a class="nav-link" href="#">Upcomming Camps</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="admin.php"> Main Page</a>
                </li>
          </ul>
        </div>
      </nav>
        <br><br><br>
        <form action="upcomming_camps.php" method="post">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                    <th>DISTRICT</th>
                    <th>TIME</th>
                    <th>DATE</th>
                    <th>LOCATION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($res=mysqli_fetch_array($query)){?>
                <tr>
                    <td><?php echo $res['district'];?></td>
                    <td><?php echo $res['timing'];?></td>
                    <td><?php echo $res['date'];?></td>
                    <td><?php echo $res['location'];?></td>
                </tr>
                <?php
                }
                ?>
                </tbody>
                
            </table>
        </form>
        
    </body>
</html>
