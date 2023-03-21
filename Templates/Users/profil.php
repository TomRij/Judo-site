<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <link rel="stylesheet" href="CSS/flex.css">
    <title>Profil</title>
</head>
<body>
    <header>
        <ul class="flex space-evenly">
        <li class="menu"><a href="index.php">Home</a></li>
            <li  class="menu"><a href="profil.php">Page profil</a></li>
            <li  class="menu"><a href="connexion.php">Connexion</a></li>
            <li class="imageMenu"><a href="index.html"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="profil.html"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
        </ul>
    </header>
    <main>
        <h1>Votre page profil</h1>
        <ol>
            <div>
                <li>Nom</li>
                <p>de Mahieu</p>
            </div>
            <div>
                <li>Prénom</li>
                <p>Benoit</p>
            </div>
            <div>
                <li>Adresse postale</li>
                <p>Place de la route, 5151 Anvers</p>
            </div>
            <div>
                <li>Photo de profil</li>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <img id="imageProfil" src="Images/profil.png" alt="Mon image de profil">
            </div>
        </ol>
    </main>
    <footer>
        <div class="flex space-between align-item-center">
            <p><a href="https://www.christinesurges.be/" target="_blank" title="Aller à l'agence">Voir l'agence</a></p>
            <div>
                <img class="imageIcon" src="Images/icon1.jpg" alt="image twitter">
                <img class="imageIcon" src="Images/icon2.jpg" alt="image facebook">
                <img class="imageIcon" src="Images/icon3.jpg" alt="image google">
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>