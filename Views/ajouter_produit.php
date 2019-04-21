    <?php
session_start();
include "../Core/ProduitC.php";
include "../Entites/Produit.php";
if (isset($_FILES['image']['name']) && isset($_POST['Descr']) && isset($_POST['Categorie']) && isset($_POST['statut']) && isset($_POST['Nom']))
{
   
    $target = "images/" . basename($_FILES['image']['name']);
    $id=$_POST['id'];
    $image=$_FILES['image']['name'];
    $Descr=$_POST['Descr'];
    $Categorie=$_POST['Categorie'];
    $statut=$_POST['statut'];
    $Nom=$_POST['Nom'];
    if (!empty($_FILES['image']['name']) && !empty($_POST['Descr']) && !empty($_POST['Categorie']) && !empty($_POST['statut']) && !empty($_POST['Nom']))
    {
        $p=new produit($id,$image,$Descr,$Categorie,$statut,$Nom);
        $ProduitC =new produitC();
        $mes=$ProduitC->ajouter($p);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            $msg = "image uploaded succ";
            
            }else{
            
                $msg="fama prob";
            }
    }
    $_SESSION['msg'] = "Produit enreg";
    header('location: product-edit.php');
}

?>