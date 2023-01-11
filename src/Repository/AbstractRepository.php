<?php

namespace App\Repository;

use App\QueryBuilder;
use App\Repository\AbstractRepository;

abstract class AbstractsRepository {
    
    protected $db;
    protected $table;
    protected $queryBuilder;

    public function __construct()
    {
        $this->db = Connection::getConnection();
        $this->queryBuilder = new QueryBuilder();
    }

    public function findAll(): array
    {
        return $this->queryBuilder->select();
    }

}