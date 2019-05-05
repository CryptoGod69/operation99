<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>E-Debbou</title>

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
						
						<li><a href="register.php"><i class="fa fa-user-o"></i><?php session_start ();  if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
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
							<a href="G:/WorkSpace/edebbou.me/operation99-dali0/Desktop/Page/Nouveau dossier/me/index.html" class="logo">
								<img src="./img/logo.png" alt="logo lena">
							</a>
						</div>
					</div>
					<!-- /LOGO -->
						
						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								
								

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
					
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		
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
<div>


	<!--REGISTER-->
	
	<div align="center" class="container">
		<div class="card bg-light"></div>
		<div class="card-body " style="max-width: 300px;">
			
			
		
			<form id="insc" method="POST" action="ajoutpremium.php" >
			
				
			</div><!--/col-sm-6--> 
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Details de paiment</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="ajoutpremium.php">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="CodeNum">CodeNum</label>
                                    <div class="input-group">
                                        <input 
                                            type="number"
                                            class="form-control"
											name="CodeNum"
											id="CodeNum"
                                            placeholder="Votre Code Num"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
						</div>
						
                              
                                                      
						
				<div class="input-group-prepend">
					
				 
				<input name="IDP" class="form-control" value=<?php echo $_SESSION['i']?> type="hidden" id="IDP" >
</div>
			
				
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="DDE"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="date" 
                                        class="form-control" 
										name="DDE"
										id="DDE"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp"
                                        required 
                                    />
                                </div>
							</div>
			     
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="CVCode">CV CODE</label>
                                    <input 
                                        type="number" 
                                        class="form-control"
										name="CVCode"
										id="CVCode"
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                        required
                                    />
                                </div>
                            </div>
						</div>
						<?php 
						 if(isset($_POST['g-recaptcha-response'])&& $_POST['g-recaptcha-response']){
							var_dump($_POST);
							$secret = "6LfjuqAUAAAAAAIEinkxl1VBBPiYfjg6qdEcot5R";
							$ip = $_SERVER['REMOTE_ADDR'];
							$captcha = $_POST['g-recaptcha-response'];
							$rsp  = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip$ip");
							var_dump($rsp);
							$arr = json_decode($rsp,TRUE);
							if($arr['success']){
								echo 'Done';
							}else{
								echo 'SPam';
							}
							
						}
						?>
						<div class="g-recaptcha" data-sitekey="6LfjuqAUAAAAAJ3t6mTCkYX5zv63nl9uXMvgcHAj" ></div><br>
                        <div class="row">
                            <div class="col-xs-12">
                                <input onclick="verif1();" type="submit" class="btn btn-primary btn-block" value="Passer Premium" ><a href="ajoutCDF.php"></a></button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
			                
			
				
			</div> <!-- form-group// -->      
		
			                                                              
		</form>
	</div>
		</div> <!-- card.// -->
		
		</div> 
		<!--container end.//-->
		</article>



		<!--REGISTER-->


		
		<!-- NEWSLETTER -->
		<div id="newsletter" class="section" >
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter" >
								
							<p>s'abonner au <strong>NEWSLETTER</strong></p>
							<form id="news" method="POST" action="ajoutNews.php">
								<input class="input" type="email" placeholder="Entrer l'Email" name="Email_News" id="Email_News">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> S'abonner</button>
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
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
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
		<script src="js/Formulaire.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>

	</body>
</html>




