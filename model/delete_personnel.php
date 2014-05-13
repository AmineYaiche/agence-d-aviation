<?php
include_once "login_bd.php";

function efface($personnel)
{
	$req = "DELETE FROM Personnel WHERE id_personnel = '$personnel';";
	mysql_query($req);


}
