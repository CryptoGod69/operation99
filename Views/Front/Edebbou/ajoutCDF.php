<?PHP
include "C:/xampp/htdocs/integration/Entites/CDF.php";
include "C:/xampp/htdocs/integration/Core/CDFC.php";


if (isset($_POST['IDCDF']) and isset($_POST['NomFedi'])){
$CDF1=new CDF($_POST['IDCDF'],$_POST['NomFedi']);
//Partie2
/*
var_dump($CDF1);
}
*/
//Partie3
$CDF1C=new CDFC();
$CDF1C->ajouterCDF($CDF1);
header('Location: index3.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>