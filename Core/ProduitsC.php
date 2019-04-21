<?php
require_once "C:/wamp64/www/operation99-cpanel/config.php";
class produitsC
{
    function afficherProduits (){
        $sql="SElECT * From produits ORDER BY id";
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
    $sql="SElECT Categorie From produits ";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
function produitrate($maxoc,$nom)
{
    $sql = "UPDATE produits SET maxoc=:maxoc WHERE nom=:nom";
    $db=config::getConnexion();
    try
    {
    $req=$db->prepare($sql);
    $req->bindValue(':maxoc', $maxoc);
    $req->bindValue(':nom', $nom);
$req->execute();
return true;
    }catch(Exception $e)
    {echo 'Erreur' .$e->getMessage();return false;}
}
}