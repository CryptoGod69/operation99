<?PHP
require_once "C:/xampp/htdocs/integration/config.php";
class ProduitC{

function ajouterProduit($produit){
    $sql="insert into produits (image,Descr,Categorie,statut,Nom,Prix,quantity,Code_Barre,Fournisseur) values (:image,:Descr,:Categorie,:statut,:Nom,:Prix,:quantity,:Code_Barre,:Fournisseur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$produit->get_id();
        $image=$produit->get_image();
        $Descr=$produit->get_Descr();
        $Categorie=$produit->get_Categorie();
        $statut=$produit->get_statut();
        $Nom=$produit->get_Nom();
        $Prix=$produit->get_Prix();
        $quantity=$produit->get_quantity();
        $Code_Barre=$produit->get_CodeBarre();
        $Fournisseur=$produit->get_Fournisseur();
  
		$req->bindValue(':image',$image);
		$req->bindValue(':Descr',$Descr);
		$req->bindValue(':Categorie',$Categorie);
		$req->bindValue(':statut',$statut);
        $req->bindValue(':Nom',$Nom);
        $req->bindValue(':Prix',$Prix);
        $req->bindValue(':quantity',$quantity);
        $req->bindValue(':Code_Barre',$Code_Barre);
        $req->bindValue(':Fournisseur',$Fournisseur);
            
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
		}
	
	function afficherProduit(){
		//$sql="SElECT * From PRODUIT e inner join formationphp.PRODUIT a on e.cin= a.cin";
		$sql="SElECT * From PRODUITS";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        }
        function afficherProduitC(){
            //$sql="SElECT * From PRODUIT e inner join formationphp.PRODUIT a on e.cin= a.cin";
            $sql="SElECT * From PRODUIT";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
            }
		function supprimerProduit($id,$Fournisseur){
            $sql="DELETE FROM PRODUITS WHERE id=:id AND Fournisseur=:Fournisseur";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            echo "111";
            $req->bindValue(':id',$id);
            $req->bindValue(':Fournisseur',$Fournisseur);
            echo "222";
            try{
                echo "333";
                $req->execute();
                echo "444";
               // header('Location: index.php');
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
            }
        function modifierProduit($produit,$id,$Fournisseur){
            $sql="UPDATE PRODUITS SET id=:id,image=:image,Descr=:Descr,Categorie=:Categorie,
            statut=:statut,Nom=:Nom,Prix=:Prix,quantity=:quantity,Code_Barre=:Code_Barre,Fournisseur=:Fournisseur WHERE id=:id AND Fournisseur=:Fournisseur";
            
            $db = config::getConnexion();
            //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{		
            $req=$db->prepare($sql);
            $id=$produit->get_Id();
            $image=$produit->get_Image();
            $Descr=$produit->get_Descr();
            $Categorie=$produit->get_Categorie();
            $statut=$produit->get_statut();
            $Nom=$produit->get_Nom();
            $Prix=$produit->get_Prix();
            $quantity=$produit->get_quantity();
            $Code_Barre=$produit->get_CodeBarre();
            $Fournisseur=$produit->get_Fournisseur();
            $datas = array('id'=>$id, ':image'=>$image, ':Descr'=>$Descr,':Categorie'=>$Categorie,
             ':statut'=>$statut, ':Nom'=>$Nom, ':Prix'=>$Prix, ':quantity'=>$quantity, ':Code_Barre'=>$Code_Barre, ':Fournisseur'=>$Fournisseur);
            $req->bindValue(':id',$id);
            $req->bindValue(':image',$image);
            $req->bindValue(':Descr',$Descr);
            $req->bindValue(':Categorie',$Categorie);
            $req->bindValue(':statut',$statut);
            $req->bindValue(':Nom',$Nom);
            $req->bindValue(':Prix',$Prix);
            $req->bindValue(':quantity',$quantity);
            $req->bindValue(':Code_Barre',$Code_Barre);
            $req->bindValue(':Fournisseur',$Fournisseur);
            
                $s=$req->execute();
                
               // header('Location: index.php');
            }
            catch (Exception $e){
                echo " Erreur ! ".$e->getMessage();
                   echo " Les datas : " ;
                  print_r($datas);
            }
            
            }
		function recupererProduit($id){
		$sql="SELECT * from PRODUITS where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
        function nombreProduit(){
        //$sql="SElECT * From PRODUIT e inner join formationphp.PRODUIT a on e.cin= a.cin";
        $sql="SElECT (id) from PRODUITS";
        $db = config::getConnexion();
        try{
        $nb=$db->query($sql);
        return $nb;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
        }
        function nombreCatProduit($categorie){
        //$sql="SElECT * From PRODUIT e inner join formationphp.PRODUIT a on e.cin= a.cin";
        $sql="SElECT COUNT(id) From PRODUITS WHERE categorie='$categorie'";
        $db = config::getConnexion();
        try{
        $nb=$db->query($sql);
        return $nb;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
        }
        function prixbProduit(){
        //$sql="SElECT * From PRODUIT e inner join formationphp.PRODUIT a on e.cin= a.cin";
        $sql="SElECT MIN(prix) From PRODUITS";
        $db = config::getConnexion();
        try{
        $prix=$db->query($sql);
        return $prix;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
        }
        function prixhProduit(){
        //$sql="SElECT * From PRODUIT e inner join formationphp.PRODUIT a on e.cin= a.cin";
        $sql="SElECT MAX(prix) From PRODUITS";
        $db = config::getConnexion();
        try{
        $prix=$db->query($sql);
        return $prix;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
        }
        function afficherstock($Nom){
            //$sql="SElECT * From PRODUIT e inner join formationphp.PRODUIT a on e.cin= a.cin";
            $sql="SElECT * From PRODUITS where Nom='$Nom'";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
            }
            function recupererCategorie($Categorie){
                $sql="SELECT * from PRODUITS where Categorie='$Categorie' group by Nom";
                $db = config::getConnexion();
                try{
                $liste=$db->query($sql);
                return $liste;
                }
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                }
            }
            function affichermaxoc(){
                //$sql="SElECT * From PRODUIT e inner join formationphp.PRODUIT a on e.cin= a.cin";
                $sql="SElECT maxoc From PRODUITS GROUP BY maxoc";
                $db = config::getConnexion();
                try{
                $liste=$db->query($sql);
                return $liste;
                }
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                }	
                }

                function modifierpromoid($produit,$id,$promovaleur){
                    $sql="UPDATE PRODUITS SET promovaleur=:promovaleur WHERE id=:id";
                    
                    $db = config::getConnexion();
                    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
                try{		
                    $req=$db->prepare($sql);
                    $id=$produit->get_id();
                   
                    $datas = array('id'=>$id, ':promovaleur'=>$promovaleur);
                    $req->bindValue(':id',$id);
                    
                    $req->bindValue(':promovaleur',$promovaleur);
                        $s=$req->execute();
                        
                       // header('Location: index.php');
                    }
                    catch (Exception $e){
                        echo " Erreur ! ".$e->getMessage();
                           echo " Les datas : " ;
                          print_r($datas);
                    }
                    
                    }
                    function modifierpromocateg($produit,$Categorie,$promovaleur){
                        $sql="UPDATE PRODUITS SET promovaleur=:promovaleur WHERE Categorie=:Categorie";
                        
                        $db = config::getConnexion();
                        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
                    try{		
                        $req=$db->prepare($sql);
                        $Categorie=$produit->get_Categorie();
                       
                        $datas = array('Categorie'=>$Categorie, ':promovaleur'=>$promovaleur);
                        $req->bindValue(':Categorie',$Categorie);
                        
                        $req->bindValue(':promovaleur',$promovaleur);
                            $s=$req->execute();
                            
                           // header('Location: index.php');
                        }
                        catch (Exception $e){
                            echo " Erreur ! ".$e->getMessage();
                               echo " Les datas : " ;
                              print_r($datas);
                        }
                        
                        }
                        function modifierpromomaxoc($produit,$maxoc,$promovaleur){
                            $sql="UPDATE PRODUITS SET promovaleur=:promovaleur WHERE maxoc=:maxoc";
                           
                            $db = config::getConnexion();
                            //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
                        try{		
                            $req=$db->prepare($sql); 
                            $datas = array('maxoc'=>$maxoc, ':promovaleur'=>$promovaleur);
                        
                            $req->bindValue(':maxoc',$maxoc);
                            
                            $req->bindValue(':promovaleur',$promovaleur);
                                $s=$req->execute();
                                
                               // header('Location: index.php');
                            }
                            catch (Exception $e){
                                echo " Erreur ! ".$e->getMessage();
                                   echo " Les datas : " ;
                                  print_r($datas);
                            }
                            
                            }
                            function afficherpromoo(){
                                //$sql="SElECT * From PRODUIT e inner join formationphp.PRODUIT a on e.cin= a.cin";
                                $sql="SElECT MAX(promovaleur) From PRODUITS where promovaleur!=1";
                                $db = config::getConnexion();
                                try{
                                $liste=$db->query($sql);
                                return $liste;
                                }
                                catch (Exception $e){
                                    die('Erreur: '.$e->getMessage());
                                }	
                                }
                                function modifiermaxoc($produit,$maxoc,$Nom){
                                    $sql="UPDATE PRODUITS SET maxoc=:maxoc WHERE Nom=:'$Nom'";
                                    
                                    $db = config::getConnexion();
                                    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
                                try{		
                                    $req=$db->prepare($sql);
                                    $Nom=$produit->get_Nom();
                                   
                                    $datas = array('id'=>$id, ':promovaleur'=>$promovaleur);
                                    $req->bindValue(':Nom',$Nom);
                                    
                                    $req->bindValue(':promovaleur',$promovaleur);
                                        $s=$req->execute();
                                        
                                       // header('Location: index.php');
                                    }
                                    catch (Exception $e){
                                        echo " Erreur ! ".$e->getMessage();
                                           echo " Les datas : " ;
                                          print_r($datas);
                                    }
                                    
                                    }
                                    function recuperstars($Nom){
                                        $sql="SELECT maxoc from PRODUITS WHERE Nom='$Nom' limit 1";
                                        $db = config::getConnexion();
                                        try{
                                        $liste=$db->query($sql);
                                        return $liste;
                                        }
                                        catch (Exception $e){
                                            die('Erreur: '.$e->getMessage());
                                        }
                                    }
                                    function recuperer($Nom){
                                        $sql="SELECT * from PRODUITS where Nom='$Nom'";
                                        $db = config::getConnexion();
                                        try{
                                        $liste=$db->query($sql);
                                        return $liste;
                                        }
                                        catch (Exception $e){
                                            die('Erreur: '.$e->getMessage());
                                        }
                                    }

                                    function maxoc($produit,$id,$maxoc){
                                        $sql="UPDATE PRODUITS SET maxoc=:maxoc WHERE id=:id";
                                        
                                        $db = config::getConnexion();
                                        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
                                    try{		
                                        $req=$db->prepare($sql);
                                        $id=$produit->get_id();
                                       
                                        $datas = array('id'=>$id, ':maxoc'=>$maxoc);
                                        $req->bindValue(':id',$id);
                                        
                                        $req->bindValue(':maxoc',$maxoc);
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
                                function categdom(){
                                    $sql="SElECT MAX(Categorie) From produits";
                                        $db = config::getConnexion();
                                        try{
                                        $vmax=$db->query($sql);
                                        return $vmax;
                                        }
                                        catch (Exception $e){
                                            die('Erreur: '.$e->getMessage());
                                        }   
                                    }
                                    function graph(){
                                    $sql="SElECT statut, COUNT(*) as number From produits GROUP BY statut";
                                        $db = config::getConnexion();
                                        try{
                                        $vmax=$db->query($sql);
                                        return $vmax;
                                        }
                                        catch (Exception $e){
                                            die('Erreur: '.$e->getMessage());
                                        }   
                                    }
                                   
                                        

?>
