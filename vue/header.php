<h1>Ceci est une baniaire</h1>
<?php if( isset($_SESSION['admin']) && $_SESSION['admin'] == "oui") 
{?><!--espace administration-->
<<<<<<< HEAD
	<a href="/www/aeroport">Accueil</a>
	<a href="/www/aeroport/admin/gestion_client.php">gestion des utilisateur</a>
	<a href="/www/aeroport/admin/gestion_equip.php">gestion des equipage</a>
	<a href="/www/aeroport/admin/gestion_avion.php">gestion des avions</a>
	<a href="/www/aeroport/admin/gestion_vol.php">gestion des vols</a>
	<a href="/www/aeroport/admin/gestion_reservation.php">gestion des reservation</a>
=======
	<header></header>
	<ul>
		<li><a href="/www/aeroport">Accueil</a></li>
		<li><a href="/www/aeroport/admin/gestion-client.php">Gestion des utilisateur</a></li>
		<li><a href="/www/aeroport/admin/gestion-equip.php">Gestion des equipage</a></li>
		<li><a href="/www/aeroport/admin/gestion-avion.php">Gestion des avions</a></li>
		<li><a href="/www/aeroport/admin/gestion-vol.php">Gestion des vols</a></li>
		<li><a href="/www/aeroport/admin/gestion-reservation.php">Gestion des reservation</a></li>
	</ul>
>>>>>>> e8092ec11fbdcd017ce632b679fcd935d81a9d8d
<?php
}
else
{
?><!--espace client-->
	<header></header>
	<ul>
 		<li><a href="/www/aeroport">Accueil</a></li>
		<li><a href="/www/aeroport/client/consult_reservation.php">Consulter reservation</a></li>
 		<li><a href="/www/aeroport/client/vol_en_cours.php">Vols en cours</a></li>
	        <li><a href="/www/aeroport/client/contact.html">Contact</a></li>
	</ul>
<?php
}
