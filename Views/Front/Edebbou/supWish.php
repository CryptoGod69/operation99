<?PHP
session_start();
include "C:/xampp/htdocs/integration/Entites/wishlist.php";
include "C:/xampp/htdocs/integration/Core/wishlistC.php";

if ((isset($_POST['id']) && isset($_POST['Fournisseur']) && isset($_POST['user'])))
{

    //$target = "images/" . basename($_POST'image']);
    $id=$_POST['id'];
    $Fournisseur=$_POST['Fournisseur'];
    $user=$_POST['user'];

    if (!empty($_POST['id']) && !empty($_POST['Fournisseur']) && !empty($_POST['user']))
    {
        $wishlistC =new WishlistC();
		$mes=$wishlistC->supprimerWishlist($id,$Fournisseur,$user);

    $_SESSION['msg'] = "Wish supp";
    echo '<script>window.location="store.php"</script>';
    }
}
else 
{
    echo "dayna";
}
?>
