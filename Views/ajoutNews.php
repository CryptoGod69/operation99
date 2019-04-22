<?PHP
include "../Entites/News.php";
include "../Core/NewsC.php";


if (isset($_POST['Email_News'])){
$News1=new News($_POST['Email_News']);
//Partie2
/*
var_dump($News1);
}
*/
//Partie3
$News1C=new NewsC();
$News1C->ajouterNews($News1);
header('Location: index.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>