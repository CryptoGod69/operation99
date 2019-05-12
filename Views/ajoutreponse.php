<?PHP
include "../Entites/Reponse.php";
include "../Core/ReponseC.php";


if (isset($_POST['ref_reclam']) and isset($_POST['ID_client']) and isset($_POST['reponse'])){
$Reponse1=new Reponse($_POST['ref_reclam'],$_POST['ID_client'],$_POST['reponse']);

$Reponse1C=new ReponseC();
$Reponse1C->ajouterReponse($Reponse1);

header('Location:reclam-list.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>