<?php 
class rate 
{
    private $ratestars;
    private $sess;
   
function __construct($ratestars,$sess)
{
    $this->ratestars=$ratestars;
    $this->sess=$sess;
   
}
function get_ratestars(){return $this->ratestars;}
function get_sess(){return $this->sess;}



function set_ratestars($ratestars){return $this->ratestars=$ratestars;}
function set_sess($sess){return $this->sess=$sess;}
}

?>