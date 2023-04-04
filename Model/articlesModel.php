<?php
function selectAllArticles($pdo)
{
    try {
        $query = "select * from article";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute();
        return $chercheUser -> fetchAll();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}