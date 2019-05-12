<?PHP
include "../Entites/livraison.php";
include "../Core/livraisonC.php";

if (isset($_POST['adresse']) and isset($_POST['dureeLivraison']) and isset($_POST['dateLivraison']) and isset($_POST['email'])){
$livraison1=new livraison($_POST['adresse'],0,$_POST['dureeLivraison'],0,$_POST['email']);
$livraison1->setDateLivraison($_POST['dateLivraison']);

//Partie2
/*
var_dump($livraison1);
}
*/
//Partie3
$livraison1C=new livraisonC();
$livraison1C->ajouterlivraison($livraison1);
echo '<script>window.location="afficherLivraison.php"</script>';
}
else{
	echo "vérifier les champs";
}
//*/

?>