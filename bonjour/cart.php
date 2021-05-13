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
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li class="active">
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
                        Cart
                    </li>
                </ul> <!--  breadcrumb end-->

            </div> <!-- col-md-12 end -->

            <div id="cart" class="col-md-9">
                <!-- col-md-9 start -->
                <div class="box">
                    <!-- box start -->

                    <form action="cart.php" method="post" enctype="multipart/form-data">
                        <!-- form start -->

                        <h1>Shopping Cart</h1>
                        <p class="text-muted">You currently have 3 item(s) in your cart</p>

                        <div class="table-responsive">
                            <!-- table-responsive start -->

                            <table class="table">
                                <!-- table start -->

                                <thead>
                                    <!-- thead start -->

                                    <tr>
                                        <!-- tr start -->

                                        <th colspan="2">Product</th>
                                        <th>quantity</th>
                                        <th>Unit Price</th>
                                        <th>Size</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub-Total</th>

                                    </tr> <!-- tr end -->

                                </thead> <!-- thead end -->

                                <tbody>
                                    <!-- tbody start -->

                                    <tr>
                                        <!-- tr start -->

                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/Product-3a.jpg" alt="Product 3a">
                                        </td>

                                        <td>
                                            <a href="#">Bonjour.mu Polo Shirt Men</a>
                                        </td>

                                        <td>

                                            2

                                        </td>

                                        <td>

                                            $50

                                        </td>

                                        <td>

                                            Large

                                        </td>

                                        <td>

                                            <input type="checkbox" name="remove[]">

                                        </td>

                                        <td>

                                            $100

                                        </td>

                                    </tr> <!-- tr end -->

                                </tbody> <!-- tbody end -->

                                <tbody>
                                    <!-- tbody start -->

                                    <tr>
                                        <!-- tr start -->

                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/Product-1.jpg" alt="Product 3a">
                                        </td>

                                        <td>
                                            <a href="#">Bonjour.mu T-Shirt</a>
                                        </td>

                                        <td>

                                            2

                                        </td>

                                        <td>

                                            $50

                                        </td>

                                        <td>

                                            Large

                                        </td>

                                        <td>

                                            <input type="checkbox" name="remove[]">

                                        </td>

                                        <td>

                                            $100

                                        </td>

                                    </tr> <!-- tr end -->

                                </tbody> <!-- tbody end -->

                                <tbody>
                                    <!-- tbody start -->

                                    <tr>
                                        <!-- tr start -->

                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 3a">
                                        </td>

                                        <td>
                                            <a href="#">Bonjour.mu Woman Tank Top</a>
                                        </td>

                                        <td>

                                            2

                                        </td>

                                        <td>

                                            $50

                                        </td>

                                        <td>

                                            Large

                                        </td>

                                        <td>

                                            <input type="checkbox" name="remove[]">

                                        </td>

                                        <td>

                                            $100

                                        </td>

                                    </tr> <!-- tr end -->

                                </tbody> <!-- tbody end -->

                                <tfoot>
                                    <!-- tfoot start -->

                                    <tr>
                                        <!-- tr start -->

                                        <th colspan="5">Total: </th>
                                        <th colspan="2">$100</th>

                                    </tr> <!-- tr start -->

                                </tfoot> <!-- tfoot end -->



                            </table> <!-- table end -->

                        </div> <!-- table-responsive end -->

                        <div class="box-footer">
                            <!-- box-footer start -->

                            <div class="pull-left">
                                <!-- pull-left start -->

                                <a href="index.php" class="btn btn-default">
                                    <!-- btn btn-default start -->

                                    <i class="fa fa-chevron-left"></i> Continue Shopping

                                </a> <!-- btn btn-default end -->

                            </div> <!-- pull-left end -->
                            <div class="pull-right">
                                <!-- pull-right start -->

                                <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                                    <!-- btn btn-default start -->

                                    <i class="fa fa-refresh"></i> Update Cart

                                </button> <!-- btn btn-default end -->

                                <a href="checkout.php" class="btn btn-primary">

                                    Proceed Checkout <i class="fa fa-chevron-right"></i>

                                </a>

                            </div> <!-- pull-right end -->



                        </div> <!-- box-footer end -->

                    </form> <!-- form end -->

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

            </div> <!-- col-md-9 end -->

            <div class="col-md-3">
                <!-- col-md-3 start -->

                <div id="order-summary" class="box">
                    <!-- box start -->

                    <div class="box-header">
                        <!-- box-header start -->

                        <h3>Order Summary</h3>

                    </div> <!-- box-header end -->

                    <p class="text-muted">
                        <!-- text-muted start -->

                        Shipping and Additional costs are calculated based on value you have entered

                    </p> <!-- text-muted end -->

                    <div class="table-responsive">
                        <!-- table-responsive start -->

                        <table class="table">
                            <!-- table start -->

                            <tbody>
                                <!-- tbody start -->

                                <tr>
                                    <!-- tr start -->

                                    <td>Order Sub-Total</td>
                                    <th>
                                        $200
                                    </th>

                                </tr> <!-- tr end -->
                                <tr>
                                    <!-- tr start -->

                                    <td>Shipping and Handling</td>
                                    <td>$0</td>

                                </tr><!-- tr end -->
                                <tr>
                                    <!-- tr start -->

                                    <td>Tax</td>
                                    <th>$0</th>

                                </tr><!-- tr end -->
                                <tr class="total">
                                    <!-- tr start -->

                                    <td>Total</td>
                                    <th>$200</th>

                                </tr><!-- tr end -->

                            </tbody> <!-- tbody end -->

                        </table> <!-- table end -->

                    </div> <!-- table-responsive end -->

                </div> <!-- box end -->

            </div> <!-- col-md-3 end -->

        </div> <!--   container end -->
    </div> <!-- content  end -->

    <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>

</html>