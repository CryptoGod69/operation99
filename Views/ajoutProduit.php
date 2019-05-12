<?PHP
session_start();
include "../Entites/produit_stock.php";
include "../Core/produit_stockC.php";

if (isset($_GET['Prix']) && isset($_GET['quantity']) && isset($_GET['Code_Barre']) && isset($_GET['Fournisseur']))
{

    $target = "images/" . basename($_GET['image']);
    $id=$_GET['id'];
    $image=$_GET['image'];
    $Descr=$_GET['Descr'];
    $Categorie=$_GET['Categorie'];
    $statut=$_GET['statut'];
	$Nom=$_GET['Nom'];
	$Prix=$_GET['Prix'];
    $quantity=$_GET['quantity'];
    $Code_Barre=$_GET['Code_Barre'];
	$Fournisseur=$_GET['Fournisseur'];
	

    if (!empty($_GET['Prix']) && !empty($_GET['quantity']) && !empty($_GET['Code_Barre']) && !empty($_GET['statut']) && !empty($_GET['Fournisseur']))
    {
        $p=new produit($id,$image,$Descr,$Categorie,$statut,$Nom,$Prix,$quantity,$Code_Barre,$Fournisseur);
        $ProduitC =new produitC();
		$mes=$ProduitC->ajouterProduit($p);
    }

    $_SESSION['msg'] = "Produit enreg";
    echo '<script>window.location="ajouterprodui_stock.php"</script>';

}
else 
{
    echo "dayna";
}
?>
