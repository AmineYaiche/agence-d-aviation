<?php

include_once "../model/delete_personnel.php";

echo "<pre>";


foreach($_POST as $cle=>$elem)
	efface($cle);
header("location:../admin/gestion_equip.php");








