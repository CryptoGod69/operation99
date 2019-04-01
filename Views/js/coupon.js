function verifa()
{
    
    var selectElem = document.getElementById('Type_reduction');
    var DateD = document.getElementById('Date_Debutcoupon').value;
    var DateF = document.getElementById('Date_Fincoupon').value;
	var Valeur=document.forms["ajoutprod"]["Valeur"].value;
    var index = selectElem.selectedIndex;

    var dateD1 = new Date(DateD);
    var dateF1 = new Date(DateF);
    dateD1.setHours(0,0,0,0);
    dateF1.setHours(0,0,0,0);

    var todayDate = new Date();

if ((index==1) && (Valeur>100) || (valeur<0))
{
	alert ("Pourcentage doit entre entre 0 et 100 ");
	return false;
}
if (dateD1.value < todayDate.value ){

    alert (" Date invalide");
    return false;
}

}

