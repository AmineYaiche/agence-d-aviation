<?php

include_once "../model/gestion_reservation.php";
echo "<pre>";


if(isset($_POST['supprimer']))
{
	foreach($_POST as $cle=>$elem)
	{
		$t = explode("_" , $cle);
		efface($t[0] , $t[1]);
	}
}
else
{
	foreach($_POST as $cle=>$elem)
	{
		$t = explode("_",$cle);
		valide($t[0] , $t[1]);
	}
}

header("location:../admin/gestion_reservation.php");

