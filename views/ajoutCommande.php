<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";

if (isset($_POST['idcom']) and isset($_POST['iduser']) and isset($_POST['totalcom'])){
$commande1=new commande($_POST['idcom'],$_POST['iduser'],$_POST['totalcom']);

$commande1C=new CommandeC();
$commande1C->ajouterCommande($commande1);
header('Location: ../listCommande.php');
}else{
	echo "vérifier les champs";
}
//*/

?>