<?php

include_once "../model/gestion_vol.php";



if(isset($_POST['supprimer']))
{
	foreach($_POST as $cle=>$elem)
		efface($cle);
}
else
{
	foreach($_POST as $cle=>$elem)
		valide($cle);
}

header("location:../admin/gestion_vol.php");

