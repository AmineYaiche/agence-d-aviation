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

if(login_exist("Utilisateur" , $_POST["pseudo"]))
	echo "nom d'utilisateur existe déjà";
else
{
	insert_user($_POST);
	echo "inscription terminer avec succes.";
}


header("refresh:3;url=/www/aeroport/admin/gestion_client.php");
?>
</body>
</html>
