<?PHP
include "../core/CDFC.php";
$CDF=new CDFC();
if (isset($_POST["REFCDF"])){
	$CDF->supprimerCDF($_POST["REFCDF"]);
	header('Location: listCDF.php');
}

?>