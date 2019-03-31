<?PHP
include "../core/ReclamR.php";
$ReclamR=new ReclamR();
if (isset($_POST["ID_client"])){
	$ReclamR->supprimerReclam($_POST["ID_client"]);
	header('Location: reclam-list.php');
}

?>