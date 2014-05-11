<?php 
session_start();?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"/>
</head>
<body>
<?php
include "/opt/lampp/htdocs/www/aeroport/model/inscription.php";
include "/opt/lampp/htdocs/www/aeroport/model/search.php";

if( $_SESSION['aleat_nbr'] == $_POST['captcha'])
{
	if(login_exist("Utilisateur" , $_POST["pseudo"]))
			echo "nom d'utilisateur existe déjà";
	else
	{
		insert_user($_POST);
		echo "inscription terminer avec succes.";
	}
}
else
	echo "vous n'avez pas entrer le bon code";



header("refresh:3;url=/www/aeroport/vue/inscription.php");
?>
</body>
</html>
