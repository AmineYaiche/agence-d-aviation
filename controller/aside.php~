<?php

include_once "/opt/lampp/htdocs/www/aeroport/model/session.php";
include_once "/opt/lampp/htdocs/www/aeroport/model/search.php";
if( !isset( $_SESSION['login']) && !isset($_COOKIE['login']) )
	include_once "/opt/lampp/htdocs/www/aeroport/vue/aside.html";
else
{
	if( isset($_COOKIE['login']) && ! login_exist("Utilisateur" , $_COOKIE['login'] , $_COOKIE['pwd'] ))
		die("ERREUR: contenue de la cookie est invalide");
		
	if(!isset($_SESSION['login']))
	{
		$row = fetch($_COOKIE['login']);
		load_session($row);	
	}

	echo "Bonjour ". $_SESSION['prenom'] . " " . $_SESSION['nom'] . "\n <a href='/www/aeroport/controller/logout.php'> deconnexion</a>";
	echo "<a href='client/espace_client.php'>espace client</a>";
}
	
	


