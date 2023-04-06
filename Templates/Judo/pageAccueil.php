<div class="FlexContainer wrap techniqueJudo">
    <img class="technique block" src="../Images/technique1.png" alt="">
    <img class="technique block" src="../Images/technique2.png" alt="">
    <img class="technique block" src="../Images/technique3.png" alt="">
    <img class="technique block" src="../Images/technique4.png" alt="">
</div>

<h1>Articles</h1>
<div class="article">
    <?php foreach($articles as $articles) : ?>
            <li>
                <h2><?= $articles->articleTitre ?></h2>
                <p><?= $articles->articleTexte ?></p>
            </li>
    <?php endforeach ?>
</div>
