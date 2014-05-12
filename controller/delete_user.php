<?php



include_once "../model/gestion_client.php";


foreach($_POST as $pseudo=>$elem)
		delete_user($pseudo);

header("location:../admin/gestion_client.php");


