
        <h1>Votre page profil</h1>
        <ol>
            <div>
                <li>Nom</li>
                <p><?= $_SESSION["user"]->userNom ?></p></p>
            </div>
            <div>
                <li>Prénom</li>
                <p><?= $_SESSION["user"]->userPrenom ?></p></p>
            </div>
            <div>
                <li>Photo de profil</li>
                <img id="imageProfil" src="Images/profil.png" alt="Mon image de profil">
            </div>
            <div>
                <h3>Modifier le Profil</h3>
                <a href="modifyProfil">Clique</a>
            </div>
            <div>
                <h3>Supprimer le Profil</h3>
                <a href="deleteProfil">Clique</a>
            </div>
        </ol>
    </main>
    <footer>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>