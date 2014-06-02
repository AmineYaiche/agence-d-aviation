<?php
include_once "login_bd.php";

function delete_user($pseudo)
{
	$req = "DELETE FROM Utilisateur WHERE login = '$pseudo';";
	$req = mysql_query($req);
}

function update_user($T)
{
	$login = $T["login"];
	$newLogin = $T["newLogin"];
	$pwd = $T["mdp"];
	$nom = $T["nom"];
	$prenom = $T["prenom"];
	$email = $T["email"];

	$req = "UPDATE Utilisateur SET ";
	if($newLogin != "")$req .="login='$newLogin'"
	if($login != "")$req .="login='$newLogin'"
	if($login != "")$req .="login='$newLogin'"
	if($login != "")$req .="login='$newLogin'"
	if($login != "")$req .="login='$newLogin'"
	
	mysql_query($req);
	


}
	









