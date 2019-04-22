<?PHP
include_once "../Core/CommandeC.php";
$commandeC=new CommandeC();
if (isset($_POST["idcom"])){
	$commandeC->supprimerCommande($_POST["idcom"]);
	header('Location: tableArticle.php');
}

?>