<?PHP
session_start();
include "../Entites/livraison.php";
include "../Core/livraisonC.php";

if (isset($_GET['adresse']) && isset($_GET['dateLivraison']) && isset($_GET['dureeLivraison']))
{
    $id=$_GET['id'];
    $adresse=$_GET['adresse'];
    $cinLivreur=$_GET['cinLivreur'];
    $dateLivraison=$_GET['dateLivraison']; 
    $dureeLivraison=$_GET['dureeLivraison'];



    if (!empty($_GET['adresse']) && !empty($_GET['dateLivraison']) && !empty($_GET['dureeLivraison']))
    {
        
        $p=new livraison($adresse,$cinLivreur,$dureeLivraison,0,$_GET['email']);
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
