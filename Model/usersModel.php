<?php
function createUser($dbh) {
  
    try {
        $query = "INSERT INTO user (userNom, userPrenom, userLogin, userEmail, userPassword) VALUES (:userNom, :userPrenom, :userLogin, :userEmail, :userPassword)";
        $ajouteUser = $dbh->prepare($query);
        $ajouteUser->execute([
            'userNom' => $_POST["nom"],
            'userPrenom' => $_POST["prenom"],
            'userLogin' => $_POST["login"],
            'userEmail' => $_POST["email"],
            'userPassword' => $_POST['password']
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
            'userLogin' => $_POST["login"],
            'userPassword' => $_POST['password']
        ]);
        $user = $connectUser->fetch();
        var_dump($user);
        $_SESSION["user"] = $user;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function updateUser($dbh)
{
    try {
        $query = "UPDATE user SET userNom = :userNom, userPrenom = :userPrenom, userPassword = :userPassword, userEmail = :userEmail WHERE userId = :id";
        $updateUser = $dbh->prepare($query);
        $updateUser->execute([
            'userNom' => $_POST['nom'],
            'userPrenom' => $_POST['prenom'],
            'userPassword' => $_POST['password'],
            'userEmail' => $_POST['email'],
            'id' => $_SESSION["user"]->userId
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