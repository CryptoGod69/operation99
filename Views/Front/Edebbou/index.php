
<?php
include_once "actions.php";		
include "../../../Core/produit_stockC.php";
$ProduitsC=new ProduitC();
$listeprod=$ProduitsC->afficherProduit();
$listeprod1=$ProduitsC->afficherProduit();
?>

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
									<a href="#carta" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span> Panier</span>
										<div class="qty">c</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">



<?php				
if(isset($_COOKIE["shopping_cart"]))
{
$cookie_data = stripslashes($_COOKIE['shopping_cart']);
$cart_data = json_decode($cookie_data, true);
$total = 0;

foreach($cart_data as $keys => $values)
{
?>
											<div class="product-widget">
										
												<div class="product-body">
													<h3 class="product-name"><a href="#"><?php echo $values["item_name"]; ?></a></h3>
													<h4 class="product-price"><span class="qty"> x<?php echo $values["item_quantity"]; ?></span><?php echo $values["item_price"]; ?></h4>
												</div>
												<td><a href="index.php?action=deletep&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">X</span></a></td>
											</div>
<?php
$total = $total + ($values["item_quantity"] * $values["item_price"]);
}}
$isTouch = isset($total);
if (!$isTouch){
echo 'You have no orders yet ! ';
}
?>

										</div>

										<div class="cart-summary">
										<small>Item(s) selected</small>
											<h5>SUBTOTAL:
<?php 
$isTouch = isset($total);
if (!$isTouch){
echo '0';
}else{
	echo $total;
}
?> 
                       TND </h5>
											
                    </div>
										<div class="cart-btns">
											<a href="index.php?action=cleari">Clear Cart</a>
											<a  href="facture.php?action=checkout">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										
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
								<form method="GET" action="store2.php">
								<h3>Alimentation<br>Catalogue</h3>
								<input type="hidden" value="1" name="type">
								<input  style="border: none; background-color: transparent; text-transform: uppercase;  color: #FFF;" type="submit" name="submit" value="Achetez maintenant">
								
									<i class="fa fa-arrow-circle-right" style=" color: #FFF;"></i></a>
</form>
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
							<form method="GET" action="store2.php">
							<div class="shop-body">
								<h3>Ménage<br>Catalogue</h3>
								<input type="hidden" value="2" name="type">
								<input  style="border: none; background-color: transparent; text-transform: uppercase;  color: #FFF;" type="submit" name="submit" value="Achetez maintenant">
								
									<i class="fa fa-arrow-circle-right" style=" color: #FFF;"></i></a>
</form>
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
							<form method="GET" action="store2.php">
							<div class="shop-body">
								<h3>Librairie<br>Catalogue</h3>
								<input type="hidden" value="3" name="type">
								<input  style="border: none; background-color: transparent; text-transform: uppercase;  color: #FFF;" type="submit" name="submit" value="Achetez maintenant">
								
									<i class="fa fa-arrow-circle-right" style=" color: #FFF;"></i></a>
</form>
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
									<li class="active"><a data-toggle="tab" href="#tab2">Alimentation</a></li>
									<li><a data-toggle="tab" href="#tab2">Ménage</a></li>
									<li><a data-toggle="tab" href="#tab2">Librairie</a></li>
								
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->


		


					<div  class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										
									<?php
	
			foreach($listeprod as $row)
			{
            ?>



			<div class="product">

			<div class=product-body>
			<p class="product-category"><?php echo $row["Nom"]?></p>
				<form   method="post">
					<div class="product-img">
					<?PHP  echo "<img src='../../images/".$row['image']."'>" ?><br />
						<h4 class="product-name"><?php echo $row["Nom"]; ?></h4>
						<h4 class="product-price">DT <?php echo $row["Prix"]; ?></h4>
						<input type="text" name="quantity" value="1" class="form-control" />
						<input type="hidden" name="hidden_name" value="<?php echo $row["Categorie"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["Prix"]; ?>" />
						<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
						<div class="add-to-cart">
						<button type="submit" name="add_to_cart" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
						</div>
						<div style="padding-bottom:15px;padding-top:10px;" class="product-ratin.g">
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
												<div>
												
												</div>
												</div>
				</form>
			</div>
			</div>
		

			<?php
			}
			?>

										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->







		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							
							<h2 class="text-uppercase">Promo Week-End</h2>
							<?php 
$prom = new ProduitC();
$promo = $prom->afficherpromoo();

foreach ($promo as $roww)
{
?>
							<p><?php echo ($roww['MAX(promovaleur)']+0.0001)*100 | 0;   ?>% de reduction </p>
							<?php
}
							?>
							<a class="primary-btn cta-btn" href="storepromo.php">Achetez maintenant</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top Evalue</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Alimentation</a></li>
									<li><a data-toggle="tab" href="#tab2">Ménage</a></li>
									<li><a data-toggle="tab" href="#tab2">Librarie</a></li>
							
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->
	

					<!-- Products tab & slick --->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
				<?php
			foreach($listeprod1 as $row1)
			{
				if ($row1['maxoc'] == 5 )
				{
        ?>
										<!-- product -->
										<div class="product">
										<form method="post">
											<div class="product-img">
											<?PHP  echo "<img src='../../images/".$row1['image']."'>" ?>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $row1["Categorie"]; ?></p>
												<h3 class="product-name"><a href="#"><?php echo $row1["Nom"]; ?></a></h3>
												<h4 class="product-price"><a href="#"><?php echo $row1["Prix"]; ?> DT </a></h4>
												<div class="product-ratin.g">
												<?php
for ($i = 1; $i <= $row1['maxoc']; $i++) {

											?>	
												<i class="fa fa-star"></i>
											<?php
}
											?>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										</form>
<?php
			}		}
?>


										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
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
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top Evalue</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Liquide</p>
										<h3 class="product-name"><a href="#">Fanta 0.5L</a></h3>
										<h4 class="product-price">1.100 TND</del></h4>
									</div>
								</div>
								<!-- /product widget -->


						
							</div>
						</div>
					</div>

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
						<div class="newsletter">
							<p>S'inscrire aux <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Entrez votre Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Souscrire </button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
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
									<li><a href="storepromo.php">Promo</a></li>
									<li><a href="#">Alimentation</a></li>
									<li><a href="#">Ménage</a></li>
									<li><a href="#">Librairie</a></li>
								
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