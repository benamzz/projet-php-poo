<?php
namespace App\Entity;

use DateTime;
use App\Entity\Artists;
use App\Interface\InterfaceArtists;


class Artists{
    
    private $name;

    public function getName() : ?string
    {
        return $this->name;
    }

    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}