<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour.mu</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <div class="top">
        <!--  Top begin -->

        <div class="container">
            <!--  container begin -->

            <div class="col-md-6 offer">
                <!--  col-md-6 offer begin -->

                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="checkout.php">4 Items In Your Cart | Total Price: $300</a>

            </div> <!--  col-md-6 offer end -->

            <div class="col-md-6">
                <!--  col-md-6 begin -->

                <ul class="menu">
                    <!--  menu begin -->

                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go To Cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">Login</a>
                    </li>

                </ul> <!--  menu end -->

            </div> <!--  col-md-6 end -->

        </div> <!--  container end -->

    </div> <!--  Top end -->

    <div id="navbar" class="navbar navbar-default">
        <!--  navbar navbar-default begin -->

        <div class="container">
            <!--  container begin -->

            <div class="navbar-header">
                <!--  navbar-header begin -->

                <a href="index.php" class="navbar-brand home">
                    <!--  navbar-brand home begin -->

                    <img src="images/ecom-store-logo.png" alt="Bonjour.mu-logo" class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.png" alt="Bonjour.mu-logo Mobile" class="visible-xs">
                </a> <!--  navbar-brand home end -->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <!--  navbar-brand home begin -->
                    <span class="sr-only">Toggle Navigation</span>

                    <i class="fa fa-align-justify"></i>
                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <!--  navbar-brand home begin -->
                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search"></i>
                </button>

            </div> <!--  navbar-header end -->

            <div class="navbar-collapse collapse" id="navigation">
                <!--  navbar-collapse collapse begin -->

                <div class="padding-nav">
                    <!--  padding-nav begin -->

                    <ul class="nav navbar-nav left">
                        <!--  nav navbar-nav left begin -->

                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>

                    </ul> <!--  nav navbar-nav left end -->

                </div> <!--  padding-nav end -->

                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <!--  btn navbar-btn btn-primary begin -->

                    <i class="fa fa-shopping-cart"></i>

                    <span>4 Items In Your Cart</span>

                </a> <!--  btn navbar-btn btn-primary end -->

                <div class="navbar-collapse collapse right">
                    <!--  navbar-collapse collapse begin -->
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <!--  btn btn-primary navbar-btn begin -->
                        <span class="sr-only">Toggle Search</span>

                        <i class="fa fa-search"></i>

                    </button> <!--  btn btn-primary navbar-btn end -->

                </div> <!--  navbar-collapse collapse right end -->

                <div class="collapse clearfix" id="search">
                    <!--  collapse clearfix begin -->

                    <form method="get" action="results.php" class="navbar-form">
                        <!--  navbar-form begin -->

                        <div class="input-group">
                            <!--  input-group begin -->

                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                            <span class="input-group-btn">
                                <!--  input-group-btn begin -->

                                <button type="submit" name="search" value="Search" class="btn btn-primary">
                                    <!--  btn btn-primary begin -->

                                    <i class="fa fa-search"></i>

                                </button> <!--  btn btn-primary end -->
                            </span> <!--  input-group-btn end -->
                        </div><!--  input-group end -->

                    </form> <!--  navbar-form end -->

                </div> <!--  collapse clearfix end -->

            </div> <!--  navbar-collapse collapse end -->

        </div> <!--  container end -->

    </div> <!--  navbar navbar-default end -->

    <div id="content">
        <!--  content start -->
        <div class="container">
            <!--  container start -->
            <div class="col-md-12">
                <!--  col-md-12 start-->

                <ul class="breadcrumb">
                    <!--  breadcrumb start-->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Shop
                    </li>
                </ul> <!--  breadcrumb end-->

            </div> <!-- col-md-12 end -->

            <div class="col-md-3">
                <!-- col-md-3 start -->

                <?php

                include("includes/sidebar.php");

                ?>

            </div> <!-- col-md-3 end -->

            <div class="col-md-9">
                <!-- col-md-9 start -->
                <div id="productMain" class="row">
                    <!-- row start -->
                    <div class="col-sm-6">
                        <!-- col-sm-6 start -->
                        <div id="mainImage">
                            <!-- mainImage start -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- carousel slide start -->
                                <ol class="carousel-indicators">
                                    <!-- carousel-indicator start -->
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol> <!-- carousel-indicator end -->

                                <div class="carousel-inner">
                                    <!-- carousel-inner start -->
                                    <div class="item active">
                                        <!-- item start -->
                                        <center><img class="img-responsive" src="admin_area/product_images/Product-3a.jpg" alt="Product 3-a"></center>
                                    </div> <!-- item end -->
                                    <div class="item">
                                        <!-- item start -->
                                        <center><img class="img-responsive" src="admin_area/product_images/Product-3b.jpg" alt="Product 3-b"></center>
                                    </div> <!-- item end -->
                                    <div class="item">
                                        <!-- item start -->
                                        <center><img class="img-responsive" src="admin_area/product_images/Product-3c.jpg" alt="Product 3-c"></center>
                                    </div> <!-- item end -->
                                </div> <!-- carousel-inner end -->

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                    <!-- left carousel-control start -->
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a> <!-- left carousel-control end -->

                                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                    <!-- right carousel-control start -->
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a> <!-- right carousel-control end -->



                            </div> <!-- carousel slide end -->
                        </div> <!-- mainImage end -->
                    </div> <!-- col-sm-6 end -->

                    <div class="col-sm-6">
                        <!-- col-sm-6 start -->
                        <div class="box">
                            <!-- box start -->
                            <h1 class="text-center">Bonjour.mu Polo Shirt Men</h1>

                            <form action="details.php" class="form-horizontal" method="post">
                                <!-- form-horizontal start -->
                                <div class="form-group">
                                    <!-- form-group start -->
                                    <label for="" class="col-md-5 control-label">Products Quantity</label>

                                    <div class="col-md-7">
                                        <!-- col-md-7 start -->
                                        <select name="" id="product_qty" class="form-control">
                                            <!-- form-control start -->
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select> <!-- form-control end -->
                                    </div> <!-- col-md-7 end -->

                                </div> <!-- form-group end -->

                                <div class="form-group">
                                    <!-- form-group start -->
                                    <label class="col-md-5 control-label">Product Size</label>

                                    <div class="col-md-7">
                                        <!-- col-md-7 start-->

                                        <select name="product_size" class="form-control">
                                            <!-- form-control start -->

                                            <option>Select a Size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>

                                        </select> <!-- form-control end -->

                                    </div> <!-- col-md-7 end -->
                                </div> <!-- form-group end -->

                                <p class="price">$50</p>

                                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to Cart</button></p>


                            </form> <!-- form-horizontal end -->

                        </div> <!-- box end -->

                        <div class="row" id="thumbs">
                            <!-- row start -->

                            <div class="col-xs-4">
                                <!-- col-xs-4 start -->
                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                    <!-- thumb start -->
                                    <img src="admin_area/product_images/product-3a.jpg" alt="product 3" class="img-responsive">
                                </a> <!-- thumb end -->
                            </div> <!-- col-xs-4 end -->


                            <div class="col-xs-4">
                                <!-- col-xs-4 start -->
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                    <!-- thumb start -->
                                    <img src="admin_area/product_images/product-3b.jpg" alt="product 3" class="img-responsive">
                                </a> <!-- thumb end -->
                            </div> <!-- col-xs-4 end -->


                            <div class="col-xs-4">
                                <!-- col-xs-4 start -->
                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                    <!-- thumb start -->
                                    <img src="admin_area/product_images/product-3c.jpg" alt="product 3" class="img-responsive">
                                </a> <!-- thumb end -->
                            </div> <!-- col-xs-4 end -->

                        </div> <!-- row end -->

                    </div> <!-- col-sm-6 end -->


                </div> <!-- row end -->

                <div class="box" id="details">
                    <!-- box start -->

                    <h4>Product Details</h4>

                    <p>

                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem rerum totam quo vero eius velit porro eligendi voluptatibus blanditiis maxime quas, aliquid dolor illo corrupti dolorem, quos doloribus aut a.

                    </p>

                    <h4>Size</h4>

                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul>

                    <hr>

                </div> <!-- box end -->

                <div id="row same-height-row">
                    <!-- same-height-row start -->
                    <div class="col-md-3 col-sm-6">
                        <!-- col-md-3 col-sm-6 start -->
                        <div class="box same-height headline">
                            <!-- box same-height headline start -->
                            <h3 class="text-center">Products You like Maybe</h3>
                        </div> <!-- box same-height headline end -->
                    </div> <!-- col-md-3 col-sm-6 end -->

                    <div class="col-md-3 col-sm-6 center-responsive">
                        <!-- col-md-3 col-sm-6 center-responsive start -->
                        <div class="product same-height">
                            <!-- product same-height start -->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/Product-5a.jpg" alt="Product 5">
                            </a>

                            <div class="text">
                                <!-- text start -->
                                <h3><a href="details.php">Tank Tip Top Woman</a></h3>

                                <p class="price">$40</p>

                            </div> <!-- text end -->

                        </div> <!-- product same-height end -->
                    </div> <!-- col-md-3 col-sm-6 center-responsive end -->

                    <div class="col-md-3 col-sm-6 center-responsive">
                        <!-- col-md-3 col-sm-6 center-responsive start -->
                        <div class="product same-height">
                            <!-- product same-height start -->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/Product-4a.jpg" alt="Product 4">
                            </a>

                            <div class="text">
                                <!-- text start -->
                                <h3><a href="details.php">Street Shirt Woman</a></h3>

                                <p class="price">$45</p>

                            </div> <!-- text end -->

                        </div> <!-- product same-height end -->
                    </div> <!-- col-md-3 col-sm-6 center-responsive end -->

                    <div class="col-md-3 col-sm-6 center-responsive">
                        <!-- col-md-3 col-sm-6 center-responsive start -->
                        <div class="product same-height">
                            <!-- product same-height start -->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 6">
                            </a>

                            <div class="text">
                                <!-- text start -->
                                <h3><a href="details.php">Polo T-Shirt Woman</a></h3>

                                <p class="price">$50</p>

                            </div> <!-- text end -->

                        </div> <!-- product same-height end -->
                    </div> <!-- col-md-3 col-sm-6 center-responsive end -->

                </div> <!-- same-height-row end -->



            </div> <!--   container end -->
        </div> <!-- content  end -->
    </div>

    <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>

</html>