<?php

include_once "login_bd.php";


function add_equip($equip)
{
	$pilote = $equip['pilote'];
	$cop = $equip['copilote'];
	$st = $equip['stewart'];
	$hot = $equip['hotesse'];

	$req = "INSERT INTO Equipage VALUES(NULL, '$pilote','$cop','$st','$hot');";
	mysql_query($req);
}
