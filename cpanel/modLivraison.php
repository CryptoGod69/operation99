<?PHP
session_start();
include "../entities/livraison.php";
include "../Core/livraisonC.php";

if (isset($_POST['adresse']) && isset($_POST['dateLivraison']) && isset($_POST['dureeLivraison']))
{
    $id=$_POST['id'];
    $adresse=$_POST['adresse'];
    $cinLivreur=$_POST['cinLivreur'];
    $dateLivraison=$_POST['dateLivraison']; 
    $dureeLivraison=$_POST['dureeLivraison'];
    


    if (!empty($_POST['adresse']) && !empty($_POST['dateLivraison']) && !empty($_POST['dureeLivraison']))
    {
        
        $p=new livraison($adresse,$cinLivreur,$dureeLivraison,0);
        $p->setDateLivraison($dateLivraison);
        $livraisonC =new livraisonC();
		$mes=$livraisonC->modifierlivraison($p,$id);
       
    $_SESSION['msg'] = "livraison enreg";
    echo '<script>window.location="afficherlivraison.php"</script>';
    }
}
else 
{
    echo "dayna";
}
?>
