<?php
require_once "C:/xampp/htdocs/integration/config.php";
class promotionC
{
function ajouter($promotion)
{
    $sql = "INSERT INTO categorie (id , categorie , maxoc , valeur) VALUES (:id_cat,:Categ)";
    $db=config::getConnexion();
    try
    {
    $req=$db->prepare($sql);
    $id_cat=$promotion->get_idcat();
    $Categ=$promotion->get_Categ();
    $req->bindValue(':id_cat', $id_cat);
    $req->bindValue(':Categ', $Categ);
$req->execute();
return true;
    }catch(Exception $e)
    {echo 'Erreur' .$e->getMessage();return false;}
}
function afficherCategorie (){
    $sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
}
function supprimerCategorie($id_cat){
    $sql="DELETE FROM categorie where id_cat= :id_cat";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':id_cat',$id_cat);
    try{
        $req->execute();
       // header('Location: index.php');
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function modifierCategorie($categorie,$id_cat){
    $sql="UPDATE categorie SET  Categ=:Categ WHERE id_cat=:id_cat";
    
    $db = config::getConnexion();
try{		
    $req=$db->prepare($sql);
    $id_cat=$categorie->get_idcat();
    $Categ=$categorie->get_Categ();
    $datas = array(':id_cat'=>$id_cat, ':Categ'=>$Categ);
    $req->bindValue(':id_cat', $id_cat);
    $req->bindValue(':Categ', $Categ); 
        $s=$req->execute();
       
    
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();
    }
}
function recupererCategorie($id_cat){
    $sql="SELECT * from categorie where id_cat=$id_cat";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function maxid_categorie(){
    $sql="SElECT MAX(id_cat)+1 From categorie";
        $db = config::getConnexion();
        try{
        $vmax=$db->query($sql);
        return $vmax;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
}
function  affichernbrCateg (){
    $sql="SElECT COUNT(id_cat) From categorie";
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