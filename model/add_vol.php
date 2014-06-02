<?php
include_once "login_bd.php";

function add_vol($vol)
{
	$id = $vol['id'];
	$avion=($vol['avion'] == "")?"pas encore preciser":$vol['avion'];
	$equipe=($vol['equipe'] == "")?"pas encore preciser":$vol['equipe'];
	$date_d = $vol['date_d'];
	$dep = $vol['dep'];
	$dest = $vol['dest'];
	$date_a = $vol['date_a'];


	$req="INSERT INTO Vol VALUES('$id','$avion','$equipe',
	'$date_d','$dep','$dest','$date_a' , 0 , pas encore , en programme);";
	mysql_query($req);
}
