<?php 
class categorie 
{
    private $id_cat;
    private $Categ;
function __construct($id_cat,$Categ)
{
    $this->id_cat=$id_cat;
    $this->Categ=$Categ;
}
function get_idcat(){return $this->id_cat;}
function get_Categ(){return $this->Categ;}


function set_idcat($id_cat){return $this->id_cat=$id_cat;}
function set_Categ($Categ){return $this->Categ=$Categ;}

}

?>