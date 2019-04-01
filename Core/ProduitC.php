<?php
require_once "C:/wamp64/www/operation99-cpanel/config.php";
class produitC
{
function ajouter($produit)
{
    $sql = "INSERT INTO produit (image,  Descr, Categorie, statut, Nom) VALUES (:image,:Descr,:Categorie,:statut,:Nom)";
    $db=config::getConnexion();
    try
    {
    $req=$db->prepare($sql);
 
    $image=$produit->get_image();
    $Descr=$produit->get_Descr();
    $Categorie=$produit->get_Categorie();
    $statut=$produit->get_statut();
    $Nom=$produit->get_Nom();

    $req->bindValue(':image', $image);
    $req->bindValue(':Descr', $Descr);
    $req->bindValue(':Categorie', $Categorie);
    $req->bindValue(':statut', $statut);
    $req->bindValue(':Nom', $Nom);
$req->execute();
return true;
    }catch(Exception $e)
    {echo 'Erreur' .$e->getMessage();return false;}
}
function afficherProduit (){
$sql="SElECT * From produit ORDER BY id";
$db = config::getConnexion();
try{
$liste=$db->query($sql);
return $liste;
}
catch (Exception $e){
    die('Erreur: '.$e->getMessage());
}	
}
function supprimerProduit($id){
    $sql="DELETE FROM produit where id= :id";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    try{
        $req->execute();
       // header('Location: index.php');
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

function modifierProduit($produit,$id){
    $sql="UPDATE produit SET image=:image,Descr=:Descr,Categorie=:Categorie,statut=:statut,Nom=:Nom WHERE id=:id";
    
    $db = config::getConnexion();
try{		
    $req=$db->prepare($sql);
    $id=$produit->get_id();
    $image=$produit->get_image();
    $Descr=$produit->get_Descr();
    $Categorie=$produit->get_Categorie();
    $statut=$produit->get_statut();
    $Nom=$produit->get_Nom();
    $datas = array(':id'=>$id, ':image'=>$image, ':Descr'=>$Descr,':Categorie'=>$Categorie,':statut'=>$statut,':Nom'=>$Nom);
    $req->bindValue(':id', $id);
    $req->bindValue(':image', $image);
    $req->bindValue(':Descr', $Descr);
    $req->bindValue(':Categorie', $Categorie);
    $req->bindValue(':statut', $statut);
    $req->bindValue(':Nom', $Nom);  
        $s=$req->execute();
    
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();
    }
}
    function recupererProduit($id){
		$sql="SELECT * from produit where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function maxid_produit (){
        $sql="SElECT MAX(id)+1 From produit";
            $db = config::getConnexion();
            try{
            $vmax=$db->query($sql);
            return $vmax;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
    }
}
?>