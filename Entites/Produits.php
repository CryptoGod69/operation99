<?php 
class produit_cat 
{
    private $id;
    private $nom;
    private $prix;
    private $code;
    private $Categorie;
    private $type;
    private $image;
    private $stock;
    private $nomf;
function __construct($id,$nom,$prix,$code,$Categorie,$type,$image,$stock,$nomf)
{
    $this->id=$id;
    $this->nom=$nom;
    $this->prix=$prix;
    $this->code=$code;
    $this->Categorie=$Categorie;
    $this->type=$type;
    $this->image=$image;
    $this->stock=$stock;
    $this->nomf=$nomf;
}
function get_id(){return $this->id;}
function get_nom(){return $this->nom;}
function get_prix(){return $this->prix;}
function get_code(){return $this->code;}
function get_Categorie(){return $this->Categorie;}
function get_type(){return $this->type;}
function get_image(){return $this->image;}
function get_stock(){return $this->stock;}
function get_nomf(){return $this->nomf;}


function set_id($id){return $this->id=$id;}
function set_nom($nom){return $this->nom=$nom;}
function set_prix($prix){return $this->prix=$prix;}
function set_code($code){return $this->code=$code;}
function set_Categorie($Categorie){return $this->Categorie=$Categorie;}
function set_type($type){return $this->type=$type;}
function set_image($image){return $this->image=$image;}
function set_stock($stock){return $this->stock=$stock;}
function set_nomf($nomf){return $this->nomf=$nomf;}


}

?>