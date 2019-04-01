function verif1()
{
	cin=document.getElementById('cin').value;

	if( (isNaN(cin) || (cin.length)!=8 ) )
	{
		alert("CIN incorrect");
		return false;
	}
}

