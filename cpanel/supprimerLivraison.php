<?PHP
include "../Core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_GET["id"])){
	$livraisonC->supprimerlivraison($_GET["id"]);
	header('Location: afficherlivraison.php');
}else{

}

?>