<?php

namespace App\Entity;

use DateTime;
use App\Entity\AbstractAlbums;
use App\Interface\InterfaceArtists;

abstract class AbstractAlbums implements InterfaceArtists
{
    protected string $author;
    protected string $title;

    public function getAuthor() :string
    {
        return $this->author;
    }
    public function setAuthor(string $author) :self
    {
        $this->author = $author;
        return $this;
    }
    public function getTitle() : string
    {
        return $this->title;
    }
    public function setTitle(string $title) :self
    {
        $this->title = $title;
        return $this;
    }

}