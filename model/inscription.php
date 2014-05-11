<?php
include_once "login_bd.php";

function insert_user($row)
{
	$req= "INSERT INTO Utilisateur VALUES ('".$row['login']."','".$row['pwd']."', '";
	$req = $req.$row['nom']."','".$row['prenom']."','".$row['email']."' , 'non');";
	mysql_query($req);
}

























