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