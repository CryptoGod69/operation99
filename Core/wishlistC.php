<?PHP

require_once "C:/xampp/htdocs/integration/config.php";
class WishlistC{
/*function afficherFournisseur ($fournisseur){
        echo "id: ".$fournisseur->getId()."<br>";
        echo "Nom: ".$fournisseur->getNom()."<br>";
        echo "Matricule: ".$fournisseur->getMat()."<br>";
        echo "RIB: ".$fournisseur->getRib()."<br>";
        }*/

function ajouterWishlist($wishlist){
        $sql="insert into wishlist (id,Fournisseur,user,qty,nom,img,prix) values (:id,:Fournisseur,:user,:qty,:nom,:img,:prix)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $id=$wishlist->getId();
        $Fournisseur=$wishlist->getFournisseur();
        $user=$wishlist->getUser();
        $qty=$wishlist->getQty();
        $nom=$wishlist->getNom();
        $img=$wishlist->getImg();
        $prix=$wishlist->getPrix();
        $req->bindValue(':id',$id);
        $req->bindValue(':Fournisseur',$Fournisseur);
        $req->bindValue(':user',$user);
        $req->bindValue(':qty',$qty);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':img',$img);
        $req->bindValue(':prix',$prix);
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
        }

    function supprimerWishlist($id,$Fournisseur,$user){
        $sql="DELETE FROM wishlist where id=:id and Fournisseur=:Fournisseur and user=:user";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        $req->bindValue(':Fournisseur',$Fournisseur);
        $req->bindValue(':user',$user);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }

        function recupererWishlist($user){
        $sql="SELECT * from wishlist where user='".$user."' ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }

        function nbWishlist($user){
        $sql="SELECT COUNT(id) from wishlist where user='".$user."' ";
        $db = config::getConnexion();
        try{
        $nb=$db->query($sql);
        $nb=$nb->fetch();
        return $nb;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }

        function modQtyWishlist($id,$Fournisseur,$user,$qty){
        $sql="UPDATE wishlist SET qty=:qty where id=:id and Fournisseur=:Fournisseur and user=:user";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    try{        
        $req=$db->prepare($sql);
        $datas = array('id'=>$id, ':Fournisseur'=>$Fournisseur, ':user'=>$user,':qty'=>$qty);
        $req->bindValue(':id',$id);
        $req->bindValue(':Fournisseur',$Fournisseur);
        $req->bindValue(':user',$user);
        $req->bindValue(':qty',$qty);

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

?>
