<?php

require_once "Model/articlesModel.php";

$uri = $_SERVER["REQUEST_URI"];

if($uri == "/index.php" ||  $uri == "/"){
    $articles = selectAllArticles($dbh);
    require_once "Templates/Judo/pageAccueil.php";
}elseif (str_starts_with($uri, "/article")) {
    var_dump("tat");
    if (isset($_GET['articleId'])) {
        $articleId = $_GET['articleId'];
        $article = selectArticle($dbh, $articleId);
        if ($article != null) {
            require_once "Templates/Articles/article.php";
        } else {
            require_once "Templates/Judo/page404.php";
        }
    }
}elseif($uri == "/createArticle"){
    var_dump('test');
    if(isset($_POST["btnArticle"])){
        var_dump("test1");
        $messageError = verifEmptyData();
        if (!$messageError) { //!$messageError est parail que $messageError == false
            var_dump("test2");
            createArticle($dbh);
            header('location:/');
        }
    }
    require_once "Templates/users/userArticle.php";
}