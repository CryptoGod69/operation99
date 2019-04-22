<?PHP
require_once "C:/wamp64/www/integration/config.php";
class ProduitRetourneP {
function afficherProduit($ProduitRetourne){
		echo "ID_client: ".$ProduitRetourne->getID_client()."<br>";
		echo "ID_produit: ".$ProduitRetourne->getID_produit()."<br>";
		echo "nom: ".$ProduitRetourne->getNom()."<br>";
		echo "Ref_Commande: ".$ProduitRetourne->getRef_Commande()."<br>";
		echo "Ref_Reclam: ".$ProduitRetourne->getRef_Reclam()."<br>";

		
	}
	
	function ajouterProduit($ProduitRetourne){
		$sql = "INSERT INTO `produits_retournes` (ID_client,ID_produit,Ref_Commande,Ref_Reclam) VALUES (:ID_client,:ID_produit,:Ref_Commande,:Ref_Reclam);";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':ID_client',$ProduitRetourne->getID_client());
		$req->bindValue(':ID_produit',$ProduitRetourne->getID_produit());
		$req->bindValue(':Ref_Commande',$ProduitRetourne->getRef_Commande());
		$req->bindValue(':Ref_Reclam',$ProduitRetourne->getRef_Reclam());
		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.ID_client= a.ID_client";
		$sql="SELECT * From produits_retournes";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerProduit($ID_client){
		$sql="DELETE FROM produits_retournes where ID_client= :ID_client";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ID_client',$ID_client);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierProduit($ProduitRetourne,$ID_client){
		$sql="UPDATE produits_retournes SET ID_client=:ID_clientn, ID_produit=:ID_produit,Ref_Commande=:Ref_Commande,Ref_Reclam=:Ref_Reclam WHERE ID_client=:ID_client";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$ID_clientn=$ProduitRetourne->getID_client();
        $ID_produit=$ProduitRetourne->getID_produit();
        $Ref_Commande=$ProduitRetourne->getRef_Commande();
        $Ref_Reclam=$ProduitRetourne->getRef_Reclam();
		$datas = array(':ID_clientn'=>$ID_clientn,':ID_client'=>$ID_client,':ID_produit'=>$ID_produit,':Ref_Commande'=>$Ref_Commande,':Ref_Reclam'=>$Ref_Reclam);
		$req->bindValue(':ID_clientn',$ID_clientn);
		$req->bindValue(':ID_client',$ID_client);
		$req->bindValue(':ID_produit',$ID_produit);
		$req->bindValue(':Ref_Commande',$Ref_Commande);
		$req->bindValue(':Ref_Reclam',$Ref_Reclam);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererProduit($ID_client){
		$sql="SELECT * from produits_retournes where ID_client=$ID_client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeProduit($Id_client){
		$sql="SELECT * from produits_retournes where ID_client=$ID_client";
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