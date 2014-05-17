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
<!-- liste des avion-->
<?php

$req = (isset($_GET['page']))?fetch_avion($_GET['page']):fetch_avion(1);
if(!($n = mysql_num_rows($req)))
{
	echo "Pas d'avion dans la base.<br/>";
	if(isset($_GET['page']))
	{
		$p = $_GET['page']-1;
		header("location:gestion_avion.php?page=$p");
	}
}
else
{
?>
<h2>Liste des avions</h2>
<form method="POST" action="../controller/delete_avion.php">
<table border=1>
	<tr>
		<th><label><input type="checkbox" onClick="selectAll(1,<?php echo $n; ?>)"/>
		Selectionner</th>
		<th>Identifiant</th>
		<th>Capacité</th>
		<th>N° vol en cours</th>
	</tr>
<?php
	for($i = 1 ; $row= mysql_fetch_assoc($req) ;$i++)
	{
		echo "<tr><td>";
		echo "<input type='checkbox' name='".$row['id_av']."'id=$i /></td>";
		foreach($row as $elem)
			echo "<td>$elem</td>";
		echo "</tr>";
	}

?><table/>
	<input type="submit" value="Suppprimer"/>
<?php
	$pres = (isset($_GET['page']) && $_GET['page']-1>=1)?$_GET['page']-1:1;
	$suiv = (isset($_GET['page']))?$_GET['page']+1:2;
	$page = (isset($_GET['page']))?$_GET['page']:1;
	echo "<a href='?page=$pres'> <= precedent</a> page ".$page." <a href='?page=$suiv'>suivant => </a>";
}?>
</form>
<!-- liste des avions-->
<!-------------------->
<!--ajout d'un avion-->

<h2>ajouter un avion</h2>

<form method="POST" action="../controller/add_plane.php">
	
	Identifiant : <input type="text" name="id" required/><br/>
	Capacité : <input type="text" name="cap" required/><br/>
	vol en cours : <input type="text" name="vol_courant"/><!-- il faut remplacer ça par un menu select -->
	<br/>
	<input type="submit" value="Valider"/>
</form>
<!----------ajout d'un avion------------->
<!------------------------------------ -->
<!--liste des vol fait par un avion------><?php /*
<h2>Liste des vols effectué par l'avion : <?php //id avion ?></h2>
<form name="list_equip" action="../controller/delete_equip.php" method="POST">
<?php
$req = (isset($_GET['page_eq']))?fetch_equip($_GET['page_eq']):fetch_equip(0);
if(!($n = mysql_num_rows($req)))
{
	echo "Pas d'equipe dans la base.<br/>";
	if(isset($_GET['page_eq']) && $_GET['page_eq'] > 1)
	{
		$page = $_GET['page_eq']-1;
		header("location:gestion_equip.php?page_eq=$page");
	}
}
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
<?php
	$pres = (isset($_GET['page_eq']) && $_GET['page_eq']-1>=1)?$_GET['page_eq']-1:1;
	$suiv = (isset($_GET['page_eq']))?$_GET['page_eq']+1:2;
	$page = (isset($_GET['page_eq']))?$_GET['page_eq']:1;
	echo "<a href='?page_eq=$pres'> <= precedent</a> page ".$page." <a href='?page_eq=$suiv'>suivant => </a>";
}?></form>

<!--liste des vol fait par un avion------>
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

<!--ajout d'une equipe  --> */?>
<aside><?php include_once "../controller/aside.php";?></aside>
<footer><?php include_once "../vue/footer.html";?></footer>
</body>
</html>
