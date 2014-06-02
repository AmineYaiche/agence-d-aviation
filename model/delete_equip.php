<?php


include_once "login_bd.php";

function delete_equip($id)
{
	$req = "DELETE FROM Equipage WHERE id_eq = '$id';";
	mysql_query($req);
}


