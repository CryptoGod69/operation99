

function verifa()
{  
    ID_client=document.getElementById('ID_client').value;
	ID_produit=document.getElementById('ID_produit').value;
	Ref_Commande=document.getElementById('Ref_Commande').value;
	Ref_Reclam=document.getElementById('Ref_Reclam').value; 

	if(ID_client.length!=10)
	{
		alert("votre ID doit avoir 10 caractères")
	}
	if(ID_produit.length==0)
	{
		alert(" l'id doit être non vide")
	}
	if(Ref_Commande.length==0)
	{
		alert("la reference doit être non vide")
	}
	if(Ref_Reclam.length==0)
	{
		alert(" la reference doit être non vide")
	}


	}
	function verif()
{  
	/*var dateNow= new Date(), 
       strSaisie= date_reclam.value;
       dateJour;
       dateSaisie;
	dateJour = new Date(dateNow.getFullYear(), dateNow.getMonth(), dateNow.getDate());
	strSaisie = strSaisie.replace(/-/g,"");
	dateSaisie = new Date(strSaisie.substr(0,4), strSaisie.substr(4,2)-1, strSaisie.substr(6,2));*/
    ID_client=document.getElementById('ID_client').value;
	sujet=document.getElementById('sujet').value;
	texte=document.getElementById('texte').value;
	date_reclam=document.getElementById('date_reclam').value; 
	etat=document.getElementById('etat').value;

	if(ID_client.length!=10)
	{
		alert("votre ID doit avoir 10 caractères")
	}
	if(sujet.length==0)
	{
		alert(" le sujet doit être non vide")
	}
	if(texte.length==0)
	{
		alert("le texte doit être non vide")
	}
	if(date_reclam.length==0)
	{
		alert(" vous avez depassez la date")
	}
	if(etat.length==0)
	{
		alert(" etat doit être non vide")
	}


	}
	

