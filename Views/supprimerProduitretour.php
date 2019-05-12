<?PHP
include "../Core/ProduitRetourneP.php";
$produitRetourneP=new ProduitRetourneP();
if (isset($_POST["Ref_Reclam"])){
	$produitRetourneP->supprimerProduit($_POST["Ref_Reclam"]);
	header('Location: product-list-reclam.php');
}

?>