<?php 
include "/opt/lampp/htdocs/www/aeroport/model/recherche_vol.php";
$req = fetch_vol($_POST['dep'] , $_POST['dest'] , $_POST['date_aller'] , ($_POST['type'] == 'retour')?$_POST['date_retour']:null);

if(!$req) 
	echo "Pas de resultat\n<a href='../'>relancer la recherche</a>";
else
	include "../vue/recherche_vol.php";


