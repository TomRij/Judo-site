<?php
function inscriptionUser($dbhl) {
  
    try {
        $sql = "INSERT INTO users (userNom, userPrenom, userEmail, userMotDePasse) VALUES (:nom, :prenom, :email, :motDePasse)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([
            'nom' => $_POST["nom"],
            'prenom' => $_POST["prenom"],
            'email' => $_POST["email"],
            'motDePasse' => $_POST["motDePasse"],]);
    } catch (PDOException $eh) {
        die("Erreur de connexion à la base de donnée : " . $e->getMessage());
    }
}