<?PHP
include "../config.php";
class utilisateursC {
	
	
	function ajouterutilisateurs($utilisateurs){
		$sql="insert into utilisateurs (NomPrenom,Email,DDN,Tel,PWD1,Type) values (:NomPrenom,:Email,:DDN,:Tel,:PWD1,:Type)";
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
		asort($liste);
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
	/*
	function modifierutilisateurs($utilisateurs,$ID){
		//$sql="UPDATE utilisateurs SET NomPrenom=nomprenom, Email=email, DDN=ddn, Tel=tel, PWD1=pwd1, Region=region, Type=:type WHERE ID=ID";
		$sql="UPDATE `utilisateurs` SET `NomPrenom`=[nomprenom],`Email`=[email],`DDN`=[ddn],`Tel`=[tel],`PWD1`=[pwd1],`Type`=[type],`Region`=[region] WHERE ID=ID";
		$db = config::getConnexion();
		
try{		

	
	$req=$db->prepare($sql);

	$NomPrenom=$utilisateurs->getNomPrenom();
	$Email=$utilisateurs->getEmail();
	$DDN=$utilisateurs->getDDN();
	$Tel=$utilisateurs->getTel();
	$PWD1=$utilisateurs->getPWD();
	$Region=$utilisateurs->getRegion();
	$Type=$utilisateurs->getType();
	$datas = array('nomprenom'=>$NomPrenom,'email'=>$Email, 'ddn'=>$DDN,'tel'=>$Tel,'pwd1'=>$PWD1,'region'=>$Region,'type'=>$Type);

	$req->bindValue('nomprenom',$NomPrenom);
	$req->bindValue('email',$Email);
	$req->bindValue('ddn',$DDN);
	$req->bindValue('tel',$Tel);
	$req->bindValue('pwd1',$PWD1);
	$req->bindValue('region',$Region);
	$req->bindValue('type',$Type);

		
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

		


}

?>