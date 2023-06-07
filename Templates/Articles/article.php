<h1 class="article-complet-titre"><?= $article->articleTitre ?></h1>
<h2 class="article-motcles">Mots-clés :
</h2>
<ul class="FlexContainer">
    <?php foreach ($motscle as $mot) { ?>
        <li class="motscles"><?= $mot->motsclesNom ?></li>
    <?php } ?>
</ul>
<p class="article-complet-text"><?= $article->articleTexte ?></p>
<p class="article-auteur">Auteur : <?= $article->userLogin ?></p>

<?php if ($article->userLogin === $_SESSION['user']->userLogin) { ?>
    <form action="/deleteArticle" method="post">
        <input type="hidden" name="articleId" value="<?= $article->articleId ?>">
        <button type="submit">Supprimer l'article</button>
    </form>
<?php } ?>