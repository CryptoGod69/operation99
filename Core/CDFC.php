<?PHP
include "C:/xampp/htdocs/integration/config.php";

class CDFC {
	
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
	function ajouterCDF($CDF){
		$sql="insert into cartedefedilite (IDCDF,NomFedi) values (:IDCDF,:NomFedi)";

		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$IDCDF=$CDF->getIDCDF();
        $NomFedi=$CDF->getNomFedi();
     
		$req->bindValue(':IDCDF',$IDCDF);
        $req->bindValue(':NomFedi',$NomFedi);
   
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCDF(){
        //$sql="SElECT * From News e inner join formationphp.News a on e.cin= a.cin";
        $var=$_SESSION['i'];
		$sql="SElECT * From cartedefedilite where IDCDF=$var";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function afficheCDF(){
        //$sql="SElECT * From News e inner join formationphp.News a on e.cin= a.cin";
        
		$sql="SElECT * From cartedefedilite where IDCDF=IDCDF";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    /*function autoincrement()
    {
        $var=$_SESSION['i'];
		
        $sql="SElECT points From cartedefedilite where IDCDF=$var";
        $db = config::getConnexion();
		try{
        $var1=$db->query($sql);
        $var1=$var1+50;
		return $var1;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        
    
    }
	*/
	function supprimerCDF($REFCDF){
		$sql="DELETE FROM cartedefedilite where REFCDF= :REFCDF";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':REFCDF',$REFCDF);
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