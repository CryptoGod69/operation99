<?PHP
include "../config.php";

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
		$sql="insert into premium (IDP,CVCode,CodeNum,DDE) values (:IDP,:CVCode,:CodeNum,:DDE)";

		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$IDP=$premium->getIDP();
        $CVCode=$premium->getCVCode();
        $CodeNum=$premium->getCodeNum();
        $DDE=$premium->getDDE();
		$req->bindValue(':IDP',$IDP);
        $req->bindValue(':CVCode',$CVCode);
        $req->bindValue(':CodeNum',$CodeNum);
        $req->bindValue(':DDE',$DDE);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpremium(){
		//$sql="SElECT * From News e inner join formationphp.News a on e.cin= a.cin";
		$sql="SElECT * From premium";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerpremium($IDP){
		$sql="DELETE FROM premium where IDP= :IDP";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':IDP',$IDP);
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