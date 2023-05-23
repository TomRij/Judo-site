<?php

function selectMotscles($dbh){
    try {
        $query = "SELECT * FROM motscles;";
        $chercheUser = $dbh->prepare($query);
        $chercheUser->execute();
        return $chercheUser -> fetchAll();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function addMotsclesToArticle($dbh, $articleId, $motsclesId){
    try {
        $query = "INSERT INTO article_motscles (articleId, motsclesId) VALUES (:articleId, :motsclesId)";
        $ajouteUser = $dbh->prepare($query);
        $ajouteUser->execute([
            'articleId' => $articleId,
            'motsclesId' => $motsclesId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectMotsclesForArticle($dbh, $articleId){
    try {
        $query = "SELECT motscles.motsclesNom
          FROM article_motscles
          INNER JOIN motscles ON article_motscles.motsclesId = motscles.motsclesId
          WHERE article_motscles.articleId = :articleId";
        $motsclesNom = $dbh->prepare($query);
        $motsclesNom->execute(array('articleId' => $articleId));
        return $motsclesNom -> fetchAll();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}