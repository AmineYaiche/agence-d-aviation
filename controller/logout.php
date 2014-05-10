<?php
session_start();
session_destroy();
setcookie("login" , "" , time()-1000 , "/www/aeroport");

header("location:../");
