<?PHP
include "C:/xampp/htdocs/integration/Entites/News.php";
include "C:/xampp/htdocs/integration/Core/NewsC.php";


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
header('Location: login.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>