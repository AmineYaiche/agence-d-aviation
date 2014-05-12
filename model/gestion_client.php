<?php
include_once "login_bd.php";

function delete_user($pseudo)
{
	$req = "DELETE FROM Utilisateur WHERE login = '$pseudo';";
	$req = mysql_query($req);
}








