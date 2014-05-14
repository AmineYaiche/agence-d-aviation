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
		<th><label><input type="checkbox" onClick="selectAll(1,<?php echo $n; ?>)"/>
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
		echo "<input type='checkbox' name='".$row['id_p']."'id=$i /></td>";
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
<!------------------------>
<!--liste des equipe------>
<h2>Liste des equipages</h2>
<form name="list_equip" action="../controller/delete_equip.php" method="POST">
<?php
$req = fetch_equip();
if(!($n = mysql_num_rows($req)))
	echo "Pas d'equipe dans la base.<br/>";
else
{
?>
<table border=1 >
<tr>
	<th>
	<input type="checkbox" name="all" onClick='selectAll(11,<?php echo $n+10;?>)'/>
	Selectionner</th>
	<th>id equipage</th>
	<th>pilote</th>
	<th>copilote</th>
	<th>stewart</th>
	<th>hotesse</th>
</tr>
<?php
	for($i = 11 ; $row= mysql_fetch_assoc($req) ;$i++)
	{
		echo "<tr><td>";
		echo "<input type='checkbox' name='".$row['id_eq']."'id=$i /></td>";
		echo "<td>".$row['id_eq']."</td>";
		unset($row['id_eq']);
		foreach($row as $elem)
			echo "<td>".get_name($elem)."</td>";
		echo "</tr>";
	}

?>
</table>
<input type="submit" value="Supprimer"/>
</form><?php 
}?>
<!--liste des equipe------>
<!------------------------>
<!--ajout d'une equipe  -->
<h2>Ajout d'un equipe</h2>
<form method="POST" action="../controller/add_equip.php">

	Pilote : 
	<select name="pilote">
	<?php 
		$req = getPersonnels("pilote");
		while($row = mysql_fetch_assoc($req))
		{
			echo"<option value='".$row['id_p']."'>".$row['id_p'];
			echo "- ".$row['nom']." ".$row['prenom'];
		}	
	?>
	</select>
	Copilote : 
	<select name="copilote">
	<?php 
		$req = getPersonnels("copilote");
		while($row = mysql_fetch_assoc($req))
		{
			echo"<option value='".$row['id_p']."'>".$row['id_p'];
			echo "- ".$row['nom']." ".$row['prenom'];
		}	
	?>
	</select>
	stewart : 
	<select name="stewart">
	<?php 
		$req = getPersonnels("stewart");
		while($row = mysql_fetch_assoc($req))
		{
			echo"<option value='".$row['id_p']."'>".$row['id_p'];
			echo "- ".$row['nom']." ".$row['prenom'];
		}	
	?>
	</select>
	hotesse : 
	<select name="hotesse">
	<?php 
		$req = getPersonnels("hotesse");
		while($row = mysql_fetch_assoc($req))
		{
			echo"<option value='".$row['id_p']."'>".$row['id_p'];
			echo "- ".$row['nom']." ".$row['prenom'];
		}	
	?>
	</select>
	<input type="submit" value="valider"/>
</form>

<!--ajout d'une equipe  -->
<aside><?php include_once "../controller/aside.php";?></aside>
<footer><?php include_once "../vue/footer.html";?></footer>
</body>
</html>
