<?PHP
include_once "../config.php";
//include_once "connexion.php";
session_start(); 
class ReponseC
 {
    function afficherReclam($Reponse){
		echo "ID_client: ".$Reponse->getID_client()."<br>";
		echo "ref_reclam: ".$Reponse->getRefReclam()."<br>";
		echo "reponse: ".$Reponse->getReponse()."<br>";
		
	}
    /* function afficherreclamationfront($ID_client)
	{
		$sql = "SELECT * FROM `reclamation` WHERE  `ID_client`=:ID_client";
		$db = config::getConnexion();
		$req =$db->prepare($sql);
		$req=bindValue(':Id_client',$ID_client);
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
	}
	} */
	function ajouterReponse($Reponse){
		$sql = "INSERT INTO `reponses` (ref_reclam,ID_client,reponse) VALUES (:ref_reclam,:ID_client,:reponse);";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':ref_reclam',$Reponse->getRefReclam());
		$req->bindValue(':ID_client',$Reponse->getID_client());
		$req->bindValue(':reponse',$Reponse->getReponse());
		//$req->bindValue(':date_reclam',$Reclam->getDaterec());
		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	function afficherReponses(){
		//$sql="SELECT * From employe e inner join formationphp.employe a on e.ID_client= a.ID_client";
		$sql="SELECT * From reponses where ID_client='".$_SESSION["r"]."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function recuperer($ID_client){
		$sql="SELECT * from reponses where ID_client=$ID_client";
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