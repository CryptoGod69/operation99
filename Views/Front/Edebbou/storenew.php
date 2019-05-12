<?php 
include "../../../Core/ProduitsC.php";
$ProduitsC=new produitsC();
$listeprod=$ProduitsC->afficherProduits();
$listecateg=$ProduitsC->afficherCategories();
$listefourn=$ProduitsC->afficherFourn();
$max=$ProduitsC->affichermaxprix();
$min=$ProduitsC->affichermonprix();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<style>
.famechback
{
	display: inline-block;
  
  background-color: #FFF;
  border: 0px solid #E4E7ED;
  text-align: center;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;

}
	</style>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>EDDEBOU</title> 

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
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
						<ul class="breadcrumb-tree">
							<li><a href="#">Accueil</a></li>
							<li><a href="#">Catalogue</a></li>
							<li><a href="#">Tous Les Categories</a></li>
					
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
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">
							
							<?php foreach ($listecateg as $row1)
										{
											$count = $ProduitsC->countCategories($row1['Categorie']);
											foreach ($count as $row5)
											{
												$today = date("Y-m-d");
$datetable = $row5['Date'];
$conv = substr($datetable,0,10);
if (strcmp($today,$conv)==0)
{
												?>
								<div class="input-checkbox">
									
									<input type="checkbox" id="<?php  echo $row1['Categorie']; ?>" class="filter">
									
									<label for="<?php  echo $row1['Categorie']; ?>">
										
										<span></span>
									
										<?php  echo $row1['Categorie']; ?>
										<small>( <?php echo $row5['COUNT(Categorie)']; ?>)</small>
										
									</label>
									
								</div>
<?php 
										}}}
?>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Prix</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
								<?php 
foreach ( $min as $row3){
								?>
									<input id="price-min" type="number" value="<?php echo number_format($row3['MIN(Prix)'],3) ;?>" min="<?php echo number_format($row3['MIN(Prix)'],3) ;?>" >
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
									<?php 
}
									?>
								</div>
								<span>-</span>
								<div class="input-number price-max">
								<?php 
foreach ( $max as $row4){
								?>
									<input id="price-max" type="number" value="<?php echo number_format($row4['MAX(Prix)'],3) ;?>" max="<?php echo number_format($row4['MAX(Prix)'],3) ;?>" >
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								<?php 
}
								?>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Fournisseur</h3>
							<div class="checkbox-filter">
							<?php 
							foreach ($listefourn as $row2)
							{ 
								$countfour = $ProduitsC->countfournisseur($row2['Fournisseur']);
							
								foreach (	$countfour as $row8)
								{
									$today = date("Y-m-d");
			$datetable = $row8['Date'];
			$conv = substr($datetable,0,10);
			if (strcmp($today,$conv)==0)
			{
								?>
								<div class="input-checkbox">
									<input type="checkbox" id="<?php echo $row2['Fournisseur'] ;?>" class="fournisseur">
									<label for="<?php echo $row2['Fournisseur'] ; ?>">
										<span></span>
										
										<?php echo $row2['Fournisseur'] ; ?>
										<small>	(<?php echo $row8['COUNT(Fournisseur)'] ; ?>)</small>
									</label>
								</div>
								<?php 
							}}}
								?>
							</div>
						</div>
						<!-- /aside Widget -->

					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select" id="pop">
										<option value="DESC">Popular</option>
										<option value="ASC">UnPopular</option>
									</select>
								</label>

							</div>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						
						<div class="form-group" id="prodFilter">
							<!-- /product -->

					
							<!-- /product -->
						
						</div>
						
						<!-- /store products -->

						<!-- store bottom filter -->
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
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
		<script src="js/responsive-paginate.js"></script>
		<script >
document.getElementById(product-label).style.display = none;
</script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>
<script>
function check() {
	var checkedValue = null; 
var inputElements = document.getElementById('category-1');
for(var i=0; inputElements[i]; ++i){
      if(inputElements[i].checked){
           checkedValue = inputElements[i].value;
					 document.getElementById('myInput').value = checkedValue;
           break;
      }
}
	}

	$(document).ready(function(){
		filter_data();

		$(".store-pagination").rPage();
		
		function filter_data()
		{
		$("#prodFilter").html('<div id="loading" ></div>');
		var action="fetch_data";
		var max=$("#price-max").val();
		var min=$("#price-min").val();
		var prodc=get_filter("filter");
		var fourn=get_filter("fournisseur");
		var pop=$("#pop").children("option:selected").val();
	
		$.ajax({
			url:"filternew.php",
			method:"POST",
			data:{action:action,prodc:prodc,max:max,min:min,fourn:fourn,pop:pop},
			success:function(data){
				$("#prodFilter").html(data);
			}
		});
		}

		$(".filter").click(function(){
			filter_data();
		});
		$(".fournisseur").click(function(){
			filter_data();
		});
		$("#price-min").focusout(function(){
			if($(this).attr('min')>$(this).val())
				$(this).val($(this).attr('min'));
			
			filter_data();
		
		});

		$("#pop").change(function(){
			filter_data();
		});
		$("#price-max").focusout(function(){
			if($(this).attr('max')<$(this).val())
				$(this).val($(this).attr('max'));
			
				filter_data();
		});
	});
	function get_filter(calss_name){
		var filter=[];
		$('.'+calss_name+':checked').each(function(){
				filter.push($(this).attr('id'));
		});
		return filter;
	}


	</script>
	</body>
</html>
