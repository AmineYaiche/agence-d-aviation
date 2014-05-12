<php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>
<?php
include_once "../vue/header.php";
include_once "../model/search.php";

$req = (isset($_GET['page']))?fetch_users($_GET['page']):fetch_users(1);
if(! mysql_num_rows($req) )
{
	echo "Pas d'utilisateur dans la base";
	if(isset($_GET['page']) && $_GET['page'] >1)
	{
		$page = $_GET['page']-1;
		header("location:gestion_client.php?page=$page");
	}
}
else
{
?>
<h2>liste des utilisateur</h2>


<form action="../controller/delete_user.php" method="POST">
<table border=1>
	<tr>
		<th>Selectionner</th>
		<th>Pseudo</th>
		<th>Nom</th>
		<th>Prenom</th>
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
	<input type="submit" value="Supprimer"><!-- il faut verifier si il a coché au moin un utilisateur a supprimer-->
	<?php 
	$pres = ( isset($_GET['page']) && $_GET['page']-1 >= 1)?$_GET['page']-1 :1;
	$suiv = (isset($_GET['page']))?$_GET['page'] +1 : 2;
	// il faut envisager une solution pour empéché une débordement de page.
	echo "<a href='?page=$pres'> <= precedent</a> page ". $_GET['page']." <a href='?page=$suiv'>suivant =></a>";?>
</form>
<?php
}

echo "<aside>"; include_once "../controller/aside.php"; echo "</aside>";
echo "<footer>"; include_once "../vue/footer.html"; echo "</footer>";
?>
</body>
</html>
