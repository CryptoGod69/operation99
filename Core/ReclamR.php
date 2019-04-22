<?PHP
require_once "C:/wamp64/www/integration/config.php";
class ReclamR
 {
    function afficherReclam($Reclam){
		echo "ID_client: ".$Reclam->getID_client()."<br>";
		echo "sujet: ".$Reclam->getSujet()."<br>";
		echo "texte: ".$Reclam->getTexte()."<br>";
		echo "date_reclam: ".$Reclam->getDaterec()."<br>";
		echo "etat: ".$Reclam->getEtat()."<br>";
		
	}
	 function afficherreclamationfront($ID_client)
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
	}
	function ajouterReclam($Reclam){
		$sql = "INSERT INTO `reclamation` (ID_client,sujet,texte,date_reclam,etat) VALUES (:ID_client,:sujet,:texte,:date_reclam,:etat);";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':ID_client',$Reclam->getID_client());
		$req->bindValue(':sujet',$Reclam->getSujet());
		$req->bindValue(':texte',$Reclam->getTexte());
		$req->bindValue(':date_reclam',$Reclam->getDaterec());
		$req->bindValue(':etat',$Reclam->getEtat());
		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	
	function afficherReclams(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.ID_client= a.ID_client";
		$sql="SELECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclam($ID_client){
		$sql="DELETE FROM reclamation where ID_client= :ID_client";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ID_client',$ID_client);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclam($Reclam,$ID_client){
		$sql="UPDATE reclamation SET etat=:etat WHERE ID_client=:ID_client;";
		
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':ID_client',$ID_client);
		$req->bindValue(':sujet');
		$req->bindValue(':texte');
		$req->bindValue(':date_reclam');
		$req->bindValue(':etat',$etat);
		$req->execute();
		
	}
	function recupererReclam($ID_client){
		$sql="SELECT * from reclamation where ID_client=$ID_client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeReclam($ID_client){
		$sql="SELECT * from reclamation where ID_client=$ID_client";
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

?>