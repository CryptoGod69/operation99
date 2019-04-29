<?PHP
include "../entities/premium.php";
include "../core/premiumC.php";


if (isset($_POST['IDP']) and isset($_POST['CVCode']) and isset($_POST['CodeNum']) and isset($_POST['DDE'])){
$premium1=new premium($_POST['IDP'],$_POST['CVCode'],$_POST['CodeNum'],$_POST['DDE']);
//Partie2
/*
var_dump($premium1);
}
*/
//Partie3
$premium1C=new premiumC();
$premium1C->ajouterpremium($premium1);
header('Location: index4.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>