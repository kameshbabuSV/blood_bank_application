<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" href="css/signupsignin.css">
    <style>
        a{
            text-decoration: none;
            color: red;
        }
        a:hover{
            color: #ff6666;
        }
        .text-danger{
            color:red;
        }
    </style>
</head>
<body class="login_body">
    <div class="center">
        <h1>FORGOT PASSWORD</h1>
        <form action="passwordchange_validation.php" method="post">
            <div class="txt_field">
                <span class="details">USERNAME</span>
                <input type="text" name="username" required autocomplete="off" onfocus="document.getElementById('message').style.display='none';">
            </div>
            <div class="txt_field">
                <span class="details">NEW PASSWORD</span>
                <input type="text" name="new_password" required autocomplete="off" onfocus="document.getElementById('message').style.display='none';">
            </div>
            <?php if (isset($_GET["error"])) { ?>
                            <span class="text-danger mt-1" id="message"><?php echo $_GET["error"]; ?></span>
                        <?php } ?>
            <div class="pass"><a class="signin" href="signin.php">Back</a></div>
            <div class="message_body"></div>
            <button type="submit"class="login" name="login">Submit</button>
        </form>
    
    </div>
    
</body>
</html>