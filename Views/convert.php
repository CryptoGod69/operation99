<?php
 include  "../Core/ProduitC.php";
 include "../Entites/Produit.php";
 if (isset($_POST['id'])){
     $ProduitC=new produitC();
     $result=$ProduitC->recupererProduit($_POST['id']);
     foreach($result as $row){
         $id=$row['id'];
         $image=$row['image'];
         $Descr=$row['Descr'];
         $Categorie=$row['Categorie'];
         $statut=$row['statut'];
         $Nom=$row['Nom'];
    
        require "fpdf/fpdf.php";
$pdf =new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"Produit",1,1,'C');
$pdf->Cell(50,10,"ID :",1,0);
$pdf->Cell(50,10,$id,1,1);
$pdf->Cell(50,10,"image :",1,0);
$pdf->Cell(50,10,$image,1,1);
$pdf->Cell(50,10,"Descr :",1,0);
$pdf->Cell(50,10,$Descr,1,1);
$pdf->Cell(50,10,"Categorie :",1,0);
$pdf->Cell(50,10,$Categorie,1,1);
$pdf->Cell(50,10,"statut :",1,0);
$pdf->Cell(50,10,$statut,1,1);
$pdf->Cell(50,10,"Nom :",1,0);
$pdf->Cell(50,10,$Nom,1,1);



$pdf->output();

    $_SESSION['msg'] = "Produit enreg";
}}
?>