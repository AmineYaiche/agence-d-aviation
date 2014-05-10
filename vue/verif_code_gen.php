<?php

session_start();

$nbr_chiffres = 6;
header ("Content-type: image/png");

$_img = imagecreatefrompng('fond_verif_img.png');
$arriere_plan = imagecolorallocate($_img, 0, 0, 0);


$avant_plan = imagecolorallocate($_img, 255, 255, 255);

$i = 0;
while($i < $nbr_chiffres) {
        $chiffre = mt_rand(0, 9);
        $chiffres[$i] = $chiffre;
        $i++;
}
$nombre = null;

foreach ($chiffres as $caractere) {
        $nombre .= $caractere;
}
$_SESSION['aleat_nbr'] = $nombre;

imagestring($_img, 5, 18, 8, $nombre, $avant_plan);

imagepng($_img);
?>
