<?php
include_once "login_bd.php";


function vol_en_cours()
{
	$req = "SELECT * FROM Vol WHERE NOW() BETWEEN date_depart AND date_arrive;";
	$req = mysql_query($req);
	return $req;
}

