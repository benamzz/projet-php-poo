<?php

namespace App;

use App\Connection;


require_once __DIR__ . '/../vendor/autoload.php';

/**
 * 
 * la classe qui se charge de faire des requetes SQL
 */
abstract class AbstractQueryBuilder { 

    private $connection;
    protected $table;

    public function __construct() 
    {
        $this->connection = Connection::getConnection();
    }
    
    public function select(string $order = "date DESC") : array
    {
        $sql = "SELECT * from {$this->table}";
        if($order) {
            $sql .= " ORDER BY $order";
        }
        return $this->connection->query($sql)->fetch_all();
    }

    public function insert(string $title, string $author)
    {
        $query = $this->connection->prepare("INSERT INTO albums SET  title = :title, author = :author, created_at = NOW()");
        $query->execute(compact('title', 'author'));
    }

    
}
