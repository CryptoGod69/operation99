<?php
//call the FPDF library
include ("connect.php");
include ("actions.php");	
include "C:/xampp/htdocs/integration/entites/commande.php";
include "C:/xampp/htdocs/integration/core/commandeC.php";
include "C:/xampp/htdocs/integration/entites/article.php";
include "C:/xampp/htdocs/integration/core/articleC.php";
require('fpdf17/fpdf.php');


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//create pdf object
$pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130 ,5,'E-DEBBOU .CO',0,0);
$pdf->Cell(59 ,5,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'[20 Rue Les Jasmins]',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'[Nouvelle Ariana, Ariana, 2073]',0,0);
$pdf->Cell(25 ,5,'Date',0,0);
$pdf->Cell(34 ,5,'[29/04/2019]',0,1);//end of line

$pdf->Cell(130 ,5,'Phone [+21625159269]',0,0);
$pdf->Cell(25 ,5,'Invoice #',0,0);
$pdf->Cell(34 ,5,'[1234567]',0,1);//end of line

$pdf->Cell(130 ,5,'Fax [+12345678]',0,0);
$pdf->Cell(25 ,5,'Customer ID',0,0);
$pdf->Cell(34 ,5,'[1234567]',0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//billing address
$pdf->Cell(100 ,5,'Bill to',0,1);//end of line
 session_start();
//add dummy cell at beginning of each line for indentation
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$_SESSION['l'],0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$_SESSION['r'],0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'[Address] : WillBeGenerated',0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'[Phone] : WillBeGenerated',0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130 ,5,'Description',1,0);
$pdf->Cell(13 ,5,'Price',1,0);

$pdf->Cell(25 ,5,'Quantity',1,0);
$pdf->Cell(21 ,5,'Total',1,1);//end of line



$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter


$cookie_data = stripslashes($_COOKIE['shopping_cart']);
				$cart_data = json_decode($cookie_data, true);
				foreach($cart_data as $keys => $values)
				{

if (isset($_POST['bill']))
{
    $total=0;
	$in=$values["item_name"];
	$ip=$values["item_price"];
	$ii=$values["item_id"]; 
    $iq=$values["item_quantity"];
    $total=$values["item_quantity"]*$values["item_price"];
}
$pdf->Cell(130 ,5,$values["item_name"],1,0);
$pdf->Cell(25 ,5,$values["item_price"],1,0);
$pdf->Cell(7 ,5,$values["item_quantity"],1,0);
$pdf->Cell(34 ,5,$values["item_quantity"]*$values["item_price"],1,1,'R');//end of line      
                }
//summary
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Subtotal',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'4,450',1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Taxable',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'0',1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Tax Rate',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'10%',1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Total Due',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'4,450',1,1,'R');//end of line

//output the result
$pdf->Output();
?>