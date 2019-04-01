<?PHP
include "../config.php";


class livraisonC {
/*function afficherlivraison ($livraison){
		echo "id: ".$livraison->getid()."<br>";
		echo "adresse: ".$livraison->getadresse()."<br>";
		echo "Préadresse: ".$livraison->getcinLivreur()."<br>";
		echo "Numéro de permis: ".$livraison->getdateLivraion()."<br>";
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
		$sql="insert into livraison (adresse,cinLivreur,dureeLivraison,etatLivraison) values (:adresse,:cinLivreur,:dureeLivraison,:etatLivraison)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $adresse=$livraison->getAdresse();
		$cinLivreur=$livraison->getCinLivreur();
		$dureeLivraison=$livraison->getDureeLivraison();
		$etatLivraison=$livraison->getEtatLivraison();
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':cinLivreur',$cinLivreur);
		$req->bindValue(':dureeLivraison',$dureeLivraison);
		$req->bindValue(':etatLivraison',$etatLivraison);
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
		$sql="UPDATE livraison SET id=:id, adresse=:adresse,cinLivreur=:cinLivreur,dateLivraion=:dateLivraion,dureeLivraison=:dureeLivraison,etatLivraison=:etatLivraison WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttdureeLivraisonute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idn=$livraison->getId();
        $adresse=$livraison->getAdresse();
		$cinLivreur=$livraison->getCinLivreur();
		$dateLivraion=$livraison->getDateLivraion();
		$dureeLivraison=$livraison->getDureeLivraison();
		$etatLivraison=$livraison->getEtatLivraison();
		
		$datas = array(':idn'=>$idn, ':id'=>$id, ':adresse'=>$adresse,':cinLivreur'=>$cinLivreur,':dateLivraion'=>$dateLivraion,':dureeLivraison'=>$dureeLivraison,':etatLivraison'=>$etatLivraison);
		$req->bindValue(':idn',$idn);
		$req->bindValue(':id',$id);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':cinLivreur',$cinLivreur);
		$req->bindValue(':dateLivraion',$dateLivraion);
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
}

?>