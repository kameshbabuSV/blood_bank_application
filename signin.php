
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="css/signupsignin.css">
    <style>
        a{
            text-decoration: none;
            color: red;
        }
        a:hover{
            color: #ff6666;
        }
        .text{
            color:red;
        }
}
    </style>
</head>
<body class="login_body">
   
    <div class="center">
        <h1>LOGIN</h1>
        <form action="validation.php" method="post">
            <div class="alert alert-danger" role="alert">

            </div>
            <div class="txt_field">
                <span class="details">USERNAME</span>
                <input type="text" name="username" required autocomplete="off" onfocus="document.getElementById('message').style.display='none';">
            </div>
            <div class="txt_field">
                <span class="details">PASSWORD</span>
                <input type="password" name="password" required autocomplete="off" onfocus="document.getElementById('message').style.display='none';">
            </div>
            <?php if (isset($_GET["error"])) { ?>
                            <span class="text" id="message"><?php echo $_GET["error"]; ?></span>
                        <?php } ?>
            
            <button type="submit"class="login" name="login">Login</button>
            <div class="signup_link">
            <div class="pass"><a class="forgot_pass" href="forgotpassword.php">Forgot Password</a></div>
                </div>
            
                <div class="signup_link">
                New Here?<a href="index.html">SignUp</a>
                </div>
                <div class="signup_link">
                    For Admin <a href="adminlogin.php">Login here</a>
                </div>
        </form>
    
    </div>
            
</body>
</html>