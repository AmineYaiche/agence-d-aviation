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
<!-- liste des vols-->
<?php
$req = (isset($_GET['page']))?fetch_all_vol($_GET['page']):fetch_all_vol(1);
if(!($n = mysql_num_rows($req)))
{
	echo "Pas de vol dans la base.<br/>";
	if(isset($_GET['page']))
	{
		$p = $_GET['page']-1;
		header("location:gestion_vol.php?page=$p");
	}
}
else
{
?>
<h2>Liste des vols</h2>
<form method="POST" action="../controller/gestion_vol.php">
<table border=1>
	<tr>
		<th><label><input type="checkbox" onClick="selectAll(1,<?php echo $n; ?>)"/>
		Selectionner</th>
		<th>Numero</th>
		<th>Avion</th>
		<th>Equipe</th>
		<th>Date de départ</th>
		<th>Depart</th>
		<th>Destination</th>
		<th>Date d'arrivée</th>
		<th>Place restant</th>
		<th>Valider</th>
		<th>Etat</th>
	</tr>
<?php
	for($i = 1 ; $row= mysql_fetch_assoc($req) ;$i++)
	{
		echo "<tr><td>";
		echo "<input type='checkbox' name='".$row['id_vol']."'id=$i /></td>";
		foreach($row as $elem)
			echo "<td>$elem</td>";
		echo "</tr>";
	}

?><table/>
	<input type="submit" name="supprimer" value="Suppprimer"/>
	<input type="submit" name="valider" value="Valider"/>

<?php
	$pres = (isset($_GET['page']) && $_GET['page']-1>=1)?$_GET['page']-1:1;
	$suiv = (isset($_GET['page']))?$_GET['page']+1:2;
	$page = (isset($_GET['page']))?$_GET['page']:1;
	echo "<a href='?page=$pres'> <= precedent</a> page ".$page." <a href='?page=$suiv'>suivant => </a>";
}?>
</form>
<!-- liste des avions-->
<!-------------------->
<!--ajout d'un vol-->

<h2>ajouter un vol</h2>

<form method="POST" action="../controller/add_vol.php">
	
	Numero : <input type="text" name="id" required/><br/>
	Identifiant de l'avion : <input type="text" name="avion" /><br/>
	Identifiant de l'equipe : <input type="text" name="equipe"/><br/>
	date depart : <input type="date" name="date_d" required /><br/>
	depart : <input type="text" name="dep" required /><br/>
	destination : <input type="text" name="dest" required /><br/>
	date d'arrivée : <input type="date" name="date_a" required /><br/>
	<input type="submit" value="Valider"/>
</form>
<!----------ajout d'un avion------------->
<aside><?php include_once "../controller/aside.php";?></aside>
<footer><?php include_once "../vue/footer.html";?></footer>
</body>
</html>
