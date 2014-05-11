<?php
include_once "login_bd.php";


function vol_en_cours()
{
	$req = "SELECT * FROM Vol WHERE NOW() BETWEEN date_depart AND date_arrive;";
	$req = mysql_query($req);
	return $req;
}


function fetch_vol($dep , $dest ,$date_dep , $date_retour=null)
{
	$req1 = "SELECT * , DATE(date_depart) AS date_d FROM Vol WHERE place_restant >0 AND depart = '$dep' AND destination = '$dest'";
	$req1 .= "AND DATE(date_depart) = '$date_dep';";
	$req1 = mysql_query($req1);
	if(! mysql_num_rows($req1)) return null;
	$req2 = null;
	if($date_retour)
	{
		$req2 = "SELECT *, DATE(date_depart) FROM Vol WHERE place_restant > 0 AND depart = '$dest' AND destination = '$dep'";
		$req2.= "AND date_depart = '$date_retour';";
		$req2 = mysql_query($req2);
	}
	$req = array($req1 , $req2);
	return $req;
}
