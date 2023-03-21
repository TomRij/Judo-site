<?php

$uri = $_SERVER["REQUEST_URI"];

if($uri == "/connexion"){
    require_once "Templates/Users/connexion.php";
}elseif($uri == "/inscription"){
    if(isset($_POST["btnEnvoi"])){
        createUser($pdo);
        header('location:/connexion');
    }
    require_once "Templates/Users/inscription.php";
}