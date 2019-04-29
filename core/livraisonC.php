<?PHP
include "../config.php";


class livraisonC {
/*function afficherlivraison ($livraison){
		echo "id: ".$livraison->getid()."<br>";
		echo "adresse: ".$livraison->getadresse()."<br>";
		echo "Préadresse: ".$livraison->getcinLivreur()."<br>";
		echo "Numéro de permis: ".$livraison->getdateLivraison()."<br>";
		echo "dureeLivraison: ".$livraison->getdureeLivraison()."<br>";
		echo "Numéro de telephone: ".$livraison->getNumTel()."<br>";
		echo "etatLivraison: ".$livraison->getetatLivraison()."<br>";
		echo "Mot de passe: ".$livraison->getMdp()."<br>";
		echo "adressebre d'heures de travail: ".$livraison->getnbHeuresTravail()."<br>";
		echo "Tarif horaire: ".$livraison->getTarifHoraire()."<br>";
	}

	function calculerSalaire($livraison){
		echo $livraison->getnbHeuresTravail() * $livraison->getTarifHoraire();
	}
*/	
	function ajouterlivraison($livraison){
		$sql="insert into livraison (adresse,cinLivreur,dateLivraison,dureeLivraison,etatLivraison,email) values (:adresse,:cinLivreur,:dateLivraison,:dureeLivraison,:etatLivraison,:email)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $adresse=$livraison->getAdresse();
		$cinLivreur=$livraison->getCinLivreur();
		$dateLivraison=$livraison->getDateLivraison();
		$dureeLivraison=$livraison->getDureeLivraison();
		$etatLivraison=$livraison->getEtatLivraison();
		$email=$livraison->getEmail();
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':cinLivreur',$cinLivreur);
		$req->bindValue(':dateLivraison',$dateLivraison);
		$req->bindValue(':dureeLivraison',$dureeLivraison);
		$req->bindValue(':etatLivraison',$etatLivraison);
		$req->bindValue(':email',$email);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
			
	}
	
	function afficherlivraisons(){
		//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.id= a.id";
		$sql="SElECT * From livraison order by id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherlivraisons0(){
		//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.id= a.id";
		$sql="SElECT * From livraison where autorise=0";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherlivraisons1($d){
		//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.id= a.id";
		$sql="SELECT * From livraison where dateLivraison='$d'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherlivraisons2($d){
		//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.id= a.id";
		$sql="SELECT * From livraison where etatLivraison='$d'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function afficherlivraisons3(){
		//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.id= a.id";
		$sql="SELECT * From livraison where cinLivreur=0";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}




	function supprimerlivraison($id){
		$sql="DELETE FROM livraison where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
            // header('Location: ../cpanel/afficherlivraison.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierlivraison($livraison,$id){
		$sql="UPDATE livraison SET adresse=:adresse,dateLivraison=:dateLivraison,dureeLivraison=:dureeLivraison WHERE id=:id";
		
		$db = config::getConnexion();
		
try{		
        $req=$db->prepare($sql);
		
        $adresse=$livraison->getAdresse();
		$dateLivraison=$livraison->getDateLivraison();
		$dureeLivraison=$livraison->getDureeLivraison();
		$datas = array('id'=>$id, ':adresse'=>$adresse, ':dateLivraison'=>$dateLivraison,':dureeLivraison'=>$dureeLivraison);	
		$req->bindValue(':id',$id);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':dateLivraison',$dateLivraison);
		$req->bindValue(':dureeLivraison',$dureeLivraison);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
			echo " Erreur ! ".$e->getMessage();
			echo " Les datas : " ;
		   print_r($datas);
        }
		
	}

	function autolivraison($livraison,$id){
		$sql="UPDATE livraison SET autorise=:autorise,tarifHoraire=:tarifHoraire WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttdureeLivraisonute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		$idn=$livraison->getid();
        $nbHeuresTravail=$livraison->getnbHeuresTravail();
		$tarifHoraire=$livraison->getTarifHoraire();
		$tarifHoraire=$livraison->getAutorise();
		$datas = array(':idn'=>$idn,':tarifHoraire'=>$tarifHoraire,':autorise'=>$autorise);
		$req->bindValue(':idn',$idn);
		$req->bindValue(':tarifHoraire',$tarifHoraire);
		$req->bindValue(':autorise',$autorise);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}


	function affecterlivraison($id,$cinLivreur){
		$sql="UPDATE livraison SET cinLivreur=:cinLivreur WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttdureeLivraisonute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		
		
		
		$req->bindValue(':id',$id);
		$req->bindValue(':cinLivreur',$cinLivreur);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}


	function recupererlivraison($id){
		$sql="SELECT * from livraison where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelivraisons($tarif){
		$sql="SELECT * from livraison where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function confirmerlivraison($livraison,$id){
	$sql="UPDATE livraison SET adresse=:adresse,dateLivraison=:dateLivraison,dureeLivraison=:dureeLivraison,etatLivraison=:etatLivraison WHERE id=:id";
	
	$db = config::getConnexion();
	
try{		
	$req=$db->prepare($sql);
	
	$adresse=$livraison->getAdresse();
	$dateLivraison=$livraison->getDateLivraison();
	$dureeLivraison=$livraison->getDureeLivraison();
	$etatLivraison=$livraison->getEtatLivraison();
	$datas = array('id'=>$id, ':adresse'=>$adresse, ':dateLivraison'=>$dateLivraison,':dureeLivraison'=>$dureeLivraison,':etatLivraison'=>$etatLivraison);	
	$req->bindValue(':id',$id);
	$req->bindValue(':adresse',$adresse);
	$req->bindValue(':dateLivraison',$dateLivraison);
	$req->bindValue(':dureeLivraison',$dureeLivraison);
	$req->bindValue(':etatLivraison',$etatLivraison);
	
		$s=$req->execute();
		
	   // header('Location: index.php');
	}
	catch (Exception $e){
		echo " Erreur ! ".$e->getMessage();
		echo " Les datas : " ;
	   print_r($datas);
	}
	
}

}