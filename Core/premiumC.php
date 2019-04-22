<?PHP
require_once "C:/wamp64/www/integration/config.php";

class premiumC {
	
/*
	function afficherutilisateur ($News){
		echo "Cin: ".$News->getCin()."<br>";
		echo "Nom: ".$News->getNom()."<br>";
		echo "Prénom: ".$News->getPrenom()."<br>";
		echo "tarif heure: ".$News->getTarifHoraire()."<br>";
		echo "nb heures: ".$News->getNbHeures()."<br>";
	}
	function calculerSalaire($News){
		echo $News->getNbHeures() * $News->getTarifHoraire();
	}
*/	
	function ajouterpremium($premium){
		$sql="insert into premium (CVCode,CodeNum,DDE) values (:CVCode,CodeNum,DDE)";
		//$sql = 'INSERT INTO NewsLetter VALUES Email SELECT Email FROM News WHERE Email=Email_News';
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $CVCode=$premium->getCVCode();
        $CodeNum=$premium->getCodeNum();
        $DDE=$premium->getDDE();
        
        $req->bindValue(':CVCode',$CVCode);
        $req->bindValue(':CodeNum',$CodeNum);
        $req->bindValue(':DDE',$DDE);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherNews(){
		//$sql="SElECT * From News e inner join formationphp.News a on e.cin= a.cin";
		$sql="SElECT * From NewsLetter";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerNews($ID_News){
		$sql="DELETE FROM NewsLetter where ID_News= :ID_News";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ID_News',$ID_News);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
/*	
	function rechercherListeNewss($tarif){
		$sql="SELECT * from News where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	*/
}

?>