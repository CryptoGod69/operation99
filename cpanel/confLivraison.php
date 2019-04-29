<?PHP
session_start();
include "../entities/livraison.php";
include "../Core/livraisonC.php";
include "../PHPMailer/mail.php";

    $id=$_GET['id'];
    $adresse=$_GET['adresse'];
    $cinLivreur=$_GET['cinLivreur'];
    $dateLivraison=$_GET['dateLivraison']; 
    $dureeLivraison=$_GET['dureeLivraison'];
    $email=$_GET['email'];

        $p=new livraison($adresse,$cinLivreur,$dureeLivraison,1,$email);
        $p->setDateLivraison($dateLivraison);
        $livraisonC =new livraisonC();
		$mes=$livraisonC->confirmerlivraison($p,$id);
       
    $_SESSION['msg'] = "livraison enreg";
	echo '<script>window.location="afficherlivraison.php"</script>';    
    envoyerMail($email);
    


?>
