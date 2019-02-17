<?php
ob_start();
session_start();
require_once 'dbconnect.php';



$error = false;

if( isset($_POST['btn-login']) ) {

    // prevent sql injections/ clear user invalid inputs
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);
    // prevent sql injections / clear user invalid inputs

    if(empty($email)){
        $error = true;
        $emailError = "Please enter your email address.";
    } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
        $error = true;
        $emailError = "Please enter valid email address.";
    }

    if(empty($pass)){
        $error = true;
        $passError = "Please enter your password.";
    }

    // if there's no error, continue to login
    if (!$error) {



        $res=mysql_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
        $row=mysql_fetch_array($res);
        $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row

        if( $count == 1 && $row['userPass']==$pass ) {
            $_SESSION['user'] = $row['userId'];
            header("Location: home.php");
        } else {
            $errMSG = "Incorrect Credentials, Try again...";
        }

    }

}
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title class="her">PKMART - Login & Registration</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="style1.css" type="text/css">
    </head>
    <body>

    <div class="container">
        <div class="header">
            <div id="nava">
                <a href="Index.php">Home</a>
                <a href="#" >Sign In <?php echo $userRow['userEmail'];?></a>
                <a href="register.php" >Register</a>
            </div>
            <div id="blackBar"></div>
            <div class="logo">
                <a href="Index.php"><img src="Images/logo.png"  width="150" height="70" ></a>
            </div>
            <div class="search">
                <input type="text" class="searchTerm" placeholder="What are you looking for?">
                <button type="submit" class="searchButton" >Search</button>
                <div class="cart">
                    <a href="shoppingcart.php">Shopping Cart<img src="Images/shopping-cart.png" href="shoppingcart.php" class="cart"  width="60" height="70" border="5">
                    </a></div>
            </div>
        </div>
        <div id="login-form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

                <div class="col-md-12">

                    <div class="form-group">
                        <h2 class="h2">Sign In.</h2>
                    </div>

                    <div class="form-group">
                        <hr />
                    </div>

                    <?php
                    if ( isset($errMSG) ) {

                        ?>
                        <div class="form-group">
                            <div class="alert alert-danger">
                                <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                            <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
                        </div>
                        <span class="text-danger"><?php echo $emailError; ?></span>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
                        </div>
                        <span class="text-danger"><?php echo $passError; ?></span>
                    </div>

                    <div class="form-group">
                        <hr />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="jer" name="btn-login">Sign In</button>
                    </div>

                    <div class="form-group">
                        <hr />
                    </div>

                    <div class="form-group">
                        <a href="register.php">Haven't registered yet? Sign Up Here</a>
                    </div>

                </div>

            </form>
        </div>

    </div>

    </body>
    </html>
<?php ob_end_flush(); ?>