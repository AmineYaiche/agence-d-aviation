<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="CSS/style.css"/>

</head>
<body>
<header><?php include_once "vue/header.php"; ?></header>

<article>
<h2>Recherche des vols et reservations</h2>
<?php include_once "model/vol_fn.php";?>
<form name="search" action="controller/recherche_vol.php" method="POST">

	<label> De : 
	<select name="dep">
	<?php 
	$T = load_ville("depart");

	foreach( $T as $element)
		echo "<option value=$element>".$element."</option>";
	?>
	</select>
	</label>
	<br/>
	<label> Vers : 
	<select name="dest">
	<?php 
		$T = load_ville("destination");
		foreach( $T as $element)
			echo "<option value=$element>".$element."</option>";
	?>
	</select>	
	</label>
	<br/>
	<label><input type="radio" name="type" value="retour" onClick="date_retour.disabled = false" checked/> aller retour </label>
	<label><input type="radio" name="type" value="simple" onClick="date_retour.disabled = true" /> aller simple </label>
	<br/>
	<label> date aller : <input type="date" name="date_aller" required></label>
	<label> date retour : <input type="date" name="date_retour" required/></label>
	<br/>
	<input type="submit" value="Rechercher"/>

</form>
</article>

<aside> <?php include_once "controller/aside.php" ?> </aside>

<footer> <?php include_once "vue/footer.html"; ?></footer>

</body>
</html>
