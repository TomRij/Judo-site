<?php 
    session_start();
    require_once "Config/dataBaseConnexion.php";
    /*$sth = $dbh->prepare("select * from biens");
    $sth->execute();

    print("toute les données:\n");
    $result = $sth->fetchAll();
    print_r($result);*/
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judo</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/flex.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <header class="menu">
        <a class="menu-a" href="/">Accueil</a> 
        
        <?php if(isset($_SESSION["user"])): ?>
            <a class="menu-a" class="menu-a" href="profil">Profil</a>
            <a class="menu-a" href="createArticle">Article</a>
            <a class="menu-a" href="deconnexion">Déconnexion</a>
        <?php else : ?>
            <a class="menu-a" href="connexion">Connexion</a>
        <?php endif ?>
    </header>
    <main>
        <?php
            require_once "Controllers/usersController.php";
            require_once "Controllers/articleController.php";

        ?>
    </main>
    <footer>
        <p>réalisé par Tom Rijckaert</p>
    </footer>    
</body>
</html>
