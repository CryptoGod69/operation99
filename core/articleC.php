<?PHP
include "C:/xampp/htdocs/CPanel/config.php";
class ArticleC {
function afficherArticle ($article){
		echo "idc: ".$article->getIDCommande()."<br>";
		echo "idp: ".$article->getIDProduit()."<br>";
		echo "nomp: ".$article->getNomProduit()."<br>";
		echo "qtp: ".$article->getQtProduit()."<br>";
		echo "prixp: ".$article->getPrixProduit()."<br>";
	}
	
	function ajouterArticle($article){
		$sql="insert into articles_commande (IDCommande,IDProduit,NomProduit,QtProduit,PrixProduit) values (:idc, :idp,:nomp,:qtp,:prixp)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idc=$article->getIDCommande();
        $idp=$article->getIDProduit();
        $nomp=$article->getNomProduit();
        $qtp=$article->getQtProduit();
        $prixp=$article->getPrixProduit();
		$req->bindValue(':idc',$idc);
		$req->bindValue(':idp',$idp);
		$req->bindValue(':nomp',$nomp);
		$req->bindValue(':qtp',$qtp);
		$req->bindValue(':prixp',$prixp);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherArticles(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From articles_commande ORDER BY IDCommande ASC ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerArticle($idc,$idp){
		$sql="DELETE FROM articles_commande where IDCommande= :idc AND IDProduit=:idp";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idc',$idc);
		$req->bindValue(':idp',$idp);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierArticle($article,$idc){
		$sql="UPDATE articles_commande SET IDCommande=:idc, IDProduit=:idp,NomProduit=:nomp,QtProduit=:qtp,PrixProduit=:prixp WHERE IDCommande=:idc";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idc=$article->getIDCommande();
		$idp=$article->getIDProduit();
		$nomp=$article->getNomProduit();
        $qtp=$article->getQtProduit();
        $prixp=$article->getPrixProduit();
        
		$datas = array(':idcc'=>$idcc, ':idc'=>$idc ,':idp'=>$idp , ':nomp'=>$nomp,':qtp'=>$qtp,':prixp'=>$prixp);
		$req->bindValue(':idcc',$idcc);
		$req->bindValue(':idc',$idc);
		$req->bindValue(':idp',$idp);
		$req->bindValue(':nomp',$nomp);
		$req->bindValue(':qtp',$qtp);
		$req->bindValue(':prixp',$prixp);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererArticle($idc){
		$sql="SELECT * from articles_commande where IDCommande=$idc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeArticles($tarif){
		$sql="SELECT * from articles_commande where IDCommande=$idc";
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