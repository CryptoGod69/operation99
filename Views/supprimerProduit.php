<?PHP
include "../Core/produit_stockC.php";
$produitC=new ProduitC();
if (isset($_POST["id"])){
	$produitC->supprimerProduit($_POST["id"]);
	header('Location: AfficherProduit.php');
}
?>