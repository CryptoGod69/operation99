<?php
session_start();
include "../Core/CategorieC.php";
include "../Entites/Categorie.php";
if (isset($_POST['Categ']))
{
    $id_cat=$_POST['id_cat'];
    $Categ=$_POST['Categ'];

    if (!empty($_POST['Categ']))
    {
        $c=new categorie($id_cat,$Categ);
        $CategorieC =new categorieC();
        $mes=$CategorieC->ajouter($c);
    }
    $_SESSION['msg'] = "categorie enreg";
    header('location: categorie-list.php');
}
?>