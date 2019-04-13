<?PHP
include "C:/xampp/htdocs/CPanel/core/CommandeC.php";
$commandeC=new CommandeC();
if (isset($_POST["idcom"])){
	$commandeC->supprimerCommande($_POST["idcom"]);
	
}

?>