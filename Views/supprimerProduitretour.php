<?PHP
include "../Core/ProduitRetourneP.php";
$produitRetourneP=new ProduitRetourneP();
if (isset($_POST["ID_client"])){
	$produitRetourneP->supprimerProduit($_POST["ID_client"]);
	header('Location: product-list-ret.php');
}

?>