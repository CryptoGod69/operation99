<?php
include "../../../Core/produit_stockC.php";
include "../../../Core/rateC.php";
session_start();

$ProduitC=new ProduitC();
$ProduitCC=new ProduitC();
$rateCC = new rateC();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Edebbou</title>
 
 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">
		 <link rel="stylesheet" href="css/rating.css">
 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2&appId=305696353656532&autoLogAppEvents=1"></script>
    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +216 50 779 353</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> edebbou@edebbou.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 20 , Rue jasmin ,Nv Ariana</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> TND</a></li>
						<?php 
if (isset($_SESSION['r']))
{
						?>
						<li><a href="logout.php"><i class="fa fa-user-o"></i><?php echo $_SESSION['r']  ?> </a></li>
						<?php
}else{
						?>
							<li><a href="login.php"><i class="fa fa-user-o"></i>Mon Compte </a></li>
							<li><a href="profil.php"><i class="fa fa-user-o"></i><?php echo $_SESSION['r'];?> </a></li>
<?php
}
							?>
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
								<a href="index.php" class="logo">
									<img src="./img/logo.png" alt="">
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
									<input class="input" placeholder="Entrer une recherche ">
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
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">3</div>
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
							<li><a href="reclamation.html">Reclamation</a></li>
							<li><a href="#">Fournisseur</a></li>
							
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
						<ul class="breadcrumb-tree">
							<li class="active"><a href="#">Promos</a></li>
						<li><a href="#">Categories </a></li>
						<li><a href="#">Tous</a></li>
					
						</ul>
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
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
							<?PHP  echo "<img src='../../images/".$_GET['image']."'>" ?>
		</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
							<?PHP  echo "<img src='../../images/".$_GET['image']."'>" ?>
							</div>

						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name" ><?php echo $_GET['Nom']; ?></h2>
							<div>
							<?php 	$_SESSION['Nom'] = $_GET['Nom'];?>
							
								<div class="container">
							<?php
if (!isset($_SESSION['r']))
{
							?>
							
										<form method="post" action="login.php" >
									<div class="row">	
									<div class="rating">
											<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="exellent !">5 stars</label>
											<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Tres Bien !">4 stars</label>
											<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Bien !">3 stars</label>
											<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Normal !">2 stars</label>
											<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Pas Bien !">1 star</label>
											<input type="hidden" value="<?php echo $_GET['Nom']; ?>" name="<?php echo $_GET['Nom']; ?>">
									</div>
								
									<div class="add-to-cart">
										
										<button class="add-to-cart-btn">Submit</button>
									</div>
									</form>
								</div>
								<?php
}else {
	
								?>
										<div class="rating">
										<?php 
								$nbr=$ProduitCC->recuperstars($_SESSION['Nom']);
foreach ($nbr as $row){
	for ($i = 1; $i <= $row['maxoc']; $i++) {
?>
										
										<input type="radio" checked/><label for="<?php echo $row['maxoc']; ?>" >1 star</label>
										<?php
	}}}
										?>
</div>
</div>
									<div>
								<h3 class="product-price"><?php echo number_format($_GET['Prix'],3); ?> TND	</h3>
								<span class="product-available">En Stock</span>
							</div>
							<p><?php echo $_GET['Descr']; ?></p>
							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								
								</div>
								
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>                 Ajouter au panier</button>
								</div>
								<div class="qty-label">
									Promo_Code
									
										<input type="text" class="form-control">
									
								
							

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> Ajouter a wishlist</a></li>
							
							</ul>

							<ul class="product-links">
								<li>Category:</li>
								<form action="store1.php" method="GET">
								<li>		<input type="hidden" name="Categorie" value="<?php echo $_GET['Categorie']; ?>">
								<button style="border: none; background-color: transparent;"><?php echo $_GET['Categorie']; ?></button></li>
						<form>
							</ul>

							<ul class="product-links">
								<li>Partager:</li>
								<li><div class="fb-share-button" data-href="https://www.facebook.com/E-Debbou-597512770694667" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12" style="position: relative;left: -300px;">
						<div id="product-tab" >
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Les offres</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
								<?php
								
$nbrrev = $rateCC->afficherreviewnb( $_SESSION['nomprod']);
foreach ($nbrrev as $row2)
{
								?>
								<li><a data-toggle="tab" href="#tab3">Reviews (<?php echo $row2['COUNT(ratestars)']; ?>)</a></li>
								<?php
}
								?>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in">
							
											<div class="container bootstrap snippet">
													<div class="table-responsive" style="overflow-x:initial;">
														<!-- PROJECT TABLE -->
														<table class="table colored-header datatable project-list">
															<thead>
																<tr>
																	<th>Nom Du Produit</th>
																	<th>Date D'Ajout</th>
																	<th>Code_Barre</th>
																	<th>Prix</th>
																	<th>Fournisseur</th>
																	<th>quantity</th>
																</tr>
															</thead>
															<tbody>
																<?php
																$listestock=$ProduitC->afficherstock($_GET['Nom']);
foreach ($listestock as $row1)
{
																?>
																<tr>
																	<td><a href="#"><?php echo $row1['Nom'] ?></a></td>
																	<?php
$datetable = $row1['Date'];
$conv = substr($datetable,0,10);
																	?>
																	<td><?php echo $conv ?></td>
																	<td><?php echo $row1['Code_Barre'] ?></td>
																	<td>
																	<?php echo $row1['Prix'] ?>TND
																	</td>
																	<td>	<?php echo $row1['Fournisseur'] ?></td>
																	
																	<td>	<?php echo $row1['quantity'] ?></td>
																	<?php
}
																	?>
																</tr>
							
							
															</tbody>
														</table>
														<!-- END PROJECT TABLE -->
</div>
									</div>
								</div>
							
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p><?php echo $row1['Descr'] ?></p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Rating -->
										<div class="col-md-3">
											<div id="rating">
												<div class="rating-avg">
												<?php
								$race = new ProduitC();
								$raceo=$race->recuperstars($_SESSION['Nom']);
								foreach ($raceo as $row2){
								
																?>
													<span><?php echo $row2['maxoc']; ?></span>

													<div class="rating-stars">
													<?php 
									for ($i = 1; $i <= $row2['maxoc']; $i++) {
?>
														<i class="fa fa-star"></i>
														<?php 

									}
?>
													</div>
													<?php
									}
													?>
												</div>
								</div>
											</div>
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews">
												<ul class="reviews">
													<li>
														
														<div class="review-heading">

															
															<div class="review-rating">
																														
	<?php 
	$rate11 = new rateC();
$nbr=$rate11->affichechaquevote($_SESSION['Nom']);
foreach ($nbr as $row){
															?>
															<h5 class="name"><?php echo $row['sess']; ?></h5>
														<?php
	for ($i = 1; $i <= $row['ratestars']; $i++) {
?>
																<i class="fa fa-star"></i>
														<?php 

	}
?>
																<i class="fa fa-star-o empty"></i> 
																<?php
}
																?>
															</div>
														</div>
													
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-3">
											<div id="review-form">
												<form class="review-form">
													<input class="input" type="text" placeholder="Your Name">
													<input class="input" type="email" placeholder="Your Email">
													<textarea class="input" placeholder="Your Review"></textarea>
													<div class="input-rating">
														<span>Your Rating: </span>
														<div class="stars">
															<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
															<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
															<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
															<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
															<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
														</div>
													</div>
													<button class="primary-btn">Submit</button>
												</form>
											</div>
										</div>
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
						<?php
					$Categ=$_GET['Categorie'];
					$ProduitCC=new ProduitC();
																$realated=$ProduitCC->recupererCategorie($Categ);
																
foreach ($realated as $row)
{
	
																?>
					</div>

					<!-- product -->
				
					<div class="col-md-3 col-xs-6">
				
						<div class="product">
				
							<div class="product-img">
							<?PHP  echo "<img src='../../images/".$row['image']."'>" ?>
							<?php 
if ($row['promovaleur']!=1)
{
							?>
							<div class="product-label">
									<span class="sale"><?php echo $row['promovaleur']*100 ?>%</span>
								</div>
								<?php 
}
								?>
							</div>
							<div class="product-body">
								<p class="product-category"><?php echo $row['Categorie']; ?></p>
								<h3 class="product-name"><a href="#"><?php echo $row['Nom']; $_SESSION['nomprod'] = $row['Nom']; ?></a></h3>
								<?php 
if ($row['promovaleur']!=1)
{
							?>
								<h4 class="product-price"><?php echo number_format($row['Prix']-($row['Prix']*$row['promovaleur']),3); ?> TND<del class="product-old-price"><?PHP echo number_format($row['Prix'],3	); ?></del></h4>
							<?php 
}
else 
{
							?>
								<h4 class="product-price"><?php echo number_format($row['Prix'],3); ?> TND</h4>
							<?php
}
?>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Ajouter àwishlist</span></button>
								
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Aperçu</span></button>
								</div>
								
							</div>
							
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>ajouter au panier</button>
</div>
							</div>
							<?php
}
					?>
						</div>
				
				
					<!-- /product -->

					
				</div>
				
				<!-- /row -->
				
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>S'inscrire aux <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Entrez votre Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Souscrire </button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="https://www.facebook.com/E-Debbou-597512770694667/" target="_blank"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								
							</ul>
						</div>
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
								<h3 class="footer-title">à propos de nous
									
								</h3>
								<p></p>
								<ul class="footer-links">
									
									<li><a href="#"><i class="fa fa-map-marker"></i>20 , Rue Jasmin Nouvelle Ariana</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+216 50 779 353</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>E-DEBBOU@E-DEBBOU.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Promo</a></li>
									<li><a href="#">Alimentation</a></li>
									<li><a href="#">Ménage</a></li>
									<li><a href="#">Librairie</a></li>
									<li><a href="#">Beauté</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">A propos de nous </a></li>
				
									<li><a href="#">Contactez nous</a></li>
									<li><a href="#">Politique de confidentialité</a></li>
									<li><a href="#">Commandes et Retours</a></li>
									<li><a href="#">Termes et Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">Mon Compte</a></li>
									<li><a href="#">Voir Panier</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Suivre ma commande</a></li>
									<li><a href="#">Aide</a></li>
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
