<?PHP
include "../../../Entites/livreur.php";
include "../../../Core/livreurC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['numPermis']) and isset($_POST['rib']) and isset($_POST['mail']) and isset($_POST['numTel']) and isset($_POST['mdp'])){
$livreur1=new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['numPermis'],$_POST['rib'],$_POST['mail'],$_POST['numTel'],$_POST['mdp'],0,0);

//Partie2
/*
var_dump($livreur1);
}
*/
//Partie3
$livreur1C=new livreurC();
$test=0;
$livreur1C->ajouterLivreur($livreur1,$test);
}
else{
	echo "Vérifier les champs";
}

	header ('Location: registerLivreurSucces.html');


//*/

?>