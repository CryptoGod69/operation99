<?PHP
require_once "C:/xampp/htdocs/integration/config.php";
class CommandeC {
		function ajouterCommande($commande){
			$sql="INSERT INTO tbl_commande (IDCom,NomUser,TotalCom) VALUES 
			(NULL, :iduser,:totalcom)";
			$db = config::getConnexion();
			try{
			$req=$db->prepare($sql);
			
			$idcom=$commande->getIDCom();
			$iduser=$commande->getIDUser();
			$totalcom=$commande->getTotalCom();
			$req->bindValue(':iduser',$iduser);
			$req->bindValue(':totalcom',$totalcom);	
				$req->execute();
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
			
		}
		
		function afficherCommandes(){
			//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
			$sql="SElECT * FROM tbl_commande";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function afficherCommandese(){
			//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
			$sql="SElECT * FROM tbl_commande ORDER BY IDCom DESC LIMIT 1";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			foreach($liste as $row )
			{
				$id=$row['IDCom'];
			}
			return $id;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function supprimerCommande($idcom){
			$sql="DELETE FROM tbl_commande where IDCom= :idcom";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idcom',$idcom);
			try{
				$req->execute();
			   // header('Location: index.php');
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierCommande($commande,$idcom){
			$sql="UPDATE tbl_commande SET IDCom=:idcom, IDUser=:iduser,TotalCom=:totalcom WHERE IDCom=:idcom";
			
			$db = config::getConnexion();
			//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{		
			$req=$db->prepare($sql);
			$idcomm=$commande->getIDCom();
			$iduser=$commande->getIDUser();
			$totalcom=$commande->getTotalCom();
			
			$datas = array(':idcomm'=>$idcomm, ':idcom'=>$idcom, ':iduser'=>$iduser,':totalcom'=>$totalcom);
			$req->bindValue(':idcomm',$idcomm);
			$req->bindValue(':idcom',$idcom);
			$req->bindValue(':iduser',$iduser);
			$req->bindValue(':totalcom',$totalcom);
	
				$s=$req->execute();
				
			   // header('Location: index.php');
			}
			catch (Exception $e){
				echo " Erreur ! ".$e->getMessage();
	   echo " Les datas : " ;
	  print_r($datas);
			}
			
		}
		function recupererCommande($idcom){
			$sql="SELECT * from tbl_commande where IDCom=$idcom";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function rechercherListeCommande($tarif){
			$sql="SELECT * from tbl_commande where IDCom=$idcom";
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