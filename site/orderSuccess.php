<?php
if(!isset($_REQUEST['id'])){
    header("Location: shoppingcart.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Success - PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style2.css">
    <style>
    .container{width: 100%;padding: 50px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Order Status</h1>
    <p>Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></p>
</div>

<a href="Index.php" class="btn btn-warning"> Go Back to Homepage</></a>
</body>
</html>