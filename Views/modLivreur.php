<?PHP
session_start();
include "../Entites/livreur.php";
include "../Core/livreurC.php";


    
    $cin=$_POST['cin'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $numPermis=$_POST['numPermis']; 
    $rib=$_POST['rib'];
    $mail=$_POST['mail'];
    $numTel=$_POST['numTel'];
    $mdp=$_POST['mdp'];
    $nbHeuresTravail=$_POST['nbHeuresTravail'];
    $tarifHoraire=$_POST['tarifHoraire'];
     


    
        echo $mail; 
        $p=new livreur($cin,$nom,$prenom,$numPermis,$rib,$mail,$numTel,$mdp,$nbHeuresTravail,$tarifHoraire);
        
        $livreurC =new livreurC();
		$mes=$livreurC->autolivreur($p,$cin);
       
    $_SESSION['msg'] = "livreur enreg";
    echo '<script>window.location="afficherlivreur.php"</script>';
    

?>
