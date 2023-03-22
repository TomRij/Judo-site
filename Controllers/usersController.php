<?php

require_once "Model/usersModel.php";

$uri = $_SERVER["REQUEST_URI"];

if($uri == "/connexion"){
    require_once "Templates/Users/connexion.php";
}elseif($uri == "/inscription"){
    //var_dump($_POST);
    if(isset($_POST["btnEnvoi"])){
        createUser($dbh);
        header('location:/index.php');
    }
    require_once "Templates/Users/inscription.php";
}