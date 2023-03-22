<?php

require_once "Model/usersModel.php";

$uri = $_SERVER["REQUEST_URI"];

if($uri == "/connexion"){
    require_once "Templates/Users/connexion.php";
    if(isset($_POST["btnEnvoi"])){
        connectUser($dbh);
        header('location:/');
    }
}elseif($uri == "/inscription"){
    //var_dump($_POST);
    if(isset($_POST["btnEnvoi"])){
        createUser($dbh);
        header('location:/');
    }
    require_once "Templates/Users/inscription.php";
}elseif($uri == "/deconnexion"){
    session_destroy();
    header("location:/");
}