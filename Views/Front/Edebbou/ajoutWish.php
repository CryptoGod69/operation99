<?PHP
session_start();
include "../../../Entites/wishlist.php";
include "../../../Core/wishlistC.php";

    //$target = "images/" . basename($_POST'image']);
    $id=$_POST['id'];
    $Fournisseur=$_POST['Fournisseur'];
    $user=$_POST['user'];
    $qty=$_POST['qty'];
    $nom=$_POST['nom'];
	$img=$_POST['img'];
	$prix=$_POST['prix'];

    $w=new Wishlist($id,$Fournisseur,$user,$qty,$nom,$img,$prix);
    $wishlistC =new WishlistC();
	$mes=$wishlistC->ajouterWishlist($w);

    $_SESSION['msg'] = "Wish enreg";
    echo '<script>window.location="store.php"</script>';
    
?>
