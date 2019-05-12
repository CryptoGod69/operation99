<?PHP
class Wishlist{
	private $id;
	private $Fournisseur;
	private $user;
    private $qty;
    private $nom;
    private $img;
    private $prix;
	function __construct($id,$Fournisseur,$user,$qty,$nom,$img,$prix){
		$this->id=$id;
		$this->Fournisseur=$Fournisseur;
		$this->user=$user;
		$this->qty=$qty;
		$this->nom=$nom;
		$this->img=$img;
		$this->prix=$prix;
	}
	
	function getId(){
		return $this->id;
	}
	function getFournisseur(){
		return $this->Fournisseur;
	}
	function getUser(){
		return $this->user;
	}
	function getQty(){
		return $this->qty;
	}
	function getNom(){
		return $this->nom;
	}
	function getImg(){
		return $this->img;
	}
	function getPrix(){
		return $this->prix;
	}

	function setId($id){
		$this->id=$id;
	}
	function setFournisseur($Fournisseur){
		$this->Fournisseur=$Fournisseur;
	}
	function setUser($user){
		$this->user=$user;
	}
	function setQty($qty){
		$this->qty=$qty;
	}	
	function setNom($nom){
		$this->nom=$nom;
	}
	function setImg($img){
		$this->img=$img;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}	
}

?>