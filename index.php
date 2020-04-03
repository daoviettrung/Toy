<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>E-SHOP HTML Template</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="css/slick.css" />
        <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->

    </head>

    <body>
        <!-- HEADER -->
        <header>
            <!-- top Header -->
            <div id="top-header">
                <div class="container">
                    <div class="pull-left">
                        <span>Welcome to E-shop!</span>
                    </div>
                    <div class="pull-right">
                        <ul class="header-top-links">
                            <li><a href="#">Store</a></li>
                            <li><a href="#">Newsletter</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li class="dropdown default-dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
                                <ul class="custom-menu">
                                    <li><a href="#">English (ENG)</a></li>
                                    <li><a href="#">Russian (Ru)</a></li>
                                    <li><a href="#">French (FR)</a></li>
                                    <li><a href="#">Spanish (Es)</a></li>
                                </ul>
                            </li>
                            <li class="dropdown default-dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
                                <ul class="custom-menu">
                                    <li><a href="#">USD ($)</a></li>
                                    <li><a href="#">EUR (€)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /top Header -->

            <!-- header -->
            <div id="header">
                <div class="container">
                    <div class="pull-left">
                        <!-- Logo -->
                        <div class="header-logo">
                            <a class="logo" href="#">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                        <!-- /Logo -->

                        <!-- Search -->
                        <div class="header-search">
                            <form action="search.php" method="GET">
                                <div align="center">
                                    Search: <input type="text" name="search" />
                                    <input type="submit" value="search" />
                                </div>
                            </form>
                        </div>
                        <!-- /Search -->
                    </div>
                    <div class="pull-right">
                        <ul class="header-btns">
                            <!-- Account -->
                            <li class="header-account dropdown default-dropdown">
                                <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                                    <div class="header-btns-icon">
                                        <i class="fa fa-user-o"></i>
                                    </div>
                                    <strong class="text-uppercase">customer <i class="fa fa-caret-down"></i></strong>
                                </div>
                                <a href="login.php" class="text-uppercase">Login</a> <br>
                                <a href="registration.php" class="text-uppercase">sign up</a>
                                <ul class="custom-menu">
                                    <li><a href="#"><i class="fa fa-user-o"></i> customer</a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>

                                    <li><a href="login.php"><i class="fa fa-exchange"></i> Compare</a></li>
                                    <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                                    <li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
                                    <li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                                </ul>
                            </li>
                            <!-- /Account -->

                            <!-- Cart -->
                            <li class="header-cart dropdown default-dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <div class="header-btns-icon">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="qty">3</span>
                                    </div>
                                    <strong class="text-uppercase" >My Cart:</strong>
                                    <br>
                                    <a href="cart.php">view cart </a>
                                </a>

                            </li>
                            <!-- /Cart -->

                            <!-- Mobile nav toggle-->
                            <li class="nav-toggle">
                                <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                            </li>
                            <!-- / Mobile nav toggle -->
                        </ul>
                    </div>
                </div>
                <!-- header -->
            </div>
            <!-- container -->
        </header>
        <!-- /HEADER -->

        <!-- NAVIGATION -->
        <div id="navigation">
            <!-- container -->
            <div class="container">
                <div id="responsive-nav">
                    <!-- category nav -->

                    <div class="category-nav">
                        <span class="category-header">Home <i class="fa fa-list"></i></span>
                        <ul class="category-list">
                            <li class="dropdown side-dropdown">
                              <li><a href="#">Lego</a></li>
                              <li><a href="#">Car</a></li>
                              <li><a href="#">Supperman</a></li>
                              <li><a href="#">Naruto</a></li>
                              <li><a href="#">One Piece</a></li>
                              <li><a href="#">Dragon ball</a></li>
                                <div class="custom-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-links">

                                            </ul>


                                        </div>
                                    </div>
                                </div>
                            </li>



                            <div class="custom-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="list-links">


                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4 hidden-sm hidden-xs">
                                        <a class="banner banner-2" href="#">
                                            <img src="./img/banner04.jpg" alt="">
                                            <div class="banner-caption">

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </li>

                            <li class="dropdown side-dropdown">

                                <div class="custom-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-links">

                                            </ul>

                                        </div>
                                        <div class="col-md-4">


                                        </div>
                                        <div class="col-md-4">


                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
                <!-- menu nav -->
                <div class="menu-nav">
                    <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                    <ul class="menu-list">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Toys for girls <i class="fa fa-caret-down"></i></a>
                            <div class="custom-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row hidden-sm hidden-xs">
                                    <div class="col-md-12">
                                        <hr>
                                        <a class="banner banner-1" href="#">
                                            <img src="./img/banner05.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h2 class="white-color">NEW COLLECTION</h2>
                                                <h3 class="white-color font-weak">HOT DEAL</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                       
                            <div class="custom-menu">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="hidden-sm hidden-xs">
                                            <a class="banner banner-1" href="#">

                                                <img src="img/anh-7-vien-ngoc-rong-dep-nhat_023308057.png" alt="">
                                                <div class="banner-caption text-center">
                                                    <h3 class="white-color text-uppercase">Toys for girls</h3>
                                                </div>
                                            </a>
                                            <hr>
                                        </div>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="hidden-sm hidden-xs">
                                            <a class="banner banner-1" href="#">
                                                <img src="img/one_piece_stampede.jpg" alt="">
                                                <div class="banner-caption text-center">
                                                    <h3 class="white-color text-uppercase">Toys for girls</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <hr>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="hidden-sm hidden-xs">
                                            <a class="banner banner-1" href="#">
                                                <img src="./img/banner08.jpg" alt="">
                                                <div class="banner-caption text-center">
                                                    <h3 class="white-color text-uppercase">Accessories</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <hr>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="hidden-sm hidden-xs">
                                            <a class="banner banner-1" href="#">
                                                <img src="./img/banner09.jpg" alt="">
                                                <div class="banner-caption text-center">
                                                    <h3 class="white-color text-uppercase">Bags</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <hr>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Women’s Clothing</a></li>
                                            <li><a href="#">Men’s Clothing</a></li>
                                            <li><a href="#">Phones & Accessories</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Toys for boy</a></li>
                        <li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
                            <ul class="custom-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="product-page.html">Product Details</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- menu nav -->
                <!-- menu nav -->
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /NAVIGATION -->

    <!-- HOME -->
    <div id="home">
        <!-- container -->
        <div class="container">
            <!-- home wrap -->
            <div class="home-wrap">
                <!-- home slick -->
                <div id="home-slick">
                    <!-- banner -->
                    <div class="banner banner-1">

                        <img src="img/ironmen.jpg" alt="" height="600" width="700">
                        <div class="banner-caption text-center">


                        </div>
                    </div>
                    <!-- /banner -->

                    <!-- banner -->
                    <div class="banner banner-1">

                        <img src="img/unnamed (1).jpg" alt="" height="600" width="700">
                        <div class="banner-caption">

                        </div>
                    </div>
                    <!-- /banner -->

                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="img/5d13a020af79e.image.jpg" alt="" height="600" width="700">
                        <div class="banner-caption">

                        </div>
                    </div>
                    <!-- /banner -->
                </div>
                <!-- /home slick -->
            </div>
            <!-- /home wrap -->
        </div>
        <!-- /container -->
    </div>
    <!-- /HOME -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">
                <!-- banner -->

                <div class="col-md-4 col-sm-6">
                    <a class="banner banner-1" href="#">

                        <img src="img/1-1579799339047133719846.jpg" alt="">
                        <div class="banner-caption text-center">

                        </div>
                    </a>
                </div>
                <!-- /banner -->   

                <!-- banner -->
                <div class="col-md-4 col-sm-6">
                    <a class="banner banner-1" href="#">
                        <img src="img/anh-7-vien-ngoc-rong-dep-nhat_023308057.png" alt="" height=" 203">
                        <div class="banner-caption text-center">

                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
                    <a class="banner banner-1" href="#">

                        <img src="img/one_piece_stampede.jpg" alt="">
                        <div class="banner-caption text-center">

                        </div>
                    </a>
                </div>
                <!-- /banner -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- section -->

    <div class="section">
        <!-- container -->





        <!-- section -->
        <?php
        include 'connecthome.php';
        $sql = "select * from toy";
        ?>
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="title">Toy hot</h2>
                        </div>
                    </div>
                    <!-- section title -->

                    <!-- Product Single -->
                    <?php
                    $result = pg_query($conn, $sql);
                    while ($row = pg_fetch_row($result)) {
                        ?>
                        <div class="col-md-3 col-sm-6 col-xs-6" >
                            <div class="product product-single" >
                                <div class="product-thumb" >
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                    <img src="<?= $row[2] ?>" alt="" height="300px">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price"><?= $row[3] ?></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <h2 class="product-name"><a href="#"><?= $row[1] ?></a></h2>
                                    <div class="product-btns">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <a href="cartcode.php?id=<?= $row[0] ?>&q=1" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                        <a href="product-page.php?id=<?= $row[0] ?>"> view product</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->

                        <!-- Product Single -->

                        <!-- /Product Single -->

                        <!-- Product Single -->

                        <!-- /Product Single -->

                        <!-- Product Single -->

                        <?php
                    }
                    ?>
                    <!-- /Product Single -->
                </div>
                <!-- /row -->

                <!-- row -->

                <!-- /row -->

                <!-- row -->

                <!-- /footer logo -->



                <!-- footer social -->
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
                <!-- /footer social -->
            </div>
        </div>
        <!-- /footer widget -->

        <!-- footer widget -->
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="footer">
                <h3 class="footer-header">My Account</h3>
                <ul class="list-links">
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li><a href="#">Compare</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </div>
        <!-- /footer widget -->

        <div class="clearfix visible-sm visible-xs"></div>

        <!-- footer widget -->
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="footer">
                <h3 class="footer-header">Customer Service</h3>
                <ul class="list-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Shiping & Return</a></li>
                    <li><a href="#">Shiping Guide</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
        <!-- /footer widget -->

        <!-- footer subscribe -->
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="footer">
                <h3 class="footer-header">Stay Connected</h3>
                <p></p>
                <form>
                    <div class="form-group">
                        <input class="input" placeholder="Enter Email Address">
                    </div>
                    <button class="primary-btn">Join Newslatter</button>
                </form>
            </div>
        </div>
        <!-- /footer subscribe -->
    </div>
    <!-- /row -->
    <hr>
    <!-- row -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <!-- footer copyright -->
            <div class="footer-copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
            <!-- /footer copyright -->
        </div>
    </div>
    <!-- /row -->
</div>
<!-- /container -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>
