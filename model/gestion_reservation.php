<?php
include_once "login_bd.php";

function efface($vol , $login)
{
	$req = "DELETE FROM Reservation WHERE  id_vol = '$vol' AND login = '$login';";
	mysql_query($req);
}

function valide($vol , $login)
{
	$req="UPDATE Reservation SET valider='valider' ";
	$req .= "WHERE id_vol='$vol' AND login='$login';";
	mysql_query($req);
}
