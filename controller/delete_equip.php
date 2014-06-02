<?php



include_once "../model/delete_equip.php";

echo "<pre>";
foreach($_POST as $cle => $elem)
	delete_equip($cle);

header("location:../admin/gestion_equip.php");
