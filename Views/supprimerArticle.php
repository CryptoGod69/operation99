<?PHP
include_once "../Core/articleC.php";
$articleC=new ArticleC();
if (isset($_POST["idc"]) && isset($_POST["idp"]) )
{
	$articleC->supprimerArticle($_POST["idc"],$_POST["idp"]);
	header('Location: tableArticle.php');
}

?>