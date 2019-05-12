<?PHP
include "../Entites/Reclam.php";
include "../Core/ReclamR.php";


$date=date_create(date('Y-m-d'));
if (isset($_POST['ID_client']) and isset($_POST['sujet']) and isset($_POST['texte'])){
$Reclam1=new Reclam($_POST['ID_client'],$_POST['sujet'],$_POST['texte'],$date,"non traitee");

$Reclam1R=new ReclamR();
$Reclam1R->ajouterReclam($Reclam1);

header('Location: reclam-list-client.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>
