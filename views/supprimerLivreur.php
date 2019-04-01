<?PHP
include "../core/livreurC.php";
$LivreurC=new LivreurC();
if (isset($_POST["cin"])){
	$LivreurC->supprimerLivreur($_POST["cin"]);
	header('Location: afficherLivreur.php');
}

?>