<?PHP
include "../config.php";


class livreurC {

	
	function ajouterLivreur($livreur,$test){
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
		$test=1;
			$req->execute();
			
           
        }
        catch (Exception $e){
			echo 'Erreur: '.$e->getMessage();
			$test=0;
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

	function afficherlivreurs1(){
		//$sql="SElECT * From livreur e inner join formationphp.livreur a on e.cin= a.cin";
		$sql="SElECT * From livreur where autorise=1";
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

	function modifierlivreur($cin,$nom,$prenom,$numPermis,$rib,$mail,$numTel,$mdp,$nbHeuresTravail,$tarifHoraire){
		$sql="UPDATE livreur SET nom=:nom,prenom=:prenom,numPermis=:numPermis,rib=:rib,mail=:mail,numTel=:numTel,mdp=:mdp,
		nbHeuresTravail=:nbHeuresTravail,tarifHoraire=:tarifHoraire WHERE cin=:cin";
		
		$db = config::getConnexion();
		$req=$db->prepare($sql);
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
	
		
try{		
            $req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}

	function autolivreur($livreur,$cin){
		$sql="UPDATE livreur SET nom=:nom,prenom=:prenom,numPermis=:numPermis,rib=:rib,mail=:mail,numTel=:numTel,mdp=:mdp,
		nbHeuresTravail=:nbHeuresTravail,tarifHoraire=:tarifHoraire,autorise=:autorise WHERE cin=:cin";
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
		$autorise=1;
		$datas = array('cin'=>$cin, ':nom'=>$nom, ':prenom'=>$prenom,':numPermis'=>$numPermis,':rib,'=>$rib,':mail'=>$mail,':numTel'=>$numTel,':mdp'=>$mdp,':nbHeuresTravail'=>$nbHeuresTravail,':tarifHoraire'=>$tarifHoraire,':autorise'=>$autorise);
		$req=$db->prepare($sql);
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
		
		
		$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}

	function recupererLivreur($cin){
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