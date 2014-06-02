<?php

include_once "../model/add_personnel.php";

add_personnel($_POST);


header("location:../admin/gestion_equip.php");

