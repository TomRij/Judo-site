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
        $query = "SELECT article.*, user.userLogin 
                  FROM article 
                  INNER JOIN user ON article.userId = user.userId 
                  WHERE article.articleId = :id";
        $chercheUser = $dbh->prepare($query);
        $chercheUser->execute(array(':id' => $articleId));
        return $chercheUser->fetch();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function MyArticles($dbh){
    try {
        $query ="select * from article where userId = :userId";
        $chercheUser = $dbh->prepare($query);
        $chercheUser->execute(array(':userId' =>$_SESSION["user"]->userId));
        return $chercheUser->fetchAll();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function createArticle($dbh) {
  
    try {
        $query = "INSERT INTO article (articleTitre, articleTexte, userId) VALUES (:articleTitre, :articleTexte, :userId)";
        $ajouteUser = $dbh->prepare($query);
        $ajouteUser->execute([
            'articleTitre' => htmlentities($_POST["titre"]),
            'articleTexte' => htmlentities($_POST["text"]),
            'userId' => $_SESSION["user"]->userId,
        ]);

    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function deleteArticle($dbh, $articleId) {
    try {
        $query1 = "DELETE FROM article_motscles WHERE articleId = :articleId";
        $query2 = "DELETE FROM article WHERE articleId = :articleId";

        $deleteMotscles = $dbh->prepare($query1);
        $deleteMotscles->execute(['articleId' => $articleId]);

        $deleteArticle = $dbh->prepare($query2);
        $deleteArticle->execute(['articleId' => $articleId]);

    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

