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
        $query = "SELECT * FROM article WHERE $articleId = articleId" ;
        $chercheUser = $dbh->prepare($query);
        $chercheUser->execute();
        return $chercheUser -> fetch();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
