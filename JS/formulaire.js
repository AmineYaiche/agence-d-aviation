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
function selectAll(form)//permet de selectionner tout les checkbox d'un formulatire
{alert();
	var elements = form.getElementsByTagName('input');
	for(var i =0; i < elements.length ; i++)
		if(elements[i].type == "checkbox" )
			elements[i].checked = form.all.checked;

}

