<?php session_start();?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"/>
</head>
<body>

<header><?php include_once "../vue/header.php" ?></header>
<?php
include_once "/opt/lampp/htdocs/www/aeroport/model/recherche_vol.php";
$req = fetch_vol($_POST['dep'] , $_POST['dest'] , $_POST['date_aller'] , ($_POST['type'] == 'retour')?$_POST['date_retour']:null);

if(!$req) 
	echo "Pas de resultat\n<a href='../'>relancer la recherche</a><br/>";
else
	include_once "../vue/recherche_vol.php";
?>
<aside><?php include_once "aside.php";?></aside>
<footer><?php include_once "../vue/footer.html";?></footer>
</body>
</html>
