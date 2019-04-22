<?php
 

 include "../config.php";


$db=config::getConnexion();

    $req7 = $db->query("SELECT COUNT(*) AS num,Nom FROM `produits_retournes` GROUP BY Nom " );
    $nb7 = $req7->fetchAll();
    $dataPoints=array();    
    foreach($nb7 as $pr) {
$dataPoints=array_merge($dataPoints,array(
  
 
      array("label"=>$pr['Nom'] , "y"=> intval($pr['num'])),
 
));
}
  
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title: {
    text: "Statistiques Des inscriptions par rapport aux mois de l'annee"
  },
  axisY: {
    title: "Nombre d'inscription",
    includeZero: false
  },
  data: [{
    type: "column",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Marketing</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">

    


    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Espace Marketing</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/picture.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Aziz Kedidi</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />



            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Promotions <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="listepromotion.php">Liste des Promotions </a></li>
                      <li><a href="form.php">Ajouter des Promotions</a></li>
                      <li><a href="modifierpromotion.php">Modifier des Promotions </a></li>
                      <li><a href="supprimerpromotion.php">Supprimer des Promotions </a></li>
                      <li><a href="index.html">Statistiques des Promotions </a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Offres <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="listeoffre.php">Liste des Offres </a></li>
                      <li><a href="interfaceajoutoffre.php">Ajouter des Offres</a></li>
                      <li><a href="modifieroffre.php">Modifier des Offres </a></li>
                      <li><a href="interfacesuppressionoffre.php">Supprimer des Offres </a></li>
                       <li><a href="statistiquesoffres.php">Statistiques des Offres </a></li>
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-table"></i> Cartes de fidélites <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="listecarte.php">Liste des Cartes fidélités</a></li>
                      <li><a href="modifiercarte.php"> Modifier une cartes de fidélité</a></li>
                      <li><a href="statistiquescartes.php"> Statistiques des fidélisations </a></li>

                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>


            <!-- /sidebar menu -->


            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>



        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>



              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/picture.jpg" alt="">Aziz Kedidi
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>



                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/picutre.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Aziz Kedidi</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Span !!
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/picutre.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Aziz Kedidi </span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Span !!
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/picutre.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Aziz Kedidi</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                      span !!
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/picutre.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Aziz Kedidi</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                      span !!
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>


                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>


        </div>
        <!-- /top navigation -->

        <!-- page content -->
        

        
            
           
        <!-- /page content -->

        <!-- footer content -->


        <footer>


          <div class="pull-right">
           Espace Marketing <a href="https://colorlib.com">Desgined by EWA</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>






    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

<div id="chartContainer" style="height: 370px; width: 83%; margin-left: 230px"></div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

	


  </body>
</html>




