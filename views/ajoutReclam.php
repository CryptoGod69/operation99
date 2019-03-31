<?PHP
include "../entities/Reclam.php";
include "../core/ReclamR.php";

if (isset($_POST['ID_client']) and isset($_POST['sujet']) and isset($_POST['texte']) and isset($_POST['date_reclam']) and isset($_POST['etat'])){
$Reclam1=new Reclam($_POST['ID_client'],$_POST['sujet'],$_POST['texte'],$_POST['date_reclam'],$_POST['etat']);

$Reclam1R=new ReclamR();
$Reclam1R->ajouterReclam($Reclam1);
header('Location: indexfront.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>