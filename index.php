<?php 
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
</head>
<body>
    <header id="menu">
        <a href="/">Accueil</a>
        <a href="connexion">Connexion</a>
        <a href="inscription">Inscription</a>
    </header>
    <main>
        <?php
            require_once "Controllers/judoController.php";
            require_once "Controllers/usersController.php";
        ?>
    </main>
    <footer>
        <h1>Footer</h1>
    </footer    
</body>
</html>
