<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<meta charset="UTF-8"/>
</head>
<body>
<header><?php include_once "/opt/lampp/htdocs/www/aeroport/vue/header.php"?></header>
<?php
include_once "../model/recherche_vol.php";


$vol = vol_en_cours();

if(!mysql_num_rows($vol))
	echo "Pas de vol en cours<br/>";
else
{?>

<table border=1>	
<tr>
	<th>N° Vol</th>
	<th>depart</th>
	<th>arrivé</th>
	<th>temps restant</th>
	<th>etat</th>
</tr>
<?php
	while( $row = mysql_fetch_row($vol))//liste des vols en cours
	{
		echo "<tr>";
		echo "<td>".$row[0]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[9]."</td>";
		echo "</tr>";
	}
	
}
?>
</table>

<div id="description">
	<table border=1>
		<tr><th>Description</th><tr>
		<tr><td>en programme</td></tr>
		<tr><td>decollage</td></tr>
		<tr><td>atterrissage</td></tr>
		<tr><td>retard</td></tr>
	</table>
<!--il manque les icons-->
</div>


<aside><?php include_once "/opt/lampp/htdocs/www/aeroport/controller/aside.php"?></aside>
<footer><?php include_once "/opt/lampp/htdocs/www/aeroport/vue/footer.html"?></footer>
</body>
</html>
