<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleLog.css">
    <title>Log In</title>
</head>

<body>
    <div class="container">
        <div class="fullLogin">
            <h2>
                <a href="homepage.php"><img src="../../resources/images/logo.png" alt="Logo" class="logo"></a>
                <span class="separator"></span>
                MENTAL HEALTH SUPPORT SYSTEM
            </h2>
            <form method="post" action="../../controllers/logCheckController.php">
                <div class="textbox">
                    <input type="text" name="username" placeholder="Enter Username">
                    <label>Username</label>
                </div>
                <div class="textbox">
                    <input type="password" name="pass" placeholder="Enter Password">
                    <label>Password</label>
                </div>
                <?php
                if (!empty($_SESSION['mess'])) {
                    ?>
                    <h5><?php echo $_SESSION['mess']; ?></h5>
                    <?php
                    session_destroy();
                }
                ?>
                <div class="forgotPass">
                    <a href="forgotPass.php">Forgot your password?</a>
                </div>
                <button class="login" name="login">Login</button>
                <div class="signup">
                    <a href="registration.php">Signup</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>