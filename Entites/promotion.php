<?php 
class promotion 
{
    private $id;
    private $categorie;
    private $maxoc;
    private $valeur;
function __construct($id,$Categ,$maxoc,$valeur)
{
    $this->id=$id;
    $this->categorie=$categorie;
    $this->maxoc=$maxoc;
    $this->valeur=$valeur;
}
function get_idcat(){return $this->id;}
function get_categorie(){return $this->categorie;}
function get_maxoc(){return $this->maxoc;}
function get_valeur(){return $this->valeur;}



function set_id($id){return $this->id=$id;}
function set_categorie($categorie){return $this->categorie=$categorie;}
function set_maxoc($maxoc){return $this->maxoc=$maxoc;}
function set_valeur($valeur){return $this->valeur=$valeur;}

}

?>