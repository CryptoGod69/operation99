<?PHP
include "../Core/CategorieC.php";
$CategorieC=new categorieC();
if (isset($_POST["id_cat"])){
	$CategorieC->supprimerCategorie($_POST["id_cat"]);
	header('Location: categorie-list.php');
}

?>