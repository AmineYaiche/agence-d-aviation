<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<meta charset="UTF-8"/>
	<script src="../JS/formulaire.js"></script>
</head>
<body>
<?php
include_once "../vue/header.php";
include_once "../model/search.php";

$req = (isset($_GET['page']))?fetch_users($_GET['page']):fetch_users(1);
if(! ($n = mysql_num_rows($req)) )
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


<form name="f" action="../controller/delete_user.php" method="POST" onSubmit="return confirm('voulez-vous vraiment supprimer les utilisateur séléctionner?');">
<table border=1>
	<tr>
		<th><label><input type="checkbox" onClick="selectAll(<?php echo $n ?>)"/>
		Selectionner</label></th>
		<th>Pseudo</th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>E-mail</th>
	</tr>

<?php
	
	for($i=1 ;$row = mysql_fetch_row($req) ;$i++)
		echo "<tr><td>
			<input type='checkbox' name='$row[0]' id=$i />
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
	$page = (isset($_GET['page']))?$_GET['page']:1;
	echo "<a href='?page=$pres'> <= precedent</a> page ". $page." <a href='?page=$suiv'>suivant =></a>";?>
</form>
<?php
}
?>
<h2>Ajouter un utilisateur</h2>
<form name="add_user" method="POST" action="../controller/add_user.php">
	<label for=pseudo>pseudo : </label><input type=text name="pseudo" required/><br/>
	<label for=name>nom : </label><input type="text" name="nom" required><br/>
	<label for=prenom>prenom : </label><input type="text" name="prenom" required/><br/>
	<label for=mdp>mot de passe : </label><input type="password" name="mdp" required/><br/>
	<label for=mdp1>mot de passe : </label><input type="password" name="mdp1" required/><br/>
	<label for=email>email : </label><input type="text" name="email" required/><br/>
	<input type="submit" value="Valider"/>
</form>
<?php
echo "<aside>"; include_once "../controller/aside.php"; echo "</aside>";
echo "<footer>"; include_once "../vue/footer.html"; echo "</footer>";
?>
</body>
</html>
