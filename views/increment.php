<?php
include "../core/CDFC.php";
session_start();
$var=$_SESSION['i'];
$CDF1C=new CDFC();

$db = config::getConnexion();
$sql="select points from cartedefedilite where IDCDF=$var";

$req=$db->query($sql);
$r=$req->fetch();


$var1=$r['points'];













$var1=50+$var1;

$sql="UPDATE cartedefedilite SET points=$var1 WHERE IDCDF=$var";
var_dump($sql);
		try{
            $req=$db->query($sql);
            header("location: index3.php");
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());

        }	
    
       
    
?>