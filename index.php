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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <header id="menu">
        <a href="/">Accueil</a> 
        
        <?php if(isset($_SESSION["user"])): ?>
            <a href="deconnexion">Déconnexion</a>
            <a href="profil">Profil</a>
        <?php else : ?>
            <a href="connexion">Connexion</a>
        <?php endif ?>
    </header>
    <main>
        <?php
            require_once "Controllers/judoController.php";
            require_once "Controllers/usersController.php";
        ?>
    </main>
    <footer>
        <h1>Footer</h1>
    </footer>    
</body>
</html>
