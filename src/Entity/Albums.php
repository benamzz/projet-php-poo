<?php

namespace App\Entity;

use DateTime;
use App\Entity\AbstractAlbums;


final class Albums extends AbstractAlbums{

    public $createdAt;

    public function __construct()
    {   
        $this->createdAt = new DateTime("now", new \DateTimeZone("Europe/Paris"));
    }
}