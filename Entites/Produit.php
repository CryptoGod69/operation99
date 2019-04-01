<?php 
class produit 
{
    private $id;
    private $image;
    private $Descr;
    private $Categorie;
    private $statut;
    private $Nom;
function __construct($id,$image,$Descr,$Categorie,$statut,$Nom)
{
    $this->id=$id;
    $this->image=$image;
    $this->Descr=$Descr;
    $this->Categorie=$Categorie;
    $this->statut=$statut;
    $this->Nom=$Nom;
}
function get_id(){return $this->id;}
function get_image(){return $this->image;}
function get_Descr(){return $this->Descr;}
function get_Categorie(){return $this->Categorie;}
function get_statut(){return $this->statut;}
function get_Nom(){return $this->Nom;}


function set_id($id){return $this->id=$id;}
function set_image($image){return $this->image=$image;}
function set_Descr($Descr){return $this->Descr=$Descr;}
function set_Categorie($Categorie){return $this->Categorie=$Categorie;}
function set_statut($statut){return $this->statut=$statut;}
function set_Nom($Nom){return $this->Nom=$Nom;}


}

?>