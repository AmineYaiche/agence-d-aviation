<?php
include_once "login_bd.php";

function efface($vol)
{
	$req = "DELETE FROM Vol WHERE id_vol = '$vol';";
	mysql_query($req);
}

function valide($vol)
{
	$req = "UPDATE Vol SET valider = 'valider' WHERE id_vol = '$vol';";
	mysql_query($req);
}
