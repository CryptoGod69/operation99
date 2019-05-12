<?PHP
class Fournisseur{
	private $id;
	private $nom;
    private $mat;
	private $rib;
	function __construct($id,$nom,$mat,$rib){
		$this->id=$id;
		$this->nom=$nom;
		$this->mat=$mat;
		$this->rib=$rib;
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getMat(){
		return $this->mat;
	}
	function getRib(){
		return $this->rib;
	}
	function setId($id){
		$this->id=$id;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setMat($mat){
		$this->mat=$mat;
	}
	function setRib($rib){
		$this->rib=$rib;
	}
}

?>
