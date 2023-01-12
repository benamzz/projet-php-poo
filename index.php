<?php

use mysqli;
use App\Entity\Albums;
use App\Entity\Artists;
use App\Controller\AlbumsController;
setlocale(LC_ALL, 'en_US.UTF-8');
date_default_timezone_set('Europe/Paris');
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING & ~E_USER_DEPRECATED);
ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';
var_dump($_POST['author']);
var_dump($_POST['title']);
// envoyer les donées
if(!empty($_POST['title']) and !empty($_POST['author'])) {
    $artist = new Artists(); // object
    $album = new Albums();

    $album->setTitle($_POST['title']);
    $albumTitle = $album->getTitle();  

    $album->setAuthor($_POST['author']);
    $albumAuthor = $album->getAuthor();  
    

    $artist->setAuthor($_POST['author']);
    $artistName = $artist->getAuthor();

    $artist->setFavoriteAlbum($_POST['title']);
    $artistAlbum = $artist->getFavoriteAlbum();

    $connection = new mysqli('localhost', 'root', 'root', 'spotifalsy'); 
    $statement = $connection->prepare("INSERT INTO albums (title, author, date) VALUES (?, ?, NOW())");
    $statement->bind_param("ss", $albumTitle, $albumAuthor);
    $statement->execute();
    $statement->close();
    header('Location: index.php');
    exit();
}

//obtenirlesMessage

// récupérer les données
$connection = new mysqli('localhost', 'root', 'root', 'spotifalsy'); 
$sql = "SELECT * FROM albums ORDER BY date DESC";
$result = $connection->query($sql);

$albums = [];
foreach($result as $album) {
    $albums[] = (new Albums())
                    ->setTitle($album['title'])
                    ->setAuthor($album['author']);
}
$result->free();
$connection->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Spotifalsy</title>
</head>
<body >
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center mb-3">Bienvenu dans mon Spotifalsy</h1>
                <h5  class="text-center mb-3">Spotifalsy vous permet d'ajouter des noms d'albums à une liste afin de pouvoir les écouter par la suite.</h5>
                <h6>Veuiller remplir le formulaire ci-dessous</h6>
                <form action="" method="post">
                    <div class="form-group m-2">
                        <input type="text" class="form-control" name="author" placeholder="Your artist name">
                    </div>
                    <div class="form-group m-2">
                        <input type="text" class="form-control" name="title" placeholder="Your album title">
                    </div>
                    <div class="form-group m-2">
                    <button type="submit" class="btn btn-primary col-12">Send</button>
                    </div>
                </form>
                <hr>
                <h2 class="text-center mb-3"> Liste de vos albums à écouter :</h2>                
                <?php foreach ($albums as $album) : ?> 
                    <p class="card-text"><?="L'artiste '". $album->getAuthor() . "' et son nouvel album intitulé '".$album->getTitle() . "' ont bien été ajoutés à la liste !!"?></p>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>