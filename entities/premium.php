<?PHP

class premium{

	private $CVCode;
    private $CodeNum;
    private $DDE;
	
	function __construct($CVCode,$CodeNum,$DDE){
	
		$this->CVCode=$CVCode;
    $this->CodeNum=$CodeNum;
    $this->DDE=$DDE
	
		
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