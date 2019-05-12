<?PHP
class Produit{
	private $id;
    private $image;
    private $Descr;
    private $Categorie;
    private $statut;
	private $Nom;
	private $Prix;
    private $quantity;
	private $Code_Barre;
	private $Fournisseur;
	private $maxoc;
	function __construct($id,$image,$Descr,$Categorie,$statut,$Nom,$Prix,$quantity,$Code_Barre,$Fournisseur)
{
    $this->id=$id;
    $this->image=$image;
    $this->Descr=$Descr;
    $this->Categorie=$Categorie;
    $this->statut=$statut;
	$this->Nom=$Nom;
	$this->Prix=$Prix;
    $this->quantity=$quantity;
    $this->Code_Barre=$Code_Barre;
    $this->Fournisseur=$Fournisseur;
}
function get_id(){return $this->id;}
function get_image(){return $this->image;}
function get_Descr(){return $this->Descr;}
function get_Categorie(){return $this->Categorie;}
function get_statut(){return $this->statut;}
function get_Nom(){return $this->Nom;}
function get_Prix(){return $this->Prix;}
function get_quantity(){return $this->quantity;}
function get_CodeBarre(){return $this->Code_Barre;}
function get_Fournisseur(){return $this->Fournisseur;}
function get_maxoc(){return $this->maxoc;}


function set_id($id){return $this->id=$id;}
function set_image($image){return $this->image=$image;}
function set_Descr($Descr){return $this->Descr=$Descr;}
function set_Categorie($Categorie){return $this->Categorie=$Categorie;}
function set_statut($statut){return $this->statut=$statut;}
function set_Nom($Prix){return $this->Prix=$Prix;}
function set_quantity($quantity){return $this->quantity=$quantity;}
function set_CodeBarre($Code_Barre){return $this->Code_Barre=$Code_Barre;}
function set_Fournisseur($Fournisseur){return $this->Fournisseur=$Fournisseur;}


}

?>