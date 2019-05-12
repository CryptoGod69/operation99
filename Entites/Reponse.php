<?PHP
class Reponse
{ 
	private $ID_client;
	private $ref_reclam;
	private $reponse;
  
	function __construct($ref_reclam,$ID_client,$reponse){
        $this->ref_reclam=$ref_reclam;
        $this->ID_client=$ID_client;
		$this->reponse=$reponse;
	}
	//getter
	public function getID_client()
	{
	  return $this->ID_client;
	}
	public function getRefReclam()
	{
		return $this->ref_reclam;
	}
	public function getReponse()
	{
		return $this->reponse;
	}
	//setter
	public function setID_client($ID_client)
	{
		return $this->$ID_client;
	}
	public function setRefReclam($ref_reclam)
	{
		return $this->$ref_reclam;
	}
	public function setReponse($reponse)
	{
		return $this->$reponse;
	}
 
	
	
}

?>
