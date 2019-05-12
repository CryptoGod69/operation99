<?php
require_once "C:/xampp/htdocs/integration/config.php";
class CouponC
{
function ajouter($coupon)
{
    $sql = "INSERT INTO coupon (id_coupon , code_coupon,  Type_reduction, Valeur, Date_Debutcoupon, Date_Fincoupon) VALUES (:id_coupon,:code_coupon,:Type_reduction,:Valeur,:Date_Debutcoupon,:Date_Fincoupon)";
    $db=config::getConnexion();
    try
    {
    $req=$db->prepare($sql);
    $id_coupon=$coupon->get_idcoupon();
    $code_coupon=$coupon->get_codecoupon();
    $Type_reduction=$coupon->get_Typereduction();
    $Valeur=$coupon->get_Valeur();
    $Date_Debutcoupon=$coupon->get_DateDebutcoupon();
    $Date_Fincoupon=$coupon->get_DateFincoupon();
    $req->bindValue(':id_coupon', $id_coupon);
    $req->bindValue(':code_coupon', $code_coupon);
    $req->bindValue(':Type_reduction', $Type_reduction);
    $req->bindValue(':Valeur', $Valeur);
    $req->bindValue(':Date_Debutcoupon', $Date_Debutcoupon);
    $req->bindValue(':Date_Fincoupon', $Date_Fincoupon);
$req->execute();
return true;
    }catch(Exception $e)
    {echo 'Erreur' .$e->getMessage();return false;}
}
function maxid_coupon(){
    $sql="SElECT MAX(id_coupon)+1 From coupon";
		$db = config::getConnexion();
		try{
		$vmax=$db->query($sql);
		return $vmax;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
}
function afficherCouponC(){
    $sql="SElECT * From coupon ORDER BY id_coupon";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
    }
    function supprimerCoupon($id_coupon){
        $sql="DELETE FROM coupon where id_coupon= :id_coupon";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_coupon',$id_coupon);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function recupererCoupon($id_coupon){
		$sql="SELECT * from coupon where id_coupon=$id_coupon";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierCoupon($coupon,$id_coupon){
        $sql="UPDATE coupon SET code_coupon=:code_coupon,Type_reduction=:Type_reduction,Valeur=:Valeur,Date_Debutcoupon=:Date_Debutcoupon,Date_Fincoupon=:Date_Fincoupon WHERE id_coupon=:id_coupon";
        $db = config::getConnexion();
    try{		
        $req=$db->prepare($sql);
    $id_coupon=$coupon->get_idcoupon();
    $code_coupon=$coupon->get_codecoupon();
    $Type_reduction=$coupon->get_Typereduction();
    $Valeur=$coupon->get_Valeur();
    $Date_Debutcoupon=$coupon->get_DateDebutcoupon();
    $Date_Fincoupon=$coupon->get_DateFincoupon();
    $datas = array(':id_coupon'=>$id_coupon, ':code_coupon'=>$code_coupon, ':Type_reduction'=>$Type_reduction, ':Valeur'=>$Valeur, ':Date_Debutcoupon'=>$Date_Debutcoupon, ':Date_Fincoupon'=>$Date_Fincoupon);
    $req->bindValue(':id_coupon', $id_coupon);
    $req->bindValue(':code_coupon', $code_coupon);
    $req->bindValue(':Type_reduction', $Type_reduction);
    $req->bindValue(':Valeur', $Valeur);
    $req->bindValue(':Date_Debutcoupon', $Date_Debutcoupon);
    $req->bindValue(':Date_Fincoupon', $Date_Fincoupon);
            $s=$req->execute();
           
        
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
    }
    function  affichernbrCoupon (){
        $sql="SElECT COUNT(id_coupon) From coupon";
            $db = config::getConnexion();
            try{
            $vmax=$db->query($sql);
            return $vmax;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
    }
    function  affichernbrCouponP (){
        $sql="SElECT COUNT(id_coupon) From coupon where Type_reduction='Pourcentage'";
            $db = config::getConnexion();
            try{
            $vmaxp=$db->query($sql);
            return $vmaxp;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
    }
    function  sommedescoupon (){
        $sql="SElECT SUM(Valeur) From coupon where Type_reduction='Pourcentage'";
            $db = config::getConnexion();
            try{
            $vmaxp=$db->query($sql);
            return $vmaxp;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
    }
}
?>