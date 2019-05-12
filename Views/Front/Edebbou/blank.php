<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 
		<title>Electro - HTML Ecommerce Template</title>

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
 		<![endif]-->

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
						
						<li><a href="register.html"><i class="fa fa-user-o"></i><?php session_start ();  if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 

	echo '<a href="./profilfront.php">'.$_SESSION['r']     ;
     
    

}

else { 
      echo 'Veuillez vous connecter </br>';  
	  echo '<a href="./login.php">Cliquer pour se connecter</a>';

}  

?></a></li>
<li><a href="register.html"><i class="fa fa-user-o"></i><a href="./logout.php">  déconnecter</a>;
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
								<li>	 <?php   if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 
if	($_SESSION['f']=='Administrateur')
{
	echo '<a href="../../index.html">'.$_SESSION['f']     ;

}
     
    

}


?>
   
				
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
										<div class="qty">69</div>
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
							<li class="active"><a href="index.php">Accueil</a></li>
							<li><a href="storenew.php">Nouveauté </a></li>
							<li><a href="store.php">Categories</a></li>
							<li><a href="storepromo.php">Promos</a></li>
							<li><a href="blank.php">Reclamation</a></li>
							
						</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
     
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Regular Page</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>	
							<li class="active">Blank</li>
						</ul>
						
						<div class="single-product-tab-area mg-tb-15">
							<!-- Single pro tab review Start-->
							<div class="single-pro-review-area">
									<div class="container-fluid">
											<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
															<div class="review-tab-pro-inner">
																	<ul id="myTab3" class="tab-review-design">
																			<li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Editez vote Réclamation</a></li>		
																	</ul>
																	<br>
																	<div id="myTabContent" class="tab-content custom-product-edit">
																					<form method="post" action="ajoutReclam.php" id="ajoutprod">
																			<div class="product-tab-list tab-pane fade active in" id="description">
																					<div class="row">
																							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																									<div class="review-content-section">
																											<div class="input-group mg-b-pro-edt">
																												<a> Sujet </a> <!--<span class="input-group-addon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span> -->
																													<select name="sujet">
																														<option selected="selected" value="périmé">Produit Périmé</option>
																														<option value="endommagé">Produit Endommage</option>
																														<option value="casse">Produit Casse</option>
																														</select>
																											</div>
																											<br>
																											<div class="input-group mg-b-pro-edt">
																													<span class="input-group-addon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
																													<input type="text" class="form-control" placeholder="Texte" name="texte" id="texte" required>
																											</div>
																											
																					
																									</div>
																							</div>
																							<br>
																							<br>
																							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																									<div class="review-content-section">
																													<div class="input-group mg-b-pro-edt">
																																	<span class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
																																	<input type="datetime-local" class="form-control" placeholder="Date de votre Reclamation" name="date_reclam"  id="date_reclam" required>
																											</div>				
																					</div>
																					<br>
																					<br>
																					<div class="row">
																							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																									<div class="text-center mg-b-pro-edt custom-pro-edt-ds">
																											<input class="btn btn-primary waves-effect waves-light m-r-10" type="submit" name="save" value="save" >
								
																											<input type="sumbit" class="btn btn-warning waves-effect waves-light " name="Annuler" value="Annuler" >
														<p style="color : red; " id = "erreur"></p>
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
					</div>
			</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>


						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
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
