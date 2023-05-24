<form method="post" action="">
    <fieldset>
        <legend><?php if(isset($_SESSION["user"])) : ?>Créer un nouvelle article<?php else : ?><?php endif ?></legend>
        <div>
            <label for="Titre" class="form-label">Titre</label>
            <input type="text" placeholder="Titre" class="form-control" id="titre" name="titre" value="<?php if(isset($_SESSION["article"])) : ?><?= $_SESSION["article"]->articleTitre ?><?php endif ?>">
            <?php if(isset($messageError["titre"])) : ?><small><?= $messageError["titre"] ?></small><?php endif ?> 
        </div>
        <div>
            <label for="text" class="form-label">Texte</label>
            <textarea placeholder="Rédiger votre article" class="form-control" id="text" name="text"><?php if(isset($_SESSION["article"])) : ?><?= $_SESSION["article"]->articleTexte ?><?php endif ?></textarea>
            <?php if(isset($messageError["text"])) : ?><small><?= $messageError["text"] ?></small><?php endif ?> 
        </div>
        <div>
            <label for="select-motcles">Choisir vos motclés (si vous voulez en choisir plusieurs pressé ctrl)</label>
            <select class="form-select-motscles" name="motscles[]" id="select-motscles" multiple>
                <?php foreach ($motscles as $motscle) : ?>
                    <option value="<?= $motscle->motsclesId ?>"><?= $motscle->motsclesNom ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <button name="btnArticle" type="submit" value="envoyer"><?php if(isset($_SESSION["article"])) : ?><?php else : ?>Créer<?php endif ?></button>
        </div>
    </fieldset>
</form>

<h1 class="titre">Vos articles</h1>

<div class="FlexContainer article justify-content wrap">
    <?php foreach($articles as $articles) : ?>
        <li class="place-article">
            <div><a class="a-article"href="article?articleId=<?= $articles->articleId ?>&amp;btnEnvoi=1">
                <h2 class="titre-article"><?= $articles->articleTitre ?></h2>
                <p><?= substr($articles->articleTexte, 0, 100) ?>...</p>
            </a></div>    
        </li>
    <?php endforeach ?>
</div>