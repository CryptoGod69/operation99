<?php 
class coupon 
{
    private $id_coupon;
    private $code_coupon;
    private $Type_reduction;
    private $Valeur;
    private $Date_Debutcoupon;
    private $Date_Fincoupon;
function __construct($id_coupon,$code_coupon,$Type_reduction,$Valeur,$Date_Debutcoupon,$Date_Fincoupon)
{
    $this->id_coupon=$id_coupon;
    $this->code_coupon=$code_coupon;
    $this->Type_reduction=$Type_reduction;
    $this->Valeur=$Valeur;
    $this->Date_Debutcoupon=$Date_Debutcoupon;
    $this->Date_Fincoupon=$Date_Fincoupon;
}
function get_idcoupon(){return $this->id_coupon;}
function get_codecoupon(){return $this->code_coupon;}
function get_Typereduction(){return $this->Type_reduction;}
function get_Valeur(){return $this->Valeur;}
function get_DateDebutcoupon(){return $this->Date_Debutcoupon;}
function get_DateFincoupon(){return $this->Date_Fincoupon;}


function set_id_coupon($id_coupon){return $this->id_coupon=$id_coupon;}
function set_code_coupon($code_coupon){return $this->code_coupon=$code_coupon;}
function set_Type_reduction($Type_reduction){return $this->Type_reduction=$Type_reduction;}
function set_Valeur($Valeur){return $this->Valeur=$Valeur;}
function set_Date_Debut_coupon($Date_Debut_coupon){return $this->Date_Debut_coupon=$Date_Debut_coupon;}
function set_Date_Fin_coupon($Date_Fin_coupon){return $this->Date_Fin_coupon=$Date_Fin_coupon;}


}

?>