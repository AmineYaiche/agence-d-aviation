<?php

$to = "amineyaich092@gmail.com";
$subject = $_POST['subject'];
$msg = $_POST['msg'];
$headers = "FROM : ".$_POST['prenom']." ".$_POST['nom']." <".$_POST['email'].">";

mail($to , $subject , $msg , $headers);

//header("location:../");


