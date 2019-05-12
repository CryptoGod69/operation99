<?PHP
session_start();
include "C:/xampp/htdocs/integration/Entites/fournisseur.php";
include "C:/xampp/htdocs/integration/Core/fournisseurC.php";

if (isset($_POST['nom']) && isset($_POST['mat']) && isset($_POST['rib']))
{

    //$target = "images/" . basename($_POST'image']);
    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $mat=$_POST['mat'];
    $rib=$_POST['rib'];

    if (!empty($_POST['nom']) && !empty($_POST['mat']) && !empty($_POST['rib']))
    {
        $f=new fournisseur($id,$nom,$mat,$rib);
        $FournisseurC =new fournisseurC();
		$mes=$FournisseurC->modifierFournisseur($f,$id);

    $_SESSION['msg'] = "Fournisseur enreg";
    echo '<script>window.location="AfficherFournisseur.php"</script>';
    }
}
else 
{
    echo "dayna";
}
?>
