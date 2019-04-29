<?PHP
include "../Core/livreurC.php";
$livreurC=new livreurC();
if (isset($_GET["cin"])){
	$livreurC->supprimerlivreur($_GET["cin"]);
	header('Location: afficherlivreur.php');
}else{
 echo "erreur";
}

?>