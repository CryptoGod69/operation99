<?PHP
include "../Core/NewsC.php";
$News=new NewsC();
if (isset($_POST["ID_News"])){
	$News->supprimerNews($_POST["ID_News"]);
	header('Location: ListNews.php');
}

?>