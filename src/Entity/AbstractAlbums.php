<?php

namespace App\Entity;
use DateTime;
use App\Entity\AbstractAlbums;

abstract class AbstractAlbums
{
    protected string $author;
    protected string $title;
    protected bool $enVente;
    protected Date $createdAt;

    public function getAuthor(): ?string
    {
        return $this->author;
    }
    public function setAuthor(string $author) : self
    {
        $this->author = $author;
        return $this;
    }
    public function getTitle() : string
    {
        return $this->title;
    }
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }

    // public function getImg() : string
    // {
    //     return $this->img;
    // }
    // public function setImg(string $img) : self
    // {
    //     $this->img = $img;
    //     return $this;
    // }

    public function getEnVente(): ?bool
    {
        return $this->enVente;
    }
    public function setEnVente(string $enVente) : self
    {
        $this->enVente = $enVente;
        return $this;
    }

    public function getCreatedAt() : DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}