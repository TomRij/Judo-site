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


