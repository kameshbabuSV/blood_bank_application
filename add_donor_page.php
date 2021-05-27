<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Home</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
          form{
            position: absolute;
              width:400px;
              left:50%;
              margin-top:40px;
              transform:translate(-50%,40px);
              
          }
          input,select{
              margin-bottom:15px;
          }
          </style>
   </head>
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:red;">
          <a class="navbar-brand" href="">Admin</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                 <a class="nav-link" href="#hosting">Add Donor</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="admin.php">Back</a>
                </li>
            </ul>
          </div>
        </nav>    
        
    <body class="text-center">
    <form class="form-signin" action="add_camp_donors.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal" style="color:red;">Add Donor</h1>
      <label for="district" class="sr-only">Name</label>
      <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="" autocomplete="off" autofocus="" onfocus="document.getElementById('message').style.display='none';">
      <label for="phonenum" class="sr-only">Mobile Number</label>
      <select name="bloodgroup" class="form-control">
            <option id="title">bloodgroup</option>
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="O+">O+</option>
            <option value="AB+">AB+</option>
            <option value="A-">A-</option>
            <option value="B-">B-</option>
            <option value="O-">O-</option>
            <option value="AB-">AB-</option>
        </select>
        <select name="gender" class="form-control">
            <option id="title">Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="transgender">Transgender</option>
        </select>
      <input type="text" id="phonenum" name="phonenum" class="form-control" placeholder="Mobile Number" autocomplete="off" required="" onfocus="document.getElementById('message').style.display='none';">
      <label for="address" class="sr-only">Address</label>
      <input type="text" id="address" name="address" class="form-control" placeholder="Address" autocomplete="off" required="" onfocus="document.getElementById('message').style.display='none';">
      <label for="district" class="sr-only">Location</label>
      <input type="text" id="district" name="district" class="form-control" placeholder="District" autocomplete="off" required="" onfocus="document.getElementById('message').style.display='none';">
      <label for="district" class="sr-only">Camp</label>
      <input type="text" id="district" name="camp" class="form-control" placeholder="Camp" autocomplete="off" required="" onfocus="document.getElementById('message').style.display='none';">
      
        
        <?php if (isset($_GET["success"])) { ?>
            <span class="text-success mt-1" id="message"><?php echo $_GET["success"]; ?></span>
                            
      <?php } ?>    
          
          
      <button class="btn btn-lg btn-danger btn-block" type="submit">Add Donor</button>
    </form>
    <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</body>