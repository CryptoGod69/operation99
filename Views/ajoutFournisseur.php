<?PHP
session_start();
include "../Entites/fournisseur.php";
include "../Core/fournisseurC.php";

if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['mat']) && isset($_POST['rib']))
{

    //$target = "images/" . basename($_POST'image']);
    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $mat=$_POST['mat'];
    $rib=$_POST['rib'];
	

    if (!empty($_POST['id']) && !empty($_POST['nom']) && !empty($_POST['mat']) && !empty($_POST['rib']))
    {
        $f=new fournisseur($id,$nom,$mat,$rib);
        $FournisseurC =new FournisseurC();
		$mes=$FournisseurC->ajouterFournisseur($f);

    $_SESSION['msg'] = "Fournisseur enreg";
    echo '<script>window.location="AfficherFournisseur.php"</script>';
    }
}
else 
{
    echo "dayna";
}
?>
