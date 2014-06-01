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
var checked = true;
function selectAll(j,n)
{
	for(var i =j; i <= n ; i++)
	{
		var elem = document.getElementById(i);
		elem.checked = checked;
	}

	checked = !checked;
}

function f()
{
	alert();	
}
