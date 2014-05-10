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
include_once "/opt/lampp/htdocs/www/aeroport/model/recherche_vol.php";


$vol = vol_en_cours();


if(!$vol)
		echo "Pas de vol en cours\n";
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
	while( $row = mysql_fetch_row($vol))
	{
		echo "<tr>";
		echo "<td>".$row[0]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[9]."</td>";
		echo "</tr>";
		print_r($vol);
	}

}
?>




</table>



<aside><?php include_once "/opt/lampp/htdocs/www/aeroport/controller/aside.php"?></aside>
<footer><?php include_once "/opt/lampp/htdocs/www/aeroport/vue/footer.html"?></footer>
</body>
</html>
