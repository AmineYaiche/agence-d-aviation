<?php 

include_once "login_bd.php";

function add_personnel($p)
{
	$nom = $p['nom'];
	$prenom = $p['prenom'];
	$poste = $p['poste'];
	$tel = ($p['tel'] != '')?$p['tel'] : 'non specifie';
	$email = ($p['email'] != '')?$p['email'] : 'non specifie';
	$addr = ($p['adresse']!= '')?$p['adresse'] : 'non specifie';
	$req = "INSERT INTO Personnel VALUES(NULL,'$nom','$prenom','$poste','$tel',";
	$req .= "'$email','$addr');";
	mysql_query($req);
}
