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

function fetch_users($page="all")
{
	$req = "SELECT * FROM Utilisateur WHERE admin='non'";
	if($page) 
	{	
		$page = ($page)?$page*5-5+1:0;
		$req .= " limit $page , 5;";
	}
	$req = mysql_query($req);
	return $req;
}

function fetch_personnel($page="all")
{
	$req = "SELECT * FROM Personnel ";
	if($page!= "all") 
	{
		$page = ($page)?$page*5-5:0;
		$req .= "limit $page , 5;";
	}
	$req = mysql_query($req);
	return $req;
}

function fetch_equip($page=NULL)
{
	$req = "SELECT * FROM Equipage ";
	if($page)
	{	
		$page = ($page)?$page*5-5 : 0;
		$req .= "limit $page , 5;";
	}
	$req = mysql_query($req);
	return $req;
}
function getPersonnels($poste)
{	
	$req = "SELECT id_p , nom ,prenom FROM Personnel p 
	WHERE poste = '$poste'
	AND (id_p) NOT IN (
	SELECT id_p FROM Personnel p , Equipage e WHERE
	id_p = $poste);";
	$req = mysql_query($req);
	return $req;
}

function get_name($id)
{
	$req = "SELECT id_p , nom , prenom FROM Personnel WHERE id_p = '$id';";
	$req = mysql_query($req);
	$row = mysql_fetch_assoc($req);
	return $row['id_p']."- ".$row['nom']." ".$row['prenom'];
}


function fetch_avion($page="all")
{
	$req = "SELECT * FROM Avion ";
	if($page)
	{
		$page = ($page)?$page*5-5 : 0;
		$req .= "limit $page , 5;";
	}
	$req = mysql_query($req);
	return $req;
}

function id_exist($table , $id_name , $id)
{
	$req = "SELECT * FROM $table WHERE $id_name = '$id';";
	$req = mysql_query($req);
	return (mysql_num_rows($req)>0)?true:false;
}


