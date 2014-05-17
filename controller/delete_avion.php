<?php

include_once "../model/delete_avion.php";

foreach($_POST as $cle=>$elem)
	efface($cle);
header("location:../admin/gestion_avion.php");








