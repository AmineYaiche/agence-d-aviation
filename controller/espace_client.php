<?php

include_once "../model/gestion_client.php";
$_POST["mdp"] = $_POST["newMdp1"];
update_user($_POST);

header("location:../");




