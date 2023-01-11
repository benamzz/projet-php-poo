<?php

use mysqli;

$connection = new mysqli ('localhost', 'root', 'root');// ma connexion à MYSQL
if($connection->connect_error){
    die('Erreurr : ' .$connection->connect_error);
}
echo 'connexion à la db réussie';
$sql = "CREATE DATABASE IF NOT EXISTS spotifalsy";
// j'execute la requete

if($connection->query($sql) === TRUE) { // on verifie que la connexion a bien été établie
    echo "La base de données a bien été créée". PHP_EOL;
} else { // sinon j'affiche l'erreur
    echo "erreur de connection $connection->error";
}
// if(condition) { j'execute le code } else { j'execute un autre code d'erreur}

// création des tables

// table messages
$sql1 = "CREATE TABLE IF NOT EXISTS spotifalsy.albums (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title text,
    author text,
    date DATETIME NOT NULL
    )";

// table users
$sql = "CREATE TABLE IF NOT EXISTS spotifalsy.artists (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    author VARCHAR(30) NOT NULL,
    )";

if($connection->query($sql1) === TRUE) { // on verifie que la connexion a bien été établie
    echo "La table albums a bien été créée ". PHP_EOL;
} else { // sinon j'affiche l'erreur
    echo $connection->error;
}

if($connection->query($sql) === TRUE) { // on verifie que la connexion a bien été établie
    echo "La table artists a bien été créée". PHP_EOL;
} else { // sinon j'affiche l'erreur
    echo $connection->error;
}
