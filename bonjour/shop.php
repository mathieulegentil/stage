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
                <div class="box">
                    <!-- box start -->
                    <h1>Shop</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque fugiat, totam natus, delectus ipsum quasi placeat obcaecati non illum neque porro reiciendis amet odio, ut voluptatem. Pariatur, excepturi beatae! Molestias?</p>
                </div> <!-- box end -->

                <div class="row">
                    <!-- row start -->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <!-- col-md-4 col-sm-6 center-responsive start -->

                        <div class="product">
                            <!--  product begin -->

                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                            </a>

                            <div class="text">
                                <!--  text begin -->

                                <h3>
                                    <a href="details.php">Bonjour.mu T-Shirt</a>
                                </h3>

                                <p class="price">$30</p>

                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>

                                    <a href="details.php" class="btn btn-primary">

                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>

                                    </a>
                                </p>

                            </div> <!--  text begin -->

                        </div> <!--  product end -->

                    </div> <!-- col-md-4 col-sm-6 center-responsive end -->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <!-- col-md-4 col-sm-6 center-responsive start -->

                        <div class="product">
                            <!--  product begin -->

                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 1">
                            </a>

                            <div class="text">
                                <!--  text begin -->

                                <h3>
                                    <a href="details.php">Bonjour.mu T-Shirt</a>
                                </h3>

                                <p class="price">$30</p>

                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>

                                    <a href="details.php" class="btn btn-primary">

                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>

                                    </a>
                                </p>

                            </div> <!--  text begin -->

                        </div> <!--  product end -->

                    </div> <!-- col-md-4 col-sm-6 center-responsive end -->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <!-- col-md-4 col-sm-6 center-responsive start -->

                        <div class="product">
                            <!--  product begin -->

                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-3b.jpg" alt="Product 1">
                            </a>

                            <div class="text">
                                <!--  text begin -->

                                <h3>
                                    <a href="details.php">Bonjour.mu T-Shirt</a>
                                </h3>

                                <p class="price">$30</p>

                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>

                                    <a href="details.php" class="btn btn-primary">

                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>

                                    </a>
                                </p>

                            </div> <!--  text begin -->

                        </div> <!--  product end -->

                    </div> <!-- col-md-4 col-sm-6 center-responsive end -->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <!-- col-md-4 col-sm-6 center-responsive start -->

                        <div class="product">
                            <!--  product begin -->

                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-4a.jpg" alt="Product 1">
                            </a>

                            <div class="text">
                                <!--  text begin -->

                                <h3>
                                    <a href="details.php">Bonjour.mu T-Shirt</a>
                                </h3>

                                <p class="price">$30</p>

                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>

                                    <a href="details.php" class="btn btn-primary">

                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>

                                    </a>
                                </p>

                            </div> <!--  text begin -->

                        </div> <!--  product end -->

                    </div> <!-- col-md-4 col-sm-6 center-responsive end -->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <!-- col-md-4 col-sm-6 center-responsive start -->

                        <div class="product">
                            <!--  product begin -->

                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-5a.jpg" alt="Product 1">
                            </a>

                            <div class="text">
                                <!--  text begin -->

                                <h3>
                                    <a href="details.php">Bonjour.mu T-Shirt</a>
                                </h3>

                                <p class="price">$30</p>

                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>

                                    <a href="details.php" class="btn btn-primary">

                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>

                                    </a>
                                </p>

                            </div> <!--  text begin -->

                        </div> <!--  product end -->

                    </div> <!-- col-md-4 col-sm-6 center-responsive end -->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <!-- col-md-4 col-sm-6 center-responsive start -->

                        <div class="product">
                            <!--  product begin -->

                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-6a.jpg" alt="Product 1">
                            </a>

                            <div class="text">
                                <!--  text begin -->

                                <h3>
                                    <a href="details.php">Bonjour.mu T-Shirt</a>
                                </h3>

                                <p class="price">$30</p>

                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>

                                    <a href="details.php" class="btn btn-primary">

                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>

                                    </a>
                                </p>

                            </div> <!--  text begin -->

                        </div> <!--  product end -->

                    </div> <!-- col-md-4 col-sm-6 center-responsive end -->
                </div> <!-- row end -->

                <center>
                    <ul class="pagination">
                        <li><a href="#">First Page</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Last Page</a></li>
                    </ul>
                </center>

            </div> <!-- col-md-9 end -->

        </div> <!--   container end -->
    </div> <!-- content  end -->

    <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>

</html>