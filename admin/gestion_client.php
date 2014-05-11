<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>
<?php
include_once "../vue/header.php";
include_once "../model/search.php";

$req = fetch_all_user();

if(! mysql_num_rows($req) )
	echo "Pas d'utilisateur dans la base";
else
{
?>
	<table border=1>
	<tr>
	<th>Selectionner</th>
	<th>Pseudo</th>
	<th>Nom</th>
	<th><Prenom</th>
	<th>E-mail</th>
	</tr>
<?php
	while( $row = mysql_fetch_row($req) )
			echo "<tr><td>
			<input type='checkbox' name='$row[0]'/>
			</td>
			<td>$row[0]</td>
			<td>$row[2]</td>
			<td>$row[3]</td>
			<td>$row[4]</td>
			</tr>";?>
	</table>
<?php
}

echo "<aside>"; include_once "../controller/aside.php"; echo "</aside>";
echo "<footer>"; include_once "../vue/footer.html"; echo "</footer>";
?>
</body>
</html>
