<?php
include "../Entites/Categorie.php";
include "../Core/CategorieC.php";
if (isset($_POST['id_cat'])){
	$CategorieC=new categorieC();
    $result=$CategorieC->recupererCategorie($_POST['id_cat']);
	foreach($result as $row){
		$id_cat=$row['id_cat'];
		$Categ=$row['Categ'];
  
    
        require "fpdf/fpdf.php";
$pdf =new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"Liste Des Produits",1,1,'C');
$pdf->Cell(50,10,"ID :",1,0);
$pdf->Cell(50,10,$id_cat,1,1);
$pdf->Cell(50,10,"Categ :",1,0);
$pdf->Cell(50,10,$Categ,1,1);



$pdf->output();

    $_SESSION['msg'] = "Produit enreg";
}}
?>