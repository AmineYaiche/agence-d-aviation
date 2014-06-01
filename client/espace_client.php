<?php session_start();
if(!isset($_SESSION['login'])) header("location:../");
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<meta charset="UTF-8" />
	<script src="../JS/formulaire.js" type="text/javascript"></script>
</head>
<body>
<header><?php include_once "../vue/header.php";?></header>
<?php
if($_SESSION['admin'] == "non" || !isset($_GET["login"]))
	$login = $_SESSION["login"];
else
	$login = $_GET["login"];
?>
<h1>Espace Client de <?php echo $login;?></h1>
<h2>Modifier les information</h2>

<form method="POST" action="../controller/espace_client.php">
Nom : <br/><input type="text" name="nom"/><br/>
Prenom : <br/><input type="text" name="prenom" /><br/>
mot de passe actuel:*<br/> <input type="password" name="mdp" required/><br/>
Nouveau mot de passe :<br/> <input type="password" name="newMdp1" /><br/>
Nouveau mot de passe : <br/><input type="password" name="newMdp2"/><br/>
Nouveau E-mail : <br/><input type="email" name="email"/><br/>
<input type="submit" value="Valider"/>
<br/>
PS: les champs non rempli serons conserver.
<br/>



<aside><?php include_once "../controller/aside.php";?></aside>
<footer><?php include_once "../vue/footer.html";?></footer/>
</body>

</html>
