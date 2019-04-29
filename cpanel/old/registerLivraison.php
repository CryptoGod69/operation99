<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";

if (isset($_POST['adresse']) and isset($_POST['cinLivreur']) and isset($_POST['dureeLivraison']) and isset($_POST['dateLivraison'])){
$livraison1=new livraison($_POST['adresse'],$_POST['cinLivreur'],$_POST['dureeLivraison'],0);
$livraison1->setDateLivraison($_POST['dateLivraison']);
echo $dateliv;
//Partie2
/*
var_dump($livraison1);
}
*/
//Partie3
$livraison1C=new livraisonC();
$livraison1C->ajouterlivraison($livraison1);
header ("location: ajouterLivraison.php");
}
else{
	echo "vérifier les champs";
}
//*/

?>