<?php
include_once "login_bd.php";

function add_plane($plane)
{
	$id = $plane['id'];
	$cap = $plane['cap'];
	$vol=($plane['vol_courant'] == "")?"pas de vol en cours":$plane['vol_courant'];

	$req="INSERT INTO Avion VALUES('$id','$cap','$vol');";
	mysql_query($req);
}
