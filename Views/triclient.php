
<?PHP 
include "../Entites/utilisateurs.php";
include "../Core/utilisateursC.php";

if (isset($_POST["ID"])){
    $utilisateur->triutilisateurs($_POST["ID"]);
	header('Location: List.php');
}
?>