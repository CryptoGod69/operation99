

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="img/logo.png" />
    <title>E-DEBBOU</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <![endif]-->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>

<body>



<!-- HEADER -->
<header>

    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +216 - 50 779 353</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> E_Debbou@Eeddebou.tn</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 20 , Rue Jasmin Nouvelle Ariana </a></li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="#"><i class="fa fa-dollar"></i> TND</a></li>
                <li><a href="login.html"><i class="fa fa-user-o"></i> Mon Compte</a></li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="#" class="logo">
                            <img src="./img/logo.png" alt="logo lena">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>
                            <select class="input-select">
                                <option value="0">les Categories</option>
                                <option value="1">Alimentation</option>
                                <option value="2">Promos</option>
                                <option value="3">Cuisine</option>
                                <option value="4">Librairie</option>
                                <option value="5">Ménage</option>
                                <option value="6">Beauté</option>
                                <option value="7">Charcuterie</option>

                            </select>
                            <input class="input" placeholder="Entrer une recherche">
                            <button class="search-btn">Rechercher</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->


                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div>
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span>Wishlist</span>
                                <div class="qty">420</div>
                            </a>
                        </div>
                        <!-- /Wishlist -->



                        <!-- Cart -->
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>

                                <span> Panier</span>
                                <div class="qty">7</div>
                            </a>

                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./img/product01.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>

                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./img/product02.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="cart-summary">
                                    <small>3 Item(s) selected</small>
                                    <h5>SUBTOTAL: $2940.00</h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="#">View Cart</a>
                                    <a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->
<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="#">Accueil</a></li>
                <li><a href="#">Nouveauté </a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Promos</a></li>
                <li><a href="#">Article</a></li>
                <li><a href="#">Fournisseur</a></li>

            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/shop01.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Alimentation<br>Catalogue</h3>
                        <a href="#" class="cta-btn">Achetez maintenant
                            <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/shop03.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Ménage<br>Catalogue</h3>
                        <a href="#" class="cta-btn">Achetez maintenant <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/shop02.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Librairie<br>Catalogue</h3>
                        <a href="#" class="cta-btn">Achetez maintenant <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Nouveau Produit</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Alimentation</a></li>
                            <li><a data-toggle="tab" href="#tab1">Ménage</a></li>
                            <li><a data-toggle="tab" href="#tab1">Librairie</a></li>
                            <li><a data-toggle="tab" href="#tab1">Beauté</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">

                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>

                                    <div class="product-body">
                                        <p class="product-category">Yaourt </p>
                                        <img src="./img/product01.png" alt="">
                                        <h3 class="product-name"><?php echo $row["name"]; ?></a> </h3>
                                        <h4 class="product-price">$ <?php echo $row["price"]; ?> </h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>

                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div>
                                <!-- /product -->
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/product01.png" alt="">
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>

                                    <div class="product-body">
                                        <p class="product-category">Yaourt </p>

                                        <h3 class="product-name"><?php echo $row["name"]; ?></a> </h3>
                                        <h4 class="product-price"> <?php echo $row["price"]; ?> </h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>


                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <input type="text" name="quantity" value="1" class="form-control" />
                                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                        <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div>
                                <!-- /product -->

                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/product02.png" alt="">
                                        <div class="product-label">
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Shampoo</p>
                                        <h3 class="product-name"><a href="#">johnson's baby shampoo</a></h3>
                                        <h4 class="product-price">4.680 TND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <input type="text" name="quantity" value="1" class="form-control" />
                                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                        <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div>
                                <!-- /product -->
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/product02.png" alt="">
                                        <div class="product-label">
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Shampoo</p>
                                        <h3 class="product-name"><a href="#">johnson's baby shampoo</a></h3>
                                        <h4 class="product-price">4.680 TND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <input type="text" name="quantity" value="1" class="form-control" />
                                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                        <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div>
                                <!-- /product -->
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/product02.png" alt="">
                                        <div class="product-label">
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Shampoo</p>
                                        <h3 class="product-name"><a href="#">johnson's baby shampoo</a></h3>
                                        <h4 class="product-price">4.680 TND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <input type="text" name="quantity" value="1" class="form-control" />
                                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                        <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div>
                                <!-- /product -->
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/product02.png" alt="">
                                        <div class="product-label">
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Shampoo</p>
                                        <h3 class="product-name"><a href="#">johnson's baby shampoo</a></h3>
                                        <h4 class="product-price">4.680 TND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <input type="text" name="quantity" value="1" class="form-control" />
                                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                        <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div>
                                <!-- /product -->
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/product02.png" alt="">
                                        <div class="product-label">
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Shampoo</p>
                                        <h3 class="product-name"><a href="#">johnson's baby shampoo</a></h3>
                                        <h4 class="product-price">4.680 TND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <input type="text" name="quantity" value="1" class="form-control" />
                                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                        <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div>
                                <!-- /product -->







                            </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


</div>
            </div>
        </div>
    </div>
</div>

</body>

</html>