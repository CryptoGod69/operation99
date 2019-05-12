<?PHP
session_start();
include "C:/xampp/htdocs/integration/Entites/wishlist.php";
include "C:/xampp/htdocs/integration/Core/wishlistC.php";

if ( isset($_POST['id']) && isset($_POST['Fournisseur']) && isset($_POST['user']) && isset($_POST['qty']) )
{

    //$target = "images/" . basename($_POST'image']);
    $id=$_POST['id'];
    $Fournisseur=$_POST['Fournisseur'];
    $user=$_POST['user'];
    $qty= $_POST['qty'] - 1;

    if (!empty($_POST['id']) && !empty($_POST['Fournisseur']) && !empty($_POST['user']) && !empty($_POST['qty']))
    {
        $wishlistC =new WishlistC();
        $mes=$wishlistC->modQtyWishlist($id,$Fournisseur,$user,$qty);

    $_SESSION['msg'] = "Wish mod";
    echo '<script>window.location="store.php"</script>';
    }
}
else 
{
    echo "dayna";
}
?>
