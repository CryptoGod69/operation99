<?PHP
include "../Core/Produit_stockC.php";
$ProduitC=new produitC();
if (isset($_GET["id"]) && isset($_GET["Fournisseur"])){
	$ProduitC->supprimerProduit($_GET["id"],$_GET["Fournisseur"]);
	header('Location: AfficherStock.php');
}else{

}

?>