<?PHP
include "../Entites/ProduitRetourne.php";
include "../Core/ProduitRetourneP.php";

if (isset($_POST['ID_client']) and  isset($_POST['Nom']) and isset($_POST['Ref_Commande']) and isset($_POST['Ref_Reclam']) ){
$ProduitRetourne1=new ProduitRetourne($_POST['ID_client'],$_POST['Nom'],$_POST['Ref_Commande'],$_POST['Ref_Reclam']);

$ProduitRetourne1P=new ProduitRetourneP();
$ProduitRetourne1P->ajouterProduit($ProduitRetourne1);
header('Location: product-list-reclam.php');
}else{
	echo "vérifier les champs";
}

?>