<?php
include "index3.php";
include "../core/CDFC.php";
$var=$_SESSION['i'];
$CDF1C=new CDFC();
$listeCDF=$CDF1C->afficherCDF();

foreach($listeCDF as $row){


$var1=$row['points'];








}




$var1=$var1+50;
return $var1;
$sql="UPDATE `cartedefedilite` SET `points`=$var1 WHERE IDCF=$var";
$db = config::getConnexion();
		try{
            $req=$db->prepare($sql);
            $points=$CDF->getpoints();
            $datas = array('points'=>$var1);
            $req->bindValue('points',$var1);
            $s=$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());

        }	
       
    
?>