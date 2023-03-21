        <form method="post" action="">
            <fieldset>
                <legend>Inscription</legend>
                <div class="mb-3">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" placeholder="Nom" class="form-control" id="Nom" name="txtNom" required <?php if (isset($_SESSION['user'])) : ?>value="<?= $_SESSION['user']->nomUser ?>" <?php endif ?>>
                </div>
                <div class="mb-3">
                    <label for="Prenom" class="form-label">Prénom</label>
                    <input type="text" placeholder="Prénom" class="form-control" id="Prenom" name="txtPrenom" required <?php if (isset($_SESSION['user'])) : ?>value="<?= $_SESSION['user']->nomUser ?>" <?php endif ?>>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" placeholder="Email" class="form-control" id="email" name="txtEmail" required <?php if (isset($_SESSION['user'])) : ?>value="<?= $_SESSION['user']->prenomUser ?>" <?php endif ?>>
                </div>
                <div class="mb-3">
                    <label for="Login" class="form-label">Login</label>
                    <input type="text" placeholder="Login" class="form-control" id="Login" name="txtLogin" required <?php if (isset($_SESSION['user'])) : ?>value="<?= $_SESSION['user']->loginUser ?>" <?php endif ?>>
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Mot de passe</label>
                    <input type="password" placeholder="Mot de passe" class="form-control" id="Password" name="txtMp" required <?php if (isset($_SESSION['user'])) : ?>value="<?= $_SESSION['user']->passWordUser ?>" <?php endif ?>>
                </div>
                <div>
                    <button name="btnEnvoi" class="btn btn-primary">Envoyer</button>
                </div>
            </fieldset>
        </form>