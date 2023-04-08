<?php

require_once "Model/articlesModel.php";
$uri = $_SERVER["REQUEST_URI"];

if($uri == "/index.php" ||  $uri == "/"){
    $articles = selectAllArticles($dbh);
    require_once "Templates/Judo/pageAccueil.php";
}

if($uri == "/article.php" ||  $uri == "article"){
    $articles = selectArticles($dbh, articleId);
    require_once "Templates/Judo/article.php";
}