
        <h1 class="profil-login titre-profil">Votre page de profil</h1>
        <ol class="profil-login profil-liste">
            <div class="profil-login">
                <li><h2>Bienvenue <?= $_SESSION["user"]->userLogin ?></h2></li>
            </div>
            <div class="profil-info">
                <li><img class="profil-photo-valeur" id="imageProfil" src="Images/profil.jpg" alt="Mon image de profil"></li>
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