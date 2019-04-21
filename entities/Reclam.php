<?PHP
class Reclam
{ 
	private $ID_client;
	private $sujet;
	private $texte;
  private $date_reclam;
  private $etat;
  
	function __construct($ID_client,$sujet,$texte,$date_reclam,$etat){
		$this->ID_client=$ID_client;
		$this->sujet=$sujet;
		$this->texte=$texte;
		$this->date_reclam=$date_reclam;
		$this->etat=$etat;
	}
	//getter
	public function getID_client()
	{
	  return $this->ID_client;
	}
	public function getSujet()
	{
		return $this->sujet;
	}
	public function getTexte()
	{
		return $this->texte;
	}
 public function getDaterec()
  {
    return $this->date_reclam;
  }
  public function getEtat()
  {
    return $this->etat;
  }
  
	//setter
	public function setID_client($ID_client)
	{
		return $this->$ID_client;
	}
	public function setSujet($sujet)
	{
		return $this->$sujet;
	}
	public function setTexte($texte)
	{
		return $this->$texte;
	}
  public function setDaterec($date_reclam)
	{
		return $this->$date_reclam;
	}
public function setEtat($etat)
	{
		return $this->$etat;
	}
	
	
}

?>
