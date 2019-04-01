function verifa()
{
	var nomprod=document.forms["ajoutprod"]["nomprod"].value;
	var statutprod=document.forms["ajoutprod"]["statutprod"].value;
	var descprod=document.forms["ajoutprod"]["descprod"].value;
var ind=document.forms["ajoutprod"]["Categorie"].selectedIndex;
	if(nomprod.length==0)
	{
        alert("nomprod doit être non vide");
       return false;
	}
	if(statutprod.length==0)
	{
        alert("statutprod doit être non vide");
        return false;
	}
	if(descprod.length==0)
	{
        alert("descprod doit être non vide");
	return false;

    }
    if( document.getElementById("image").files.length == 0 ){
	alert("veuillez sélectionner une image");
	return false;
    }
if ((statutprod.localeCompare("Disponible")!=0) && (statutprod.localeCompare("Non Disponible")!=0 ))
{
	alert("Statut Doit etre Soit 'Disponible' ou 'Non Disponible'");
	return false;
}

if (nomprod.indexOf(' ')>0)
{
	alert("Le nom doit contenir aucune espace ");
	return false;	
}
if (ind==0)
{
	alert ("Veuillez choisir une Categorie");
	return false;
}

}

