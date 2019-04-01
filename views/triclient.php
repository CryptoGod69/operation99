







<?PHP 
include "../entities/utilisateurs.php";
include "../core/utilisateursC.php";

if (isset($_POST["ID"])){
    $utilisateur->triutilisateurs($_POST["ID"]);
	header('Location: List.php');
}
?>