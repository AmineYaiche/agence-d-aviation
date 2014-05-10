<?php
include_once "login_bd.php";


$req= "INSERT INTO Utilisateur VALUES ('".$_POST['login']."','".$_POST['pwd']."', '";
$req = $req.$_POST['nom']."','".$_POST['prenom']."','".$_POST['email']."' , 'non');";




mysql_query($req);


header("location:../");























