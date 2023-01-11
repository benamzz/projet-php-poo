<?php

namespace App\Interface;

use App\Interface\InterfaceArtists;

Interface InterfaceArtists{
 
    public function getName() : string;

    public function setName(string $name) : self;

    public function getImg() : string;

    public function setImg(string $img) : self;

}