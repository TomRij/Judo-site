<?php
try{
    $dbh = new PDO('mysql:host=localhost;dbname=judo', "root", "root",[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e){
    die ("Erreur ! :". $e->getMessage());
}
