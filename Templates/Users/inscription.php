<?php if(isset($_SESSION["user"])) :
else:?><h1 class="inscription-phrase text-align-center">Peu importe votre ceinture, que vous soyez rouge, noire ou blanche. Rejoignez notre communauté de judokas passionnés !</h1><?php endif ?>
        <form method="post" action="">
            <fieldset>
                <legend><?php if(isset($_SESSION["user"])) : ?>Modifier<?php else : ?>Inscription<?php endif ?></legend>
                <div>
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" placeholder="Nom" class="form-control" id="nom" name="nom" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->userNom ?><?php endif ?>">
                    <?php if(isset($messageError["nom"])) : ?><small><?= $messageError["nom"] ?></small><?php endif ?> 
                </div>
                <div>
                    <label for="Prenom" class="form-label">Prénom</label>
                    <input type="text" placeholder="Prénom" class="form-control" id="prenom" name="prenom" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->userPrenom ?><?php endif ?>">
                    <?php if(isset($messageError["prenom"])) : ?><small><?= $messageError["prenom"] ?></small><?php endif ?> 
                </div>  
                <div>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" placeholder="Email" class="form-control" id="email" name="email" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->userEmail ?><?php endif ?>">
                    <?php if(isset($messageError["email"])) : ?><small><?= $messageError["email"] ?></small><?php endif ?>
                </div>
                <div>
                    <label for="Login" class="form-label">Login</label>
                    <input type="text" placeholder="Login" class="form-control" id="login" name="login" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->userLogin ?><?php endif ?>">
                    <?php if(isset($messageError["login"])) : ?><small><?= $messageError["login"] ?></small><?php endif ?>
                </div>
                <div>
                    <label for="Password" class="form-label">Mot de passe</label>
                    <input type="password" placeholder="Mot de passe" class="form-control" id="password" name="password" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->userPassword ?><?php endif ?>">
                    <?php if(isset($messageError["password"])) : ?><small><?= $messageError["password"] ?></small><?php endif ?>
                </div>
                <div>
                    <label for="Ceinture" class="form-label">Ceinture</label>
                    <select type="ceinture" class="form-control" id="ceinture" name="ceinture">
                        <option value="1">Ceinture blanche</option>
                        <option value="2">Ceinture jaune</option>
                        <option value="3">Ceinture orange</option>
                        <option value="4">Ceinture verte</option>
                        <option value="5">Ceinture bleue</option>
                        <option value="6">Ceinture marron</option>
                        <option value="7">Ceinture noire</option>
                        <option value="13">Ceinture rouge, blanche</option>
                        <option value="14">Ceinture rouge</option>
                    </select>
                </div>
                <div>
                    <button name="btnEnvoi" type="submit" value="envoyer"><?php if(isset($_SESSION["user"])) : ?>Modifier<?php else : ?>Envoyer<?php endif ?></button>
                </div>
            </fieldset>
        </form>