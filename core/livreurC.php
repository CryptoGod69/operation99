<?PHP
include "../config.php";


class livreurC {
/*function afficherlivreur ($livreur){
		echo "Cin: ".$livreur->getCin()."<br>";
		echo "Nom: ".$livreur->getNom()."<br>";
		echo "Prénom: ".$livreur->getPrenom()."<br>";
		echo "Numéro de permis: ".$livreur->getNumPermis()."<br>";
		echo "RIB: ".$livreur->getRib()."<br>";
		echo "Numéro de telephone: ".$livreur->getNumTel()."<br>";
		echo "Mail: ".$livreur->getMail()."<br>";
		echo "Mot de passe: ".$livreur->getMdp()."<br>";
		echo "Nombre d'heures de travail: ".$livreur->getnbHeuresTravail()."<br>";
		echo "Tarif horaire: ".$livreur->getTarifHoraire()."<br>";
	}

	function calculerSalaire($livreur){
		echo $livreur->getnbHeuresTravail() * $livreur->getTarifHoraire();
	}
*/	
	function ajouterLivreur($livreur){
		$sql="insert into livreur (cin,nom,prenom,numPermis,rib,mail,numTel,mdp,nbHeuresTravail,tarifHoraire) values (:cin, :nom,:prenom,:numPermis,:rib,:mail,:numTel,:mdp,:nbHeuresTravail,:tarifHoraire)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$livreur->getCin();
        $nom=$livreur->getNom();
		$prenom=$livreur->getPrenom();
		$numPermis=$livreur->getNumPermis();
		$rib=$livreur->getRib();
		$mail=$livreur->getMail();
		$numTel=$livreur->getNumTel();
		$mdp=$livreur->getMdp();
        $nbHeuresTravail=$livreur->getNbHeuresTravail();
        $tarifHoraire=$livreur->getTarifHoraire();
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':numPermis',$numPermis);
		$req->bindValue(':rib',$rib);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':numTel',$numTel);
		$req->bindValue(':mdp',$mdp);
		$req->bindValue(':nbHeuresTravail',$nbHeuresTravail);
		$req->bindValue(':tarifHoraire',$tarifHoraire);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
			
	}
	
	function afficherlivreurs(){
		//$sql="SElECT * From livreur e inner join formationphp.livreur a on e.cin= a.cin";
		$sql="SElECT * From livreur order by autorise";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherlivreurs0(){
		//$sql="SElECT * From livreur e inner join formationphp.livreur a on e.cin= a.cin";
		$sql="SElECT * From livreur where autorise=0";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerlivreur($cin){
		$sql="DELETE FROM livreur where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
            // header('Location: ../cpanel/afficherLivreur.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierlivreur($livreur,$cin){
		$sql="UPDATE livreur SET cin=:cin, nom=:nom,prenom=:prenom,numPermis=:numPermis,rib=:rib,mail=:mail,numTel=:numTel,mdp=:mdp,nbHeuresTravail=:nbHeuresTravail,tarifHoraire=:tarifHoraire WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$livreur->getCin();
        $nom=$livreur->getNom();
		$prenom=$livreur->getPrenom();
		$numPermis=$livreur->getNumPermis();
		$rib=$livreur->getRib();
		$mail=$livreur->getMail();
		$numTel=$livreur->getNumTel();
		$mdp=$livreur->getMdp();
        $nbHeuresTravail=$livreur->getnbHeuresTravail();
		$tarifHoraire=$livreur->getTarifHoraire();
		$autorise=$livreur->getAutorise();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':numPermis'=>$numPermis,':rib'=>$rib,':mail'=>$mail,':numTel'=>$numTel,':mdp'=>$mdp,':nbHeuresTravail'=>$nbHeuresTravail,':tarifHoraire'=>$tarifHoraire,':autorise'=>$autorise);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':numPermis',$numPermis);
		$req->bindValue(':rib',$rib);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':numTel',$numTel);
		$req->bindValue(':mdp',$mdp);
		$req->bindValue(':nbHeuresTravail',$nbHeuresTravail);
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

	function autolivreur($livreur,$cin){
		$sql="UPDATE livreur SET autorise=:autorise,tarifHoraire=:tarifHoraire WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		$cinn=$livreur->getCin();
        $nbHeuresTravail=$livreur->getnbHeuresTravail();
		$tarifHoraire=$livreur->getTarifHoraire();
		$tarifHoraire=$livreur->getAutorise();
		$datas = array(':cinn'=>$cinn,':tarifHoraire'=>$tarifHoraire,':autorise'=>$autorise);
		$req->bindValue(':cinn',$cinn);
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


	function recupererlivreur($cin){
		$sql="SELECT * from livreur where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelivreurs($tarif){
		$sql="SELECT * from livreur where tarifHoraire=$tarif";
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