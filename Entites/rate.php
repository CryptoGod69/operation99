<?php 
class rate 
{
    private $ratestars;
    private $sess;
    private $nomprod;
   
function __construct($ratestars,$sess,$nomprod)
{
    $this->ratestars=$ratestars;
    $this->sess=$sess;
    $this->nomprod=$nomprod;
   
}
function get_ratestars(){return $this->ratestars;}
function get_sess(){return $this->sess;}
function get_nomprod(){return $this->nomprod;}


function set_ratestars($ratestars){return $this->ratestars=$ratestars;}
function set_sess($sess){return $this->sess=$sess;}
function set_nomprod($nomprod){return $this->nomprod=$nomprod;}
}

?>