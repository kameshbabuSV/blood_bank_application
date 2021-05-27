<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="css/signupsignin.css">
    <style>
        a{
            text-decoration: none;
            color: #fff;
        }
        a:hover{
            color: #ff6666;
        }
        .text{
            color:red;
        }
    </style>
</head>
<body class="login_body">
    <div class="center" style="height: 450px;">
        <h1>ADMIN</h1>
        <form action="adminvalidate.php" method="post">
            <div class="txt_field">
                <span class="details">USERNAME</span>
                <input type="text" name="username"  autocomplete="off" value="admin212" onfocus="document.getElementById('message').style.display='none';">
            </div>
            <div class="txt_field">
                <span class="details">PASSWORD</span>
                <input type="password" name="password"  autocomplete="off" value="admin212" onfocus="document.getElementById('message').style.display='none';">
            </div>
            <?php if (isset($_GET["error"])) { ?>
                            <span class="text" id="message"><?php echo $_GET["error"]; ?></span>
                        <?php } ?>
                        <button type="submit"class="login" name="login">Login</button>
             <button type="submit"class="login" name="login"> <a class="nav-link" href="signin.php">back</a></button>
            
        </form>
    
    </div>
    
</body>
</html>