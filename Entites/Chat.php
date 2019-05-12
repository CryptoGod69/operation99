<?PHP
class Chat
{ 
	private $pseudo;
	private $message;

  
    function __construct($pseudo,$message){
		$this->pseudo=$pseudo;
		$this->message=$message;
	}
	//getter
	public function getPseudo()
	{
	  return $this->pseudo;
	}
	public function getMessage()
	{
		return $this->message;
	}
	
  
	//setter
	public function setPseudo($pseudo)
	{
		return $this->$pseudo;
	}
	public function setMessage($message)
	{
		return $this->$message;
	}
	
}

?>
