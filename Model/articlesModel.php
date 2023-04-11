<?php
function selectAllArticles($dbh)
{
    try {
        $query = "SELECT * FROM article ORDER BY articleId DESC LIMIT 6;";
        $chercheUser = $dbh->prepare($query);
        $chercheUser->execute();
        return $chercheUser -> fetchAll();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectArticle($dbh, $articleId)
{
    try {
        $query = "SELECT * FROM article WHERE articleId = :id";
    $chercheUser = $dbh->prepare($query);
    $chercheUser->execute(array(':id' => $articleId));
    return $chercheUser->fetch();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function createArticle($dbh) {
  
    try {
        $query = "INSERT INTO article (articleTitre, articleTexte) VALUES (:articleTitre, :articleTexte)";
        $ajouteUser = $dbh->prepare($query);
        $ajouteUser->execute([
            'articleTitre' => $_POST["titre"],
            'articleTexte' => $_POST["text"]
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
