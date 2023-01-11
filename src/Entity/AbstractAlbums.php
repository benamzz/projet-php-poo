<?php

namespace App\Entity;
use DateTime;
use App\Entity\AbstractAlbums;

abstract class AbstractAlbums
{
    protected $author;
    protected $title;

    public function getAuthor()
    {
        return $this->author;
    }
    public function setAuthor( $author)
    {
        $this->author = $author;
        return $this;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title) 
    {
        $this->title = $title;
        return $this;
    }

}