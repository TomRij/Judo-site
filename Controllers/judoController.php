<?php

$uri = $_SERVER["REQUEST_URI"];

if($uri == "/index.php" ||  $uri == "/"){
    require_once "Templates/Judo/pageAccueil.php";
}