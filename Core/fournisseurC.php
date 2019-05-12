<?PHP
require_once "C:/xampp/htdocs/integration/config.php";
class FournisseurC{
/*function afficherFournisseur ($fournisseur){
		echo "id: ".$fournisseur->getId()."<br>";
		echo "Nom: ".$fournisseur->getNom()."<br>";
		echo "Matricule: ".$fournisseur->getMat()."<br>";
		echo "RIB: ".$fournisseur->getRib()."<br>";
		}*/

function ajouterFournisseur($fournisseur){
		$sql="insert into fournisseurs (id,nom,mat,rib) values (:id,:nom,:mat,:rib)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$fournisseur->getId();
        $nom=$fournisseur->getNom();
        $mat=$fournisseur->getMat();
        $rib=$fournisseur->getRib();
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':mat',$mat);
		$req->bindValue(':rib',$rib);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage("");
        }
		
		}
	
	function afficherFournisseur(){
		//$sql="SElECT * From FOURNISSEUR e inner join formationphp.FOURNISSEUR a on e.cin= a.cin";
		$sql="SElECT * From FOURNISSEURS";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
		}
	function supprimerFournisseur($id){
		$sql="DELETE FROM FOURNISSEURS where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		}
	function modifierFournisseur($fournisseur,$id){
		$sql="UPDATE FOURNISSEURS SET id=:id,nom=:nom,mat=:mat,rib=:rib WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{		
        $req=$db->prepare($sql);
		$id=$fournisseur->getId();
        $nom=$fournisseur->getNom();
        $mat=$fournisseur->getMat();
        $rib=$fournisseur->getRib();
		$datas = array('id'=>$id, ':nom'=>$nom, ':mat'=>$mat,':rib'=>$rib);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':mat',$mat);
		$req->bindValue(':rib',$rib);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			print_r($datas);
        }
		
		}
		function recupererFournisseur($id){
		$sql="SELECT * from FOURNISSEURS where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function nombreFournisseur(){
		//$sql="SElECT * From FOURNISSEUR e inner join formationphp.FOURNISSEUR a on e.cin= a.cin";
		$sql="SElECT COUNT(id) From FOURNISSEURS";
		$db = config::getConnexion();
		try{
		$nombre=$db->query($sql);
		return $nombre;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
		}
}

?>
