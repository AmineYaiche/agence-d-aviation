function verif()
{
	if(document.f.pwd.value != document.f.pwd1.value)
	{
		document.f.submit.disabled = true;
		document.getElementById('msg').display=visible;
	}
	else
	{
		document.f.submit.disabled = false;
		document.getElementById('msg').display=hidden;
	}
	
	/*
	
	
	
	
	<label>login : </label><input type="text" name="login" maxlength="10"/></br>
	<label>mot de passe : </label><input type="password" name="pwd" maxlength="20"/></br>
	<label>confirmer mot de passe</label><input type="password" name="pwd1" maxlength="20"/></br>
	<label>Nom</label><input type="text" name="nom" maxlength="10"/></br>
	<label>Prenom</label><input type="text" name="prenom" maxlength="10"/></br>
	<label>E-mail</label><input type="email" name="email" maxlength="50"/></br>
	<img src="verif_code_gen.php"/><br/>
	<input type="submit" value="inscription"/>
	*/
}



