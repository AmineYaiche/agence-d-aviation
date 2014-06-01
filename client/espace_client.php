<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<meta charset="UTF-8" />
	<script src="../JS/formulaire.js" type="text/javascript"></script>
</head>
<body>
<header><?php include_once "../vue/header.php";?></header>

<h1>Espace Client</h1>
<h2>Modifier les information</h2>

<form method="POST" action="../controller/espace_client.php">
Nom : <input type="text" name="nom"/><br/>
Prenom : <input type="text" name="prenom" /><br/>
Ancien mot de passe : <input type="password" name="mdp" /><br/>
Nouveau mot de passe : <input type="password" name="newMdp1" onBlur="f()" /><br/>
Nouveau mot de passe : <input type="password" name="newMdp2" /><br/>
Nouveau E-mail : <input type="email" name="email"/><br/>
<input type="submit" value="Valider"/>





<aside><?php include_once "../controller/aside.php";?></aside>
<footer><?php include_once "../vue/footer.html";?></footer/>
</body>

</html>
