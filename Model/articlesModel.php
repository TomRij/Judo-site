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
        $query = "INSERT INTO article_motscles (article_motsclesId, articleId, motsclesId) VALUES (:article_motsclesId, :articleId, :motsclesId)";
        $ajouteUser = $dbh->prepare($query);
        $ajouteUser->execute([
            'article_motsclesId' => ($_POST["titre"]),
            'articleTexte' => ($_POST["text"]),
            'userId' => $_SESSION["user"]->userId,
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

