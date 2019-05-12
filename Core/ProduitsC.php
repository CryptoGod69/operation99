<?php
require_once "C:/xampp/htdocs/integration/config.php";
class produitsC
{
    function afficherProduits (){
        $sql="SELECT DISTINCT * From produits GROUP BY Nom";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
}
function afficherCategories (){
    $sql="SElECT DISTINCT Categorie From produits ";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
function countCategories ($Categorie){
    $sql="SElECT COUNT(Categorie),promovaleur,Date From produits where Categorie='$Categorie'";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
function countfournisseur ($Fournisseur){
    $sql="SElECT COUNT(Fournisseur),promovaleur,Date From produits where Fournisseur='$Fournisseur' ";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
function afficherFourn (){
    $sql="SELECT DISTINCT Fournisseur FROM produits ";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}

function affichermaxprix (){
    $sql="SElECT MAX(Prix) From produits ";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}

function affichermonprix (){
    $sql="SElECT MIN(Prix) From produits ";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}

}