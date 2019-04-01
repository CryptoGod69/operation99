<?PHP
include "../entities/utilisateurs.php";
include "../core/utilisateursC.php";

if (isset($_POST['NomPrenom']) and isset($_POST['Email']) and isset($_POST['DDN']) and isset($_POST['Tel']) and isset($_POST['PWD1']) and isset($_POST['Type'])){
$utilisateurs1=new utilisateurs($_POST['NomPrenom'],$_POST['Email'],$_POST['DDN'],$_POST['Tel'],$_POST['PWD1'],$_POST['Type']);
//Partie2
/*
var_dump($utilisateurs1);
}
*/
//Partie3
$utilisateurs1C=new utilisateursC();
$utilisateurs1C->ajouterutilisateurs($utilisateurs1);
header('Location: login.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>