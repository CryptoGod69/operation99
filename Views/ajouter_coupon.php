<?php
session_start();
include "../Core/CouponC.php";
include "../Entites/Coupon.php";
if (isset($_POST['code_coupon']) && isset($_POST['Type_reduction']) && isset($_POST['Valeur']) && isset($_POST['Date_Debutcoupon']) && isset($_POST['Date_Fincoupon']))
{
    


    $id_coupon=$_POST['id_coupon'];
    $code_coupon=$_POST['code_coupon'];
    $Type_reduction=$_POST['Type_reduction'];
    $Valeur=$_POST['Valeur'];
    $Date_Debutcoupon=$_POST['Date_Debutcoupon'];
    $Date_Fincoupon=$_POST['Date_Fincoupon'];

    if (!empty($_POST['code_coupon']) && !empty($_POST['Type_reduction']) && !empty($_POST['Valeur']) && !empty($_POST['Date_Debutcoupon']) && !empty($_POST['Date_Fincoupon']))
    {
        
        $Coupon=new coupon($id_coupon,$code_coupon,$Type_reduction,$Valeur,$Date_Debutcoupon,$Date_Fincoupon);
        $couponC =new CouponC();
        $mes=$couponC->ajouter($Coupon);
    
}
    $_SESSION['msg'] = "Coupn enreg";
    header('location: promocoup.php');
}
?>