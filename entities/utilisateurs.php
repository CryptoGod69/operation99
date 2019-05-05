<?PHP

class utilisateurs{
	
	private $NomPrenom;
	private $Email;
	private $DDN;
	private $PWD1;
	private $Tel;
	private $Type;
	
	function __construct($NomPrenom,$Email,$DDN,$Tel,$PWD1,$Type){
	
		$this->NomPrenom=$NomPrenom;
    $this->Email=$Email;
		$this->DDN=$DDN;
		$this->PWD1=$PWD1;
    $this->Tel=$Tel;
		$this->Type=$Type;

		
	}

	function getNomPrenom()
	{
		return $this->NomPrenom;
	}

	function getEmail()
	{
		return $this->Email;
	}

	function getDDN()
	{
		return $this->DDN;
	}

	function getPWD()
	{
		return $this->PWD1;
	}


	function getTel()
	{
		return $this->Tel;
  }
		
  function getType()
  {
		return $this->Type;
	}


	function setNomPrenom($NomPrenom)
	{
		$this->NomPrenom=$NomPrenom;
	}

	function setEmail($Email)
	{
		$this->Email=$Email;
	}

	function setDDN($DDN)
	{
		$this->DDN=$DDN;
	}

	function setPWD($PWD1)
	{
	$this->PWD1=$PWD1;
	}
	 
	function setTel($Tel)
	{
	$this->Tel=$Tel;
	}
	function setType($Type)
	{
	$this->Type=$Type;
	}



	
}

?>
