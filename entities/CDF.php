<?PHP

class CDF{
	private $IDCDF;
	private $NomFedi;

	
	function __construct($IDCDF,$NomFedi){
		$this->IDCDF=$IDCDF;
		$this->NomFedi=$NomFedi;
   
    
	
		
	}


	function getIDCDF()
	{
		return $this->IDCDF;
	}
	function getNomFedi()
	{
		return $this->NomFedi;
	}

	function setIDP($IDCDF)
	{
		$this->IDCDF=$IDCDF;
	}
	function setNomFedi($NomFedi)
	{
		$this->NomFedi=$NomFedi;
	}


	

	
}

?>