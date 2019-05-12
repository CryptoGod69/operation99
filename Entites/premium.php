<?PHP

class premium{
	private $IDP;
	private $CVCode;
    private $CodeNum;
    private $DDE;
	
	function __construct($IDP,$CVCode,$CodeNum,$DDE){
		$this->IDP=$IDP;
		$this->CVCode=$CVCode;
    $this->CodeNum=$CodeNum;
    $this->DDE=$DDE;
	
		
	}


	function getIDP()
	{
		return $this->IDP;
	}
	function getCVCode()
	{
		return $this->CVCode;
	}

	function getCodeNum()
	{
		return $this->CodeNum;
	}
	function getDDE()
	{
		return $this->DDE;
	}

	function setIDP($IDP)
	{
		$this->IDP=$IDP;
	}
	function setCVCode($CVCode)
	{
		$this->CVCode=$CVCode;
	}

	function setCodeNum($CodeNum)
	{
		$this->CodeNum=$CodeNum;
	}
    function setDDE($DDE)
	{
		$this->DDE=$DDE;
	}
	

	
}

?>