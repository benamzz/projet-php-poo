<?php

namespace App\Interface;

use App\Interface\InterfaceArtists;

Interface InterfaceArtists{
 
    public function getAuthor() :string;

    public function setAuthor(string $author) :self;

}