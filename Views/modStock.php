<?PHP
session_start();
include "C:/xampp/htdocs/integration/Entites/produit_stock.php";
include "C:/xampp/htdocs/integration/Core/produit_stockC.php";

if (isset($_POST['Prix']) && isset($_POST['quantity']) && isset($_POST['Code_Barre']))
{

    //$target = "images/" . basename($_POST'image']);
    $id=$_POST['id'];
    $image=$_POST['image'];
    $Descr=$_POST['Descr'];
    $Categorie=$_POST['Categorie'];
    $statut=$_POST['statut'];
	$Nom=$_POST['Nom'];
	$Prix=$_POST['Prix'];
    $quantity=$_POST['quantity'];
    $Code_Barre=$_POST['Code_Barre'];
	$Fournisseur=$_POST['Fournisseur'];

    if (!empty($_POST['Prix']) && !empty($_POST['quantity']) && !empty($_POST['Code_Barre']))
    {
        $p=new produit($id,$image,$Descr,$Categorie,$statut,$Nom,$Prix,$quantity,$Code_Barre,$Fournisseur);
        $ProduitC =new produitC();
		$mes=$ProduitC->modifierProduit($p,$id,$Fournisseur);

    $_SESSION['msg'] = "Produit enreg";
    echo '<script>window.location="AfficherStock.php"</script>';
    }
}
else 
{
    echo "dayna";
}
?>
