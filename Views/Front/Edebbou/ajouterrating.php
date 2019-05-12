<?php
include "../../../Entites/rate.php";
include "../../../Core/ratec.php";
include "../../../Core/produit_stockC.php";
include "../../../Entites/produit_stock.php";
session_start();
if (isset($_SESSION['l']) && isset($_SESSION['p']) ) 
{ 
    $ratestars=$_SESSION['rate'];
    $sess=$_SESSION['l'];
    $nom=$_SESSION['Nom'];
    if (!empty($_SESSION['rate']))
    {  

        $Rate=new rate($ratestars,$sess, $nom);
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
         
          if ($maxoc <= $maxoc1)
          {
         $maxr=$maxr1;
         $maxoc=$maxoc1;
          }
      }
      $nom=	$_SESSION['Nom'];

      $ProduitsC=new ProduitC();
      $listenom = $ProduitsC->recuperer($nom);
      foreach ($listenom as $row1)
      {
        $Produit111=new Produit($row1['id'],$row1['image'],$row1['Descr'],$row1['Categorie'],$row1['statut'],$row1['Nom'],$row1['Prix'],$row1['quantity'],$row1['Code_Barre'],$row1['Fournisseur']);
        $ProduitsC->maxoc($Produit111,$row1['id'],$maxr);
}
}

?>
<script type="text/javascript">
window.location.href = 'store.php';
</script>
<?php
$_SESSION['msg'] = "rating enreg";
}
?>