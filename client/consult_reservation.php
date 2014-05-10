<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8" />
</head>
<body>
<header><?php include_once "../vue/header.php"; ?></header>
<?php
include_once "../model/search.php";

if( !isset($_SESSION['login']))
	echo "Espace reserver pour les client\n";
else
{
	$reservation = fetch_reservation($_SESSION['login']);

	if(!$reservation)
		echo "Vous n'avez pas de reservation\n";
	else
	{	
?>
		<table border=1>
		<tr>
		<th>N° Vol</th>
		<th>depart</th>
		<th>arrivé</th>
		<th>date depart</th>
		<th>date arrivée</th>
		<th>nombre de place</th>
		<th>etat reservation</th>

		</tr>
<?php
		foreach($reservation as $row)
		{
			echo "<td>".$row[0]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[7]."</td><td>".$row[10]."</td>";
			echo "<td>".$row[2]."</td><td>".$row[12]."</td>";// il manque l'incon de telechargement du fichier PDF.	
			
			
	}
		echo "</tr></table>";



	}	
}

?>
<aside> <?php include_once "../controller/aside.php" ?> </aside>
<footer> <?php include_once "../vue/footer.html"; ?></footer>
</body>
</html>
