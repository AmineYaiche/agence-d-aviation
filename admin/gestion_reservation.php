<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<meta charset="UTF-8"/>
	<script src="../JS/formulaire.js"></script>
<?php include_once "../model/search.php";?>
</head>
<body>
<header><?php include_once "../vue/header.php";?></header>
<!-- liste des reservations-->
<?php
$req = (isset($_GET['page']))?fetch_reserv($_GET['page']):fetch_reserv(1);
if(!($n = mysql_num_rows($req)))
{
	echo "Pas de reservation dans la base.<br/>";
	if(isset($_GET['page']))
	{
		$p = $_GET['page']-1;
		header("location:gestion_reservation.php?page=$p");
	}
}
else
{
?>
<h2>Liste des reservations</h2>
<form method="POST" action="../controller/gestion_reservation.php">
<table border=1>
	<tr>
		<th><label><input type="checkbox" onClick="selectAll(1,<?php echo $n; ?>)"/>
		Selectionner</th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Numero Vol</th>
		<th>Date de départ</th>
		<th>Depart</th>
		<th>Destination</th>
		<th>Place restant</th>
	</tr>
<?php
	for($i = 1 ; $row= mysql_fetch_assoc($req) ;$i++)
	{
		echo "<tr><td>";

		echo "<input type='checkbox' name='".$row['id_vol']."_".$row['login']."'id=$i /></td>";
		unset($row['login']);
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
<!-- liste des reservations-->
<aside><?php include_once "../controller/aside.php";?></aside>
<footer><?php include_once "../vue/footer.html";?></footer>
</body>
</html>
