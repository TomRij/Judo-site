<?php

require_once "Model/articlesModel.php";
$uri = $_SERVER["REQUEST_URI"];

if($uri == "/index.php" ||  $uri == "/"){
    $articles = selectAllArticles($dbh);
    require_once "Templates/Judo/pageAccueil.php";
}elseif (str_starts_with($uri, "/article")) {
    if (isset($_GET['articleId'])) {
        $articleId = $_GET['articleId'];
        $article = selectArticle($dbh, $articleId);
        if ($article != null) {
            require_once "Templates/Articles/article.php";
        } else {
            require_once "Templates/Judo/page404.php";
        }
    } else {
        require_once "Templates/Judo/page404.php";
    }
}






