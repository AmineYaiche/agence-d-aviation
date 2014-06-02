<?php

include "../model/add_plane.php";
include "../model/search.php";

if(id_exist("Avion" , "id_av" , $_POST['id']))
{
	echo "identifiant existe deja";
	header("refresh:3;url=../admin/gestion_avion.php");
}
else
{
	add_plane($_POST);
	header("location:../admin/gestion_avion.php");
}
