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