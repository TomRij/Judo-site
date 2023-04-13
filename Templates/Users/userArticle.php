<h1 class="titre">Vos articles</h1>
<!-- mettre les articles créer par l'utilisateur-->
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
            <button name="btnArticle" type="submit" value="envoyer"><?php if(isset($_SESSION["article"])) : ?><?php else : ?>Créer<?php endif ?></button>
        </div>
    </fieldset>
</form>