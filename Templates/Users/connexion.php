<div>
            <form method="post" action="">
                <fieldset>
                    <legend>Se connecter</legend>
                    <div class="mb-3">
                        <label for="Login" class="form-label">Login</label>
                        <input type="text" placeholder="Login" class="form-control" id="Login" aria-describedby="emailHelp" name="login" required>
                        <?php if(isset($messageError["login"])) : ?><small><?= $messageError["login"] ?></small><?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Mot de passe</label>
                        <input type="password" placeholder="Mot de passe" class="form-control" id="Password" name="password" required>
                        <?php if(isset($messageError["password"])) : ?><small><?= $messageError["password"] ?></small><?php endif ?>
                    </div>
                    <div>
                        <button name="btnEnvoi" type="submit" >Envoyer</button>
                    </div>
                </fieldset>
            </form>
            <div>
                <h3>Pas encore inscrit ?</h3>
                <a href="inscription">Clique</a>
            </div>
        </div>
