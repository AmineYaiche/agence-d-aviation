<?php
include_once "login_bd.php";

function efface($avion)
{
	$req = "DELETE FROM Avion WHERE id_av = '$avion';";
	mysql_query($req);


}
