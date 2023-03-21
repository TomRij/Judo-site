<?php
try{
    $dbh = new PDO('mysql:host=10.10.51.252;dbname=tom', "tom", "root",[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e){
    die ("Erreur ! :". $e->getMessage());
}
