<!DOCTYPE html>

<html>
<head>
    <title>PKMART The online store</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="slideshow.js" language="JavaScript" type="text/javascript"></script>

    <title>Sponsored Products you might like</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style1.css"/>

</head>

<body>
<div class="header">
    <div id="nava">
        <a href="login.php" >Login</a>
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
            <a href="viewCart.php">Shopping cart<img src="Images/shopping-cart.png" href="viewCart.php" class="cart"  width="60" height="70" border="5">
            </a></div>
    </div>
</div>

<div class="wrapper">
    <nav>
        <div class="dropdown">
            <button class="dropbtn">Dropdown</button>
            <div class="dropdown-content">
                <a href="shoppingcart.php">Online Store</a>
                <a href="shoppingcart.php">Products</a>
                <a href="#">Customer Service</a>
            </div>
        </div>

        <a href="shoppingcart.php">My Local store</a>
        <a href="shoppingcart.php">Today deals</a>

    </nav>



    <div class="slideshow" style="max-width:500px" align="center">
        <img class="mySlides" src="Images/slideshow/s1.jpg" style="width:100%" height="310">
        <img class="mySlides" src="Images/slideshow/s2.jpg" style="width:100%"height="310" width="770">
        <img class="mySlides" src="Images/slideshow/s3.jpg" style="width:100%"height="310">
        <img class="mySlides" src="Images/slideshow/s4.jpg" style="width:100%"height="310">
        <img class="mySlides" src="Images/slideshow/s5.jpg" style="width:100%"height="310" >
        <img class="mySlides" src="Images/slideshow/s6.jpg" style="width:100%"height="310">
    </div>


    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
</div>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>Sponsored Products you might like</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn" href="#carousel-example"
                       data-slide="prev"></a><a class="right fa fa-chevron-right btn" href="#carousel-example"
                                                data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>Product A</h5>
                                            <h5 class="price-text-color">$7.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="photo">
                                    <img src="Images/products/product_001.jpg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
                                        </p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>Product B</h5>
                                            <h5 class="price-text-color">$9.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="photo">
                                    <img src="Images/products/product_002.jpg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
                                        </p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>Product C</h5>
                                            <h5 class="price-text-color">$7.58</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="photo">
                                    <img src="Images/products/product_003.jpg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
                                        </p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>Another product</h5>
                                            <h5 class="price-text-color">$3.75</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="photo">
                                    <img src="Images/products/product_001.jpg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
                                        </p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>Product</h5>
                                            <h5 class="price-text-color">$7.17</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="photo">
                                    <img src="Images/products/product_001.jpg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
                                        </p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>Product</h5>
                                            <h5 class="price-text-color">$19.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="photo">
                                    <img src="Images/products/product_002.jpg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
                                        </p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>Product</h5>
                                            <h5 class="price-text-color">$1.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="photo">
                                    <img src="Images/products/product_003.jpg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
                                        </p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>Product</h5>
                                            <h5 class="price-text-color">$1.09</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="photo">
                                    <img src="http://www.prepbootstrap.com/Content/images/template/productslider/product_001.jpg" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
                                        </p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--footer-->
<footer class="footer1">
    <div class="container">

        <div class="row"><!-- row -->

            <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                <ul class="list-unstyled clear-margins"><!-- widgets -->

                    <li class="widget-container widget_nav_menu"><!-- widgets list -->

                        <h1 class="title-widget">PKMART Services</h1>

                        <ul>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i> Money Centre</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i> Product Care Plans</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i> Success Stories</a></li>

                        </ul>

                    </li>

                </ul>


            </div><!-- widgets column left end -->



            <div class="col-lg-3 col-md-3"><!-- widgets column left -->

                <ul class="list-unstyled clear-margins"><!-- widgets -->

                    <li class="widget-container widget_nav_menu"><!-- widgets list -->

                        <h1 class="title-widget">Get to know us</h1>

                        <ul>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  FAQ</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Return Policy</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Shipping and Delivery</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  About Us</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Corporate</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Suppliers</a></li>


                        </ul>

                    </li>

                </ul>


            </div><!-- widgets column left end -->



            <div class="col-lg-3 col-md-3"><!-- widgets column left -->

                <ul class="list-unstyled clear-margins"><!-- widgets -->

                    <li class="widget-container widget_nav_menu"><!-- widgets list -->

                        <h1 class="title-widget">My Account</h1>

                        <ul>


                            <li><a href="login.php"><i class="fa fa-angle-double-right"></i> Sign In</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Order Status</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> My Wish list</a></li>

                        </ul>

                    </li>

                </ul>


            </div><!-- widgets column left end -->


            <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                <ul class="list-unstyled clear-margins"><!-- widgets -->

                    <li class="widget-container widget_nav_menu"><!-- widgets list -->

                        <h1 class="title-widget">Customer Services</h1>

                        <ul>


                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Return Policy</a></li>
                            <li><a href="contactUs.php"><i class="fa fa-angle-double-right"></i> Contact us</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Feedback</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Carrier</a></li>
                        </ul>

                    </li>

                </ul>



                <ul class="list-unstyled clear-margins"><!-- widgets -->

                    <li class="widget-container widget_recent_news"><!-- widgets list -->

                        <h1 class="title-widget" href="contactUs.php">Contact Us </h1>


                        <div class="social-icons">

                            <ul class="nomargin">

                                <a href="#"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
                                <a href="#"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
                                <a href="#"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
                                <a href="mailto:pkmart@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>

                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--header-->

<div class="footer-bottom">

    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                <div class="copyright">

                    © 2017, PKMART, All rights reserved

                </div>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                <div class="design">

                    <a href="Index.php">PKMART</a> |  <a target="_blank" href="#">Web Design & Development by PKMART</a>

                </div>

            </div>

        </div>

    </div>

</div>



</body>
</html>