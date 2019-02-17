<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
    header("Location: index.php");
    exit;
}
// select loggedin users detail
$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Welcome - <?php echo $userRow['userEmail']; ?></title>

        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>

    <nav class="navbar">
        <div class="container">

            <div class="header">
                <div id="nava">
                    <a href="Index.php">Home</a>
                    <a href="#" >Hi <?php echo $userRow['userEmail'];?></a>
                    <a href="logout.php?logout" >Logout</a>
                </div>
                <div id="blackBar"></div>
                <div class="logo">
                    <a href="Index.php"><img src="Images/logo.png"  width="150" height="70" ></a>
                </div>
                <div class="search">
                    <input type="text" class="searchTerm" placeholder="What are you looking for?">
                    <button type="submit" class="searchButton" >Search</button>
                    <div class="cart">
                        Shopping cart<a href="ShopCart.html">Shopping Cart<img src="Images/shopping-cart.png" href="shopping-cart.html" class="cart"  width="60" height="70" border="5">
                        </a></div>
                </div>
            </div>
        </div>
    </nav>

    <div id="wrapper">

        <div class="container">

            <div class="page-header">
                <h3>PKMART - Your profile</h3>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h1>Lorem ipsum...</h1>
                </div>
            </div>

        </div>

    </div>



    </body>
    </html>
<?php ob_end_flush(); ?>