<?PHP
include "../Core/ProduitC.php";
$ProduitC=new produitC();
if (isset($_POST["id"])){
	$ProduitC->supprimerProduit($_POST["id"]);
	header('Location: product-list.php');
}

?>