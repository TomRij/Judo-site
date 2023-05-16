<?php
function createUser($dbh) {
  
    try {
        $query = "INSERT INTO user (userNom, userPrenom, userLogin, userEmail, userPassword, ceintureId) VALUES (:userNom, :userPrenom, :userLogin, :userEmail, :userPassword, :ceintureId)";
        $ajouteUser = $dbh->prepare($query);
        $ajouteUser->execute([
            'userNom' => htmlentities($_POST["nom"]),
            'userPrenom' => htmlentities($_POST["prenom"]),
            'userLogin' => htmlentities($_POST["login"]),
            'userEmail' => htmlentities($_POST["email"]),
            'userPassword' => htmlentities($_POST['password']),
            'ceintureId' => htmlentities($_POST['ceinture'])
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function connectUser($dbh){
    
    try {
        $query = "select * from user where userLogin = :userLogin and userPassword = :userPassword";        
        $connectUser = $dbh->prepare($query);
        $connectUser->execute([
            'userLogin' => htmlentities($_POST["login"]),
            'userPassword' => htmlentities($_POST['password'])
        ]);
        $user = $connectUser->fetch();
        $_SESSION["user"] = $user;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function updateUser($dbh)
{
    try {
        $query = "UPDATE user SET userNom = :userNom, userPrenom = :userPrenom, userPassword = :userPassword,  ceintureId = :ceintureId, userEmail = :userEmail WHERE userId = :id";
        $updateUser = $dbh->prepare($query);
        $updateUser->execute([
            'userNom' => htmlentities($_POST['nom']),
            'userPrenom' => htmlentities($_POST['prenom']),
            'userPassword' => htmlentities($_POST['password']),
            'userEmail' => htmlentities($_POST['email']),
            'id' => htmlentities($_SESSION["user"]-->userId),
            'ceintureId' => htmlentities($_POST['ceinture'])
        ]);
        reloadSession($dbh);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function reloadSession($dbh)
{
    try {
        $query = "select * from user where userId = :id";
        $chercheUser = $dbh->prepare($query);
        $chercheUser->execute([
            'id' => $_SESSION["user"]->userId
        ]);
        $user=$chercheUser -> fetch();
        if ($user) {
            $_SESSION['user']=$user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function deleteUser($dbh)
{
    try {
        $query = "delete from user where userId = :id";
        $chercheUser = $dbh->prepare($query);
        $chercheUser->execute([
            'id' => $_SESSION["user"]->userId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}