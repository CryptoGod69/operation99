function verif()
{
	cin=document.getElementById('cin').value;
	nom=document.getElementById('nom').value;
	prenom=document.getElementById('prenom').value;
	numPermis=document.getElementById('numPermis').value;
	rib=document.getElementById('rib').value;
	mail=document.getElementById('mail').value;	
	numTel=document.getElementById('numTel').value;
	mdp=document.getElementById('mdp').value;

	if( (isNaN(cin) || (cin.length)!=8 ) )
	{
		alert("CIN incorrect");
		return false;
	}

	if(nom.length=="")
	{
		alert("Nom doit être non vide")
		return false;
	}

	if(prenom.length=="")
	{
		alert("Prenom doit être non vide")
		return false;
	}

	if( (isNaN(numPermis) || (numPermis.length)!=8 ) )
	{
		alert("Numero permis incorrect");
		return false;
	}

	if( (isNaN(rib) || (rib.length)!=20 ) )
	{
		alert("RIB incorrect");
		return false;
	}

	if( (isNaN(numTel) || (numTel.length)!=8 ) )
	{
		alert("Numero de telephone incorrect");
		return false;
	}


	if (mail.indexOf("@")==-1) 
	{
		alert("Veuillez inclure @ dans l'adresse e-mail");
		return false;
	}

	if(mdp.length=="")
	{
		alert("Le mot de passe doit être non vide")
		return false;
	}

}