<?PHP
include_once "../config.php";
class ChatC
 {
    function afficherChat($Chat){
		echo "pseudo: ".$Chat->getPseudo()."<br>";
		echo "message: ".$Chat->getMessage()."<br>";
	
	}
	/* function afficherChatationfront($ID_client)
	{
		$sql = "SELECT * FROM `Chatation` WHERE  `ID_client`=:ID_client";
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
	}*/
	function ajouterChat($Chat){
		$sql = "INSERT INTO `chat` (pseudo,message) VALUES (:pseudo,:message);";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':pseudo',$Chat->getPseudo());
		$req->bindValue(':message',$Chat->getMessage());
		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	
	function afficherChats(){
		
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.ID_client= a.ID_client";
		$sql="SELECT * From chat ";
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