<?PHP
class News{

	private $ID_News;
	private $Email_News;
	
	function __construct($Email_News){
	
		$this->ID_News=$ID_News;
    $this->Email_News=$Email_News;
	
		
	}


	function getID_News()
	{
		return $this->ID_News;
	}

	function getEmail_News()
	{
		return $this->Email_News;
	}


	function setID_News($ID_News)
	{
		$this->ID_News=$ID_News;
	}

	function setEmail_News($Email_News)
	{
		$this->Email_News=$Email_News;
	}

	

	
}

?>
