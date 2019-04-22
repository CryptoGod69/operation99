<?php
require_once "C:/wamp64/www/integration/config.php";
class rateC
{
    function ajouter($rate)
    {
        $sql = "INSERT INTO rate (ratestars , sess) VALUES (:ratestars,:sess)";
        $db=config::getConnexion();
        try
        {
        $req=$db->prepare($sql);
        $ratestars=$rate->get_ratestars();
        $sess=$rate->get_sess();
        $req->bindValue(':ratestars', $ratestars);
        $req->bindValue(':sess', $sess);
    $req->execute();
    return true;
        }catch(Exception $e)
        {echo 'Erreur' .$e->getMessage();return false;}
    }
    function  afficherstarslowel(){
        $sql="SELECT ratestars,COUNT(ratestars) FROM rate GROUP BY ratestars DESC limit 1 ";
            $db = config::getConnexion();
            try{
            $vmax=$db->query($sql);
            return $vmax;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
    }
    function  afficherstars(){
        $sql="SELECT ratestars,COUNT(ratestars) FROM rate GROUP BY ratestars  ";
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