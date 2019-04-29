<?PHP
class livraison{
	private $id;
	private $adresse;
	private $cinLivreur;
	private $dateLivraison;
	private $dureeLivraison;
	private $etatLivraison;
	private $email;

	function __construct($adresse,$cinLivreur,$dureeLivraison,$etatLivraison,$email){
		$this->adresse=$adresse;
		$this->cinLivreur=$cinLivreur;
		$this->dureeLivraison=$dureeLivraison;
		$this->etatLivraison=$etatLivraison;
		$this->email=$email;
		
	}
	
	function getId(){
		return $this->id;
	}
	
	function getAdresse(){
		return $this->adresse;
	}

	function getCinLivreur(){
		return $this->cinLivreur;
	}

	function getDateLivraison(){
		return $this->dateLivraison;
	}
	function getDureeLivraison(){
		return $this->dureeLivraison;
	}

	function getEtatLivraison(){
		return $this->etatLivraison;
	}


	function setAdresse($adresse){
		$this->adresse=$adresse;
	}

	function getEmail(){
		return $this->email;
	}

	function setEmail(){
		$this->email=$email;
	}

	function setCinLivreur($cinLivreur){
		$this->cinLivreur;
	}
	function setId($id){
		$this->id=$id;
	}
	function setDateLivraison($dateLivraison){
		$this->dateLivraison=$dateLivraison;
	}
	function setDureeLivraison($dureeLivraison){
		$this->dureeLivraison=$dureeLivraison;
	}

	function setEtatLivraison($etatLivraison){
		$this->etatLivraison=$etatLivraison;
	}	
}

?>