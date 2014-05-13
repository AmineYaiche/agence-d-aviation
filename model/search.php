<?php
include_once "login_bd.php";

function login_exist($table , $login , $pwd= NULL)
{
	$req = "SELECT login FROM ".$table." WHERE login = '".$login."'";
	if($pwd) $req =$req. "AND pwd = '".$pwd."'";
	$req = mysql_query($req);
	if( mysql_fetch_row($req)) return true;
	return false;
}

function fetch($login)
{
	$req = "SELECT * FROM Utilisateur WHERE login = '".$login."'";
	$req = mysql_query($req);
	$row = mysql_fetch_row($req);
	
	$row['login'] = $row[0];
	$row['nom'] = $row[2];
	$row['prenom'] = $row[3];
	$row['email'] = $row[4];
	$row['admin'] = $row[5];
	return $row;
}



function fetch_reservation($login)
{
	$req = "SELECT * FROM Reservation R, Vol V WHERE login = '".$login."' AND R.id_vol = V.id_vol;";
	$req = mysql_query($req);
	$T = array();
	while( $row = mysql_fetch_row($req))
	{
		$T[] = $row;	
	}
	return $T;
}

function fetch_users($page=NULL)
{
	$page = ($page)?$page*5-5+1:0;
	$req = "SELECT * FROM Utilisateur WHERE admin='non'";
	if($page) $req .= " limit $page , 5;";
	$req = mysql_query($req);
	return $req;
}

function fetch_personnel($page=NULL)
{
	$page = ($page)?$page*5-5+1:0;
	$req = "SELECT * FROM Personnel;";
	if($page) $req .= "limit $page , 5;";
	$req = mysql_query($req);
	return $req;
}
