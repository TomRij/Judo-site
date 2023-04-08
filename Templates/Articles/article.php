<?php
require_once "Model/articlesModel.php";
$uri = $_SERVER["REQUEST_URI"];

if($uri == "/article.php" || $uri == "/article"){
    $articles = selectAllArticles($dbh);
    require_once "Templates/Judo/pageAccueil.php";
} elseif($uri == "/article.php" || $uri == "/article"){
    if(isset($_GET['articleId'])) {
        $articleId = $_GET['articleId'];
        $article = selectArticle($dbh, $articleId);
        if($article != null) {
            $articleTitre = $article->articleTitre;
            $articleTexte = $article->articleTexte;
            require_once "Templates/Judo/pageAccueil.php";
        } else {
            require_once "Templates/Judo/page404.php";
        }
    } else {
        require_once "Templates/Judo/page404.php";
    }
}
?>