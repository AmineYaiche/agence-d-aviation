<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="/www/aeroport/JS/formulaire.js" type="text/javascript" ></script>
</head>
<body>
<?php include_once "header.php";?>
<form name="f" action="/www/aeroport/model/inscription.php" method="post" onSubmit="verif_form();">
	<label>login : </label><input type="text" name="login" maxlength="10" required/></br>
	<label>mot de passe : </label><input type="password" name="pwd" maxlength="20" required onBlur="verif();"	/></br>
	<label>confirmer mot de passe</label><input type="password" name="pwd1" maxlength="20" required onBlur="verif();"/></br>
	<label>Nom</label><input type="text" name="nom" maxlength="10" required/></br>
	<label>Prenom</label><input type="text" name="prenom" maxlength="10" required/></br>
	<label>E-mail</label><input type="email" name="email" maxlength="50" required/></br>
	<img src="verif_code_gen.php"/><br/>
	<input type="submit" value="inscription" name="submit"/>
	<span id="msg" >mot de passe ne sont pas egaux</span>
	

<aside> <?php include_once "../controller/aside.php" ?> </aside>

<footer> <?php include_once "footer.html"; ?></footer>
	
	
</form>
</body>
</html>
