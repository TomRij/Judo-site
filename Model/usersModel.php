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

function updateUser($pdo)
{
    try {
        $query = "UPDATE utilisateurs SET nomUser = :nomUser, prenomUser = :prenomUser, passWordUser = :passWordUser, emailUser = :emailUser WHERE id = :id";
        $updateUser = $pdo->prepare($query);
        $updateUser->execute([
            'nomUser' => $_POST['nom'],
            'prenomUser' => $_POST['prenom'],
            'emailUser' => $_POST['email'],
            'passWordUser' => $_POST['mot_de_passe'],
            'id' => $_SESSION["user"]->id
        ]);
        reloadSession($pdo);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function reloadSession($pdo)
{
    try {
        $query = "select * from utilisateurs where id = :id";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'id' => $_SESSION["user"]->id
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