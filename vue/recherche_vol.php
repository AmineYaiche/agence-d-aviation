<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<meta charser="UTF-8"/>
</head>
<body>

<table border="1">
<h1> Liste des vol</h1>
<?php if($req[1]) echo "<h2> aller</h2>";?>
<tr>
	<th>N° Vol</th>
	<th>depart</th>
	<th>destination</th>
	<th>date depart</th>
	<th>date arrivé</th>
	<th>reserver</th>
</tr><pre>
<?php

print_r($req);

?>

</table>
</body>
</html>
