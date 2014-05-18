<?php

include "../model/add_vol.php";
include "../model/search.php";

if(id_exist("Vol" , "id_vol" , $_POST['id']))
{
	echo "identifiant existe deja";
	header("refresh:3;url=../admin/gestion_vol.php");
}
else
{
	add_vol($_POST);
	header("location:../admin/gestion_vol.php");
}
