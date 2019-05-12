<?PHP
session_start();
include "../Entites/livreur.php";
include "../Core/livreurC.php";
include "../PHPMailer/mail.php";

    $cin=$_GET['cin'];
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $numPermis=$_GET['numPermis']; 
    $rib=$_GET['rib'];
    $mail=$_GET['mail'];
    $numTel=$_GET['numTel'];
    $mdp=$_GET['mdp'];
    $nbHeuresTravail=$_GET['nbHeuresTravail'];
    $tarifHoraire=$_GET['tarifHoraire'];

        $p=new livreur($cin,$nom,$prenom,$numPermis,$rib,$mail,$numTel,$mdp,$nbHeuresTravail,$tarifHoraire);
        $livreurC =new livreurC();
		$mes=$livreurC->autolivreur($p,$cin);
       
    $_SESSION['msg'] = "livreur enreg";
	echo '<script>window.location="afficherlivreur.php"</script>';    
    envoyerMail($mail);
    


?>
