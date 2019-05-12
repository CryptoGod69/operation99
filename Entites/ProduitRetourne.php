<?PHP
class ProduitRetourne{
	private $ID_client;
	private $Nom;
	private $Ref_Commande;
	private $Ref_Reclam;
	
	function __construct($ID_client,$Nom,$Ref_Commande,$Ref_Reclam){
		$this->ID_client=$ID_client;
		$this->Nom=$Nom;
		$this->Ref_Commande=$Ref_Commande;
		$this->Ref_Reclam=$Ref_Reclam;
	}
	
	

function getID_client(){
	return $this->ID_client;
}
function getNom(){
	return $this->Nom;
}

function getRef_Commande(){
	return $this->Ref_Commande;
	}
function getRef_Reclam(){
	return $this->Ref_Reclam;

	}
	
function setRef_Commande($Ref_Commande)
	{
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
