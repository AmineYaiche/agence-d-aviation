function verif()
{
	if(document.f.mdp.value != document.f.mdp1.value)
	{	
		document.f.submit.disabled = true;
		document.getElementById('msg').display=visible;
	}
	else
	{
		document.f.submit.disabled = false;
		document.getElementById('msg').display=hidden;
	}

}



