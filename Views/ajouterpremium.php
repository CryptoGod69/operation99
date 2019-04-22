<?PHP
include "../Entites/premium.php";
include "../Core/premiumC.php";


if (isset($_POST['CVCode'])  ,isset($_POST['CodeNum'])  ,isset($_POST['DDE'])){
$premium1=new premium($_POST['CVCode'],$_POST['CodeNum'],$_POST['DDE']);
//Partie2
/*
var_dump($premium1);
}
*/
//Partie3
$premium1C=new premiumC();
$premium1C->ajouterpremium($premium1);
header('Location: blank.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>