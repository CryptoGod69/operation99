<?php
include "../../../Entites/rate.php";
include "../../../Core/ratec.php";
include "../../../Core/ProduitsC.php";
include "../../../Entites/Produits.php";
session_start();
echo $_SESSION['LeBrasse'];
echo $_SESSION['rate'];
if (isset($_SESSION['l']) && isset($_SESSION['p']) ) 
{ 
    $ratestars=$_SESSION['rate'];
    $sess=$_SESSION['l'];
    if (!empty($_SESSION['rate']))
    {  

        $Rate=new rate($ratestars,$sess);
        $RateC =new rateC();
        $mes=$RateC->ajouter($Rate);
        $liste=$RateC->afficherstars();
        $lowel=$RateC->afficherstarslowel();
        foreach ($lowel as  $row1)
        {
          $maxr=$row1['ratestars'];
          $maxoc=$row1['COUNT(ratestars)'];
        }
        foreach ($liste as $row)
        {
          $maxr1=$row['ratestars'];
          $maxoc1=$row['COUNT(ratestars)'];
         
          if ($maxoc < $maxoc1)
          {
         $maxoc=$maxoc1;
          }
      }
      $nom=$_SESSION['LeBrasse'];
      $ProduitsC=new produitsC();
      $mes1=$ProduitsC->produitrate($maxoc,$nom);
      echo $maxoc;
    
    
}
}
$_SESSION['msg'] = "rating enreg";
?>