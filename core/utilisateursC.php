<?PHP
include "../config.php";
class utilisateursC {
	
/*
	function afficherutilisateur ($utilisateurs){
		echo "Cin: ".$utilisateurs->getCin()."<br>";
		echo "Nom: ".$utilisateurs->getNom()."<br>";
		echo "Prénom: ".$utilisateurs->getPrenom()."<br>";
		echo "tarif heure: ".$utilisateurs->getTarifHoraire()."<br>";
		echo "nb heures: ".$utilisateurs->getNbHeures()."<br>";
	}
	function calculerSalaire($utilisateurs){
		echo $utilisateurs->getNbHeures() * $utilisateurs->getTarifHoraire();
	}
*/	
	function ajouterutilisateurs($utilisateurs){
		$sql="insert into utilisateurs (NomPrenom,Email,DDN,Tel,PWD1,Type) values (:NomPrenom, :Email, :DDN, :Tel, :PWD1 ,:Type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $NomPrenom=$utilisateurs->getNomPrenom();
        $Email=$utilisateurs->getEmail();
        $DDN=$utilisateurs->getDDN();
		$Tel=$utilisateurs->getTel();
		$PWD1=$utilisateurs->getPWD();
		$Type=$utilisateurs->getType();

		$req->bindValue(':NomPrenom',$NomPrenom);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':DDN',$DDN);
		$req->bindValue(':Tel',$Tel);
		$req->bindValue(':PWD1',$PWD1);
		$req->bindValue(':Type',$Type);
	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherutilisateurs(){
		//$sql="SElECT * From utilisateurs e inner join formationphp.utilisateurs a on e.cin= a.cin";
		$sql="SElECT * From utilisateurs";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerutilisateurs($ID){
		$sql="DELETE FROM utilisateurs where ID= :ID";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ID',$ID);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function modifierutilisateurs($utilisateurs,$ID){
		$sql="UPDATE 'utilisateurs' SET 'NomPrenom'=:NomPrenom, 'Email'=:Email, 'DDN'=:DDN, 'Tel'=:Tel, 'PWD1'=:PWD1,'Type'=:Type WHERE 'ID'=:ID";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		

	
	$req=$db->prepare($sql);
	$NomPrenom=$utilisateurs->getNomPrenom();
	$Email=$utilisateurs->getEmail();
	$DDN=$utilisateurs->getDDN();
	$Tel=$utilisateurs->getTel();
	$PWD1=$utilisateurs->getPWD();
	$Type=$utilisateurs->gettype();

	$datas = array(':NomPrenom'=>$NomPrenom,':Email'=>$Email, ':DDN'=>$DDN,':Tel'=>$Tel,':PWD1'=>$PWD1,':Type'=>$Type );
	$req->bindValue(':NomPrenom',$NomPrenom);
	$req->bindValue(':Email',$Email);
	$req->bindValue(':DDN',$DDN);
	$req->bindValue(':Tel',$Tel);
	$req->bindValue(':PWD1',$PWD1);
	$req->bindValue(':Type',$Type);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
       catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
  // echo " Les datas : " ;
 // print_r($datas);
        }
		
	}
	function recupererutilisateurs($ID){
		$sql="SELECT * from utilisateurs where ID=$ID";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*
	function rechercherListeutilisateurss($tarif){
		$sql="SELECT * from utilisateurs where tarifHoraire=$tarif";
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
	function triclient($utilisateurs)
	{$sql=("SELECT 'NomPrenom' FROM utilisateurs ordre by asc");
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ID',$ID);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		
	
}

?>