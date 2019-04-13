<?PHP
class Commande{
	private $idcom;
	private $iduser;
	private $totalcom;

	function __construct($idcom,$iduser,$totalcom){
		$this->idcom=$idcom;
		$this->iduser=$iduser;
		$this->totalcom=$totalcom;
	}
	
	function getIDCom(){
		return $this->idcom;
	}
	function getIDUser(){
		return $this->iduser;
	}
	function getTotalCom(){
		return $this->totalcom;
	}
	
	function setIDCom($idcom){
		$this->idcom=$idcom;
	}
	function setIDUser($iduser){
		$this->iduser;
	}
	function setTotalCom($totalcom)
	{
		$this->totalcom;
	}

	
}

?>