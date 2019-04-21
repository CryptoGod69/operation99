<?PHP
class ProduitRetourne{
	private $ID_client;
	private $ID_produit;
	private $Ref_Commande;
	private $Ref_Reclam;
	private $Nom;
	function __construct($ID_client,$ID_produit,$Ref_Commande,$Ref_Reclam,$Nom){
		$this->ID_client=$ID_client;
		$this->ID_produit=$ID_produit;
		$this->Nom=$Nom;
		$this->Ref_Commande=$Ref_Commande;
		$this->Ref_Reclam=$Ref_Reclam;
	}
	
	function getID_client(){
		return $this->ID_client
;
	}
	function getID_produit(){
		return $this->ID_produit;
	}
	function getRef_Commande(){
		return $this->Ref_Commande;
	}
	function getRef_Reclam(){
		return $this->Ref_Reclam;
	}
	function getNom(){
		return $this->Ref_Reclam;
	}
	
    
	function setid($ID_produit){
		$this->ID_produit=$ID_produit;
	}
	function setRef_Commande($Ref_Commande){
		$this->Ref_Commande=$Ref_Commande;
	}
	function setRef_Reclam($Ref_Reclam){
		$this->Ref_Reclam=$Ref_Reclam;
	}
	function setNom($Nom){
		$this->Nom=$Nom;
	}
	
	
}

?>
