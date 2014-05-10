<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8" />
</head>
<body>
<header><?php include_once "../vue/header.php"; ?></header>
<?php
include_once "../model/search.php";

if( !isset($_SESSION['login']))
	echo "Espace reserver pour les client\n";
else
{
	$reservation = fetch_reservation($_SESSION['login']);

	if(!$reservation)
		echo "Vous n'avez pas de reservation\n";
	else
	{	
		echo "<pre>";
		print_r($reservation);
		echo "</pre>";
		
		
			
	}	
}

?>
<aside> <?php include_once "../controller/aside.php" ?> </aside>
<footer> <?php include_once "../vue/footer.html"; ?></footer>
</body>
</html>
