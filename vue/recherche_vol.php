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
</tr>
<?php
	while( $row = mysql_fetch_row($req[0]) )
	{	
		echo "<tr>
			<td>$row[0]</td>
			<td>$row[4]</td>
			<td>$row[5]</td>
			<td>$row[10]</td>
			<td>$row[9]</td>
		<td>";
			echo "<select name='nbr_rsv'>";
			$k = ($row[7] >=5)?5:$row[7];
			for($i = 1 ; $i <= $k ; $i++)
			echo "<option value=$i>$i</option>";
		echo "</td>";
		echo "</tr>";

	}
?>

