function verifcateg()
{
    var Categ=document.forms["ajoutcateg"]["Categ"].value;

    if(Categ.length==0)
	{
        alert("Categ doit être non vide");
       return false;
    }
    if (Categ.indexOf(' ')>0)
    {
        alert("Le nom du categorie doit contenir aucune espace ");
	return false;	
    }
}