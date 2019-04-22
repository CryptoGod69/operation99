<?PHP
include "../Core/utilisateursC.php";
$utilisateurs=new utilisateursC();
if (isset($_POST["ID"])){
	$utilisateurs->supprimerutilisateurs($_POST["ID"]);
	header('Location: List.php');
}

?>