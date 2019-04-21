<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'User.php';
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new Database();
$conn=$c->connexion();
if (!empty($_POST['login']) && !empty($_POST['pwd'])){

$t=User::Logedin($_POST['login'],$_POST['pwd']);
if ($t){
	
	session_start();
	$_SESSION['l']=$_POST['login'];
	$_SESSION['p']=$_POST['pwd'];
	$_SESSION['r']=$t['role'];
	$_SESSION['nomprenom'] = $t['nomprenom'];
	 $_SESSION['email'] = $t['email'];
	 $_SESSION['tel'] = $t['tel'];
	 $_SESSION['datedenaissance'] = $t['datedenaissance'];
	 $_SESSION['type'] = $t['type'];
	 $_SESSION['date'] = $t['date'];
	header("location:page_membre.php");
var_dump($_SESSION);

}
else { 
	// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
	echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
	// puis on le redirige vers la page d'accueil
echo '<meta http-equiv="refresh" content="0;URL=auth.html">'; 
 }


}	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="auth.html">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>