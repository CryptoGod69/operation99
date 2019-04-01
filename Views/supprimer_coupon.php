<?PHP
include "../Core/CouponC.php";
$couponC=new CouponC();
if (isset($_POST["id_coupon"])){
	$couponC->supprimerCoupon($_POST["id_coupon"]);
	header('Location: promo-list.php');
}

?>