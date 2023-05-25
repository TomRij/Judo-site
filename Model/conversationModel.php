<?php

function selectAllusers($dbh){
    try {
        $query = "SELECT * FROM user where userId!=".$_SESSION["user"]->userId.";";
        $chercheUser = $dbh->prepare($query);
        $chercheUser->execute();
        return $chercheUser -> fetchAll();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectConversation($dbh, $userId){
    try {
        $query = "SELECT * FROM utilisateur_conversation natural join conversation where userId = :userIdConnected and conversationId in (SELECT conversationId FROM utilisateur_conversation where userId = :userId) and conversationType = 'binaire';";
        $chercheUser = $dbh->prepare($query);
        $chercheUser->execute([
            "userIdConnected"=> $_SESSION["user"]->userId,
            "userId"=>$userId
        ]);
        return $chercheUser -> fetchAll();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function createConversation($dbh){
    try {
        $query = "INSERT INTO conversation (conversationType) VALUES (:conversationType)";
        $ajouteUser = $dbh->prepare($query);
        $ajouteUser->execute([
            'conversationType' => 'binaire',
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function createConversationUtilisateur($dbh, $userId, $conversationId){
    try {
        $query = "INSERT INTO utilisateur_conversation (conversationId, userId) VALUES (:conversationId, :userId)";
        $ajouteUser = $dbh->prepare($query);
        $ajouteUser->execute([
            'conversationId' => $conversationId,
            'userId'=>$userId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
