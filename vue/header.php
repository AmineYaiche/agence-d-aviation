<h1>Ceci est une baniaire</h1>
<?php if( isset($_SESSION['admin']) && $_SESSION['admin'] == "oui") 
{?><!--espace administration-->
	<a href="/www/aeroport">Accueil</a>
	<a href="/www/aeroport/admin/gestion_client.php">gestion des utilisateur</a>
	<a href="/www/aeroport/admin/gestion_equip.php">gestion des equipage</a>
	<a href="/www/aeroport/admin/gestion_avion.php">gestion des avions</a>
	<a href="/www/aeroport/admin/gestion_vol.php">gestion des vols</a>
	<a href="/www/aeroport/admin/gestion_reservation.php">gestion des reservation</a>
<?php
}
else
{
?><!--espace client-->
 		<a href="/www/aeroport">Accueil</a></li>
		<a href="/www/aeroport/client/consult_reservation.php">Consulter reservation</a>
 		<a href="/www/aeroport/client/vol_en_cours.php">Vols en cours</a></li>
	        <a href="/www/aeroport/client/contact.php">Contact</a>
	
<?php
}
