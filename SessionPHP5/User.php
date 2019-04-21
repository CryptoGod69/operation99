<?php 
include 'dbconfig.php';
class User{
	private $login;
    private $pwd;
	private $role;
	private $nomprenom;
	private $email;
	private $tel;
	private $datedenaissance;
	private $type;
	private $date;
    public $conn;
	
	public function __construct($login,$pwd,$conn,$nomprenom,$email,$tel,$datedenaissance,$type,$date)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		$this->nomprenom=$nomprenom;
		$this->email=$email;
		$this->tel=$tel;
		$this->datedenaissance=$datedenaissance;
		$this->type=$type;
		$this->date=$date;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}
	function getnomprenom()
	{
		return $this->nomprenom;
	}
	function gettel()
	{
		return $this->tel;
	}
    function getmail()
	{
		return $this->email;
		
	}
	 function getdatenaiss()
	{
		return $this->datedenaissance;
		
	}
	function gettype()
	{
		return $this->type;
		
	}
	 function getdate()
	{
		return $this->date;
		
	}


	public static function Logedin($login,$pwd)
	{
		$c=new Database();
		$db=$c->connexion();	
		
    $req = $db->prepare('SELECT * FROM users WHERE id ="'.$login.'" AND mdp ="'.$pwd.'"');
    var_dump($req);
    $req->execute();
	$resultat=$req->fetch();
	return $resultat;

	}

	}
	
	

	?>