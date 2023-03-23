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
    if(isset($_POST["btnEnvoi"])){
        $messageError = verifEmptyData();
        if (!$messageError) { //!$messageError est parail que $messageError == false
                createUser($dbh);
                header('location:/connexion');
        }
    }
    require_once "Templates/Users/inscription.php";
}elseif($uri == "/deconnexion"){
    session_destroy();
    header("location:/");
}elseif($uri == "/profil"){
    require_once "Templates/users/profil.php";
}elseif ($uri === "/modifyProfil") {
    if(isset($_POST["btnEnvoi"])){
        var_dump("cliqued");
        updateUser($pdo);
        reloadSession($pdo);
        header("location:/profil");
    }
    require_once "Templates/Users/inscription.php";
}

function verifEmptyData(){
    foreach ($_POST as $key => $value) {
        if (empty(str_replace(' ', '',$value))) {
            $messageError[$key] = "Veuillez entrer votre " . $key;
        }
    }
    if(isset($messageError)){
        return $messageError; 
    }else {
        return false;
    }
}