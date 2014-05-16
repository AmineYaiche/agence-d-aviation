<?php
include_once "../model/add_equip.php";

add_equip($_POST);

header("location:../admin/gestion_equip.php");




