<?PHP
include "../../../Entites/article_commande.php";
include "../../../Core/articleC.php";

if (isset($_POST['idc']) and isset($_POST['idp']) and isset($_POST['nomp']) and isset($_POST['qtp']) and isset($_POST['prixp'])){
$article1=new article($_POST['idc'],$_POST['idp'],$_POST['nomp'],$_POST['qtp'],$_POST['prixp']);

$article1C=new ArticleC();
$article1C->ajouterArticle($article1);
header('Location: afficherArticle.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>