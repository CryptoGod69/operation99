<?PHP
include "../core/premiumC.php";
$premium=new premiumC();
if (isset($_POST["IDP"])){
	$premium->supprimerpremium($_POST["IDP"]);
	header('Location: listpremium.php');
}

?>