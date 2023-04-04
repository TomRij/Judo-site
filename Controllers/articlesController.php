<?php

require_once "Model/articlesModel.php";

$uti = $_SERVER["REQUEST_URI"];

if ($uri == "/index.php" || $uri=="/") {
    $articles = selectAllArticles($pdo);
    explodeSentence();
    require_once "Templates/Articles/seeAllArticles.php";
}elseif ($uri == "/seeMyArticles") {
    require_once "Templates/Articles/seeMyArticles.php";
}