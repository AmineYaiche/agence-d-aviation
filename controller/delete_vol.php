<?php

include_once "../model/delete_vol.php";

foreach($_POST as $cle=>$elem)
	efface($cle);
header("location:../admin/gestion_vol.php");








