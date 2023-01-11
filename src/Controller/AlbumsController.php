<?php


namespace App\Controller;

use App\Connection;
use App\AbstractQueryBuilder;
use App\Controller\AlbumsController;
use App\Repository\AbstractRepository;




class AlbumsController{
    protected $db;
    protected $table;
    protected $queryBuilder;

    public function __construct()
    {
        $this->db = Connection::getConnection();
        $this->queryBuilder = new AbstractQueryBuilder();
    }

    public function findAll(): array
    {
        return $this->queryBuilder->select();
    }

}