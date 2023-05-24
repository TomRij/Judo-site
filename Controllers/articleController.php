<?php

require_once "Model/articlesModel.php";
require_once "Model/motsclesModel.php";

$uri = $_SERVER["REQUEST_URI"];

if($uri == "/index.php" ||  $uri == "/"){
    $articles = selectAllArticles($dbh);
    require_once "Templates/Judo/pageAccueil.php";
}elseif (str_starts_with($uri, "/article")) {
    if (isset($_GET['articleId'])) {
        $articleId = $_GET['articleId'];
        $article = selectArticle($dbh, $articleId);
        $motscle = selectMotsclesForArticle($dbh, $articleId);
        if ($article != null) {
            require_once "Templates/Articles/article.php";
        } else {
            require_once "Templates/Judo/page404.php";
        }
    }
}elseif($uri == "/createArticle"){
    $articles = MyArticles($dbh); 
    $motscles = selectMotscles($dbh);
    if(isset($_POST["btnArticle"])){
        $messageError = verifEmptyData();
        if (!$messageError) { //!$messageError est parail que $messageError == false
            createArticle($dbh);
            $articleId = $dbh->lastInsertId();
            foreach ($_POST['motscles'] as $motclesId)
                addMotsclesToArticle($dbh, $articleId, $motclesId); 
            }   
            header('location:/');
        }
    
    require_once "Templates/users/userArticle.php";
}