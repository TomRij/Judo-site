<div class="FlexContainer wrap techniqueJudo">
    <img class="technique block" src="../Images/technique1.png" alt="image d'une technique de judo">
    <img class="technique block" src="../Images/technique2.png" alt="image d'une technique de judo">
    <img class="technique block" src="../Images/technique3.png" alt="image d'une technique de judo">
    <img class="technique block" src="../Images/technique4.png" alt="image d'une technique de judo">
</div>

<h1 class="articles-titre">Les articles les plus récents</h1>
<div class="FlexContainer article justify-content wrap">
  <?php foreach($articles as $articles) : ?>
    <li class="place-article">
      <h2 class="titre-article"><?= $articles->articleTitre ?></h2>
      <p><?= $articles->articleTexte ?></p>
    </li>
  <?php endforeach ?>
</div>

