<?PHP
include "../Core/CouponC.php";
include "../Entites/Coupon.php";
if (isset($_POST['id_coupon'])){
	$couponC1=new CouponC();
    $result=$couponC1->recupererCoupon($_POST['id_coupon']);
	foreach($result as $row){
		$id_coupon=$row['id_coupon'];
        $code_coupon=$row['code_coupon'];
        $Type_reduction=$row['Type_reduction'];
		$Valeur=$row['Valeur'];
        $Date_Debutcoupon=$row['Date_Debutcoupon'];
        $Date_Fincoupon=$row['Date_Fincoupon'];
        require "fpdf/fpdf.php";
        $pdf =new FPDF();
        $pdf->AddPage();
        $pdf->SetFont("Arial","B",16);
        $pdf->Cell(0,10,"Coupon",1,1,'C');
        $pdf->Cell(60,10,"Id Coupon :",1,0);
        $pdf->Cell(60,10,$id_coupon,1,1);
        $pdf->Cell(60,10,"Code Coupon :",1,0);
        $pdf->Cell(60,10,$code_coupon,1,1);
        $pdf->Cell(60,10,"Type de reduction :",1,0);
        $pdf->Cell(60,10,$Type_reduction,1,1);
        $pdf->Cell(60,10,"Valeur :",1,0);
        if (strcmp($Type_reduction,"Pourcentage")==0)
        {
        $pdf->Cell(60,10,"$Valeur%",1,1);
        }
        else 
        {
            $pdf->Cell(60,10,$Valeur,1,1);
        }

        $pdf->Cell(60,10,"Date Debut coupon :",1,0);
        $pdf->Cell(60,10,$Date_Debutcoupon,1,1);
        $pdf->Cell(60,10,"Date Fin coupon :",1,0);
        $pdf->Cell(60,10,$Date_Fincoupon,1,1);
        $today = date("Y-m-d");
        $today_dt = new DateTime($today);
        $expire_dt = new DateTime($Date_Fincoupon);
        if ($expire_dt < $today_dt ) {
            $pdf->Cell(60,10,"Ce coupon est expiree ");
        }
        
        
        $pdf->output();
            }}
            $_SESSION['msg'] = "Produit enreg";

        ?>