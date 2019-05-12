<?PHP
include "../Core/fournisseurC.php";
$FournisseurC=new fournisseurC();
if (isset($_GET["id"])){
	$FournisseurC->supprimerFournisseur($_GET["id"]);
	header('Location: AfficherFournisseur.php');
}else{

}

?>