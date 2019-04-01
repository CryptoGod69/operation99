<?php 
session_start();
$id = 0;
$image =" ";
$descr = "";
$Categorie = "";
$statut = "";
$Nom ="";
$db = mysqli_connect('localhost' , 'root' , '' , 'eddebou');

if (isset($_POST['save']))
{ 
    $target = "images/" . basename($_FILES['image']['name']);
    $id = $_POST['id'];
    $image = $_FILES['image']['name'];
    $allowed = array ("image/jpeg" , "image/gif" , "image/png");
    $Nom = $_POST['Nom'];
    $statut = $_POST['statut'];
    $descr = $_POST['descr'];
    $Categorie = $_POST['Categorie'];
$query = "INSERT INTO produit (id , image , descr , Categorie , statut , Nom  ) VALUES  ('$id' , '$image' , '$descr' , '$Categorie' , '$statut' , '$Nom') ";
mysqli_query($db , $query) ;
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
    $msg = "image uploaded succ";
    }else{
    
        $msg="fama prob";
    }
$_SESSION['msg'] = "Produit enreg";
header('Location: product-edit.html');
}


?>