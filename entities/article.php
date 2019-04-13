<?PHP
class Article{
	private $idc;
	private $idp;
	private $nomp;
	private $qtp;
	private $prixp;

	function __construct($idc,$idp,$nomp,$qtp,$prixp){
		$this->idc=$idc;
		$this->idp=$idp;
		$this->nomp=$nomp;
		$this->qtp=$qtp;
		$this->prixp=$prixp;
	}
	
	function getIDCommande(){
		return $this->idc;
	}
	function getIDProduit(){
		return $this->idp;
	}
	function getNomProduit(){
		return $this->nomp;
	}
	function getQtProduit(){
		return $this->qtp;
	}

	function getPrixProduit(){
		return $this->prixp;
	}

	
	function setIDCommande($idc){
		$this->idc=$idc;
	}
	function setIDProduit($idp){
		$this->idp=$idp;
	}
	function setNomProduit($nomp){
		$this->nomp=$nomp;
	}
	function setQtProduit($qtp){
		$this->qtp=$qtp;
	}
	function setPrixPRoduit($prixp)
	{
     $this->prixp=$prixp;
	}

}

?>