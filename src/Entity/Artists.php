<?php
namespace App\Entity;

use DateTime;
use App\Entity\Artists;
use App\Interface\InterfaceArtists;


class Artists implements InterfaceArtists{
    
    private $name;
    private $img; 

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    public function getImg() : string
    {
        return $this->img;
    }

    public function setImg(string $img) : self
    {
        $this->img = $img;
        return $this;
    }
}