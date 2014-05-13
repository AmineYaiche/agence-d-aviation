<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>welcom</title>
	<meta charset="UTF-8"/>
	<script src="../JS/formulaire.js"></script>
<?php include_once "../model/search.php";?>
</head>
<body>
<header><?php include_once "../vue/header.php";?></header>
<!-- liste des personnel-->
<?php
$req = fetch_personnel();
if(!($n = mysql_num_rows($req)))
	echo "Pas de personnel dans la base.<br/>";
else
{
?>
<h2>Liste des personnel</h2>
<form method="POST" action="../controller/delete_personnel.php">
<table border=1>
	<tr>
		<th><label><input type="checkbox" onClick="selectAll(<?php echo $n; ?>)"/>
		Selectionner</th>
		<th>Identifiant</th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Poste</th>
		<th>Numéro de téléphone</th>
		<th>E-mail</th>
		<th>Adresse</th>
	</tr>
<?php
	for($i = 1 ; $row= mysql_fetch_assoc($req) ;$i++)
	{
		echo "<tr><td>";
		echo "<input type='checkbox' name='".$row['id_personnel']."'id=$i /></td>";
		foreach($row as $elem)
			echo "<td>$elem</td>";
		echo "</tr>";
	}
}
?><table/>
	<input type="submit" value="Suppprimer"/>
</form>
<!-- liste des personnel-->
<!------------------------>
<!--ajout d'un personnel-->

<h2>ajouter un personnel</h2>

<form method="POST" action="../controller/add_personnel.php">
	
	nom : <input type="text" name="nom" required/><br/>
	prenom : <input type="text" name="prenom" required/><br/>
	poste : <select name="poste">
		<option value="pilote">pilote</option>
		<option value="copilote">copilote</option>
		<option value="stewart">stewart</option>
		<option value="hotesse">hotesse</option>
	</select><br/>

	tel : <input type="text" name="tel" /><br/>
	E-mail : <input type="email" name="email" /><br/>
	adresse : <input type="text" name="adresse"/><br/>
	<input type="submit" value="Valider"/>
</form>
<!--ajout d'un personnel-->

<aside><?php include_once "../controller/aside.php";?></aside>
<footer><?php include_once "../vue/footer.html";?></footer>
</body>
</html>
