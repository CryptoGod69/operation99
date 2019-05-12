function verif()
{
	name=document.getElementById('name').value;
	email=document.getElementById('email').value;
	subject=document.getElementById('subject').value;

	if(name.length=="")
	{
		alert("Nom doit être non vide");
	}

	if (email.indexOf("@")==-1) 
	{
		alert("Veuillez inclure @ dans l'adresse e-mail");
    }
    
    if(subject.length=="")
	  {
		alert("Nom doit être non vide");
		}
		else 
    alert ("Comment Posted");

}