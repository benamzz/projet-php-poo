<?php
namespace App\Entity;

use DateTime;
use App\Entity\Artists;
use App\Interface\InterfaceArtists;


class Artists implements InterfaceArtists{
    
    private string $author;
    private string $favoriteAlbum;

    public function getAuthor() :string
    {
        return $this->author;
    }
    public function setAuthor(string $author) :self
    {
        $this->author = $author;
        return $this;
    }
    public function getFavoriteAlbum() : string
    {
        return $this->favoriteAlbum;
    }

    public function setFavoriteAlbum(string $favoriteAlbum) : self
    {
        $this->favoriteAlbum = $favoriteAlbum;
        return $this;
    }
}