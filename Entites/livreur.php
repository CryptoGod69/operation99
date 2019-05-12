<?PHP
class livreur{
	private $cin;
	private $nom;
	private $prenom;
	private $numPermis;
	private $rib;
	private $mail;
	private $numTel;
	private $mdp;
	private $nbHeuresTravail;
	private $tarifHoraire;
	private $autorise;

	function __construct($cin,$nom,$prenom,$numPermis,$rib,$mail,$numTel,$mdp,$nbHeuresTravail,$tarifHoraire){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->numPermis=$numPermis;
		$this->rib=$rib;
		$this->mail=$mail;
		$this->numTel=$numTel;
		$this->mdp=$mdp;
		$this->nbHeuresTravail=$nbHeuresTravail;
		$this->tarifHoraire=$tarifHoraire;
	}
	
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getNumPermis(){
		return $this->numPermis;
	}
	function getRib(){
		return $this->rib;
	}

	function getNumTel(){
		return $this->numTel;
	}

	function getMail(){
		return $this->mail;
	}

	function getMdp(){
		return $this->mdp;
	}
	function getNbHeuresTravail(){
		return $this->nbHeuresTravail;
	}
	function getTarifHoraire(){
		return $this->tarifHoraire;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setCin($cin){
		$this->cin=$cin;
	}
	function setNumPermis($numPermis){
		$this->numPermis=$numPermis;
	}
	function setRib($rib){
		$this->rib=$rib;
	}
	function setTel($numTel){
		$this->numTel=$numTel;
	}
	function setMail($mail){
		$this->mail=$mail;
	}
	function setMdp($mdp){
		$this->mdp=$mdp;
	}
	function setNbHeuresTravail($nbHeuresTravail){
		$this->nbHeuresTravail=$nbHeuresTravail;
	}
	function setTarifHoraire($tarifHoraire){
		$this->tarifHoraire=$tarifHoraire;
	}
	function getAutorise(){
		return $this->autorise;
	}
	function setAutorise($autorise){
		$this->autorise=$autorise;
	}
	
}

?>