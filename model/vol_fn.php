<?php
include_once "login_bd.php";
function load_ville( $s)
{
	$req = mysql_query("SELECT ".$s." FROM Vol");
	$T = array();
	for( $i = 0 ; $row = mysql_fetch_row($req); $i++)
	{
		if(!in_array($row[0] , $T) )
			$T[$i] = $row[0];
	}	

	return $T;
}


