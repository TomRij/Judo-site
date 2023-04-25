
        <h1 class="profil-login titre-profil">Votre page de profil</h1>
        <ol class="profil-login profil-liste">
            <div class="profil-login">
                <li><h2>Bienvenue <?= $_SESSION["user"]->userLogin ?></h2></li>
            </div>
            <div class="profil-info">
                <li><img class="profil-photo-valeur" id="imageProfil" src="Images/profil.jpg" alt="Mon image de profil"></li>
            </div>
            <div class="ceinture">
                <?php if ($_SESSION["user"]->ceintureId == 1):?><img src="Images/ceintures/ceinture_blanche.png" alt="ceinture blanche"><?php endif ?>
                <?php if ($_SESSION["user"]->ceintureId == 2):?><img src="Images/ceintures/ceinture_jaune.png" alt="ceinture jaune"><?php endif ?>
                <?php if ($_SESSION["user"]->ceintureId == 3):?><img src="Images/ceintures/ceinture_orange.png" alt="ceinture orange"><?php endif ?>
                <?php if ($_SESSION["user"]->ceintureId == 4):?><img src="Images/ceintures/ceinture_verte.png" alt="ceinture verte"><?php endif ?>
                <?php if ($_SESSION["user"]->ceintureId == 5):?><img src="Images/ceintures/ceinture_bleu.png" alt="ceinture bleu"><?php endif ?>
                <?php if ($_SESSION["user"]->ceintureId == 6):?><img src="Images/ceintures/ceinture_brune.png" alt="ceinture brune"><?php endif ?>
                <?php if ($_SESSION["user"]->ceintureId == 7):?><img src="Images/ceintures/ceinture_noir.png" alt="ceinture noir"><?php endif ?>
                <?php if ($_SESSION["user"]->ceintureId == 13):?><img src="Images/ceintures/ceinture_rouge_blanche.png" alt="ceinture rouge, blanche"><?php endif ?>
                <?php if ($_SESSION["user"]->ceintureId == 14):?><img src="Images/ceintures/ceinture_rouge.png" alt="ceinture rouge"><?php endif ?>
            </div>
            <div class="space-around">
                <li><a class="modifier-profil profil" href="modifyProfil">Modifier information</a></li>
                <li><a class="delete-profil profil"href="deleteProfil">Supprimer profil</a></li>
            </div>
        </ol>
    </main>
    <footer>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>