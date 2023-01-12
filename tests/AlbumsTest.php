<?php

use App\Entity\Albums;
use PHPUnit\Framework\TestCase;

class AlbumsTest extends TestCase
{
    public function testCreatedAtIsDefinedAfterConstruct()
    {
        $albums = new Albums();
        $this->assertNotEmpty($albums->createdAt);
    }

    public function testGetAndSetAuthor()
    {
        $albums = new Albums();
        $expectedAuthor = "John Doe";
        $albums->setAuthor($expectedAuthor);
        $this->assertEquals($expectedAuthor, $albums->getAuthor());
    }
    public function testGetAndSetTitle()
    {
        $albums = new Albums();
        $expectedTitle = "Album Désolé pour le retard Title";
        $albums->setTitle($expectedTitle);
        $this->assertEquals($expectedTitle, $albums->getTitle());
    }
}