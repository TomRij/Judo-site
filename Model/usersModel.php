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