<?php

namespace App\controllers;

use Aura\SqlQuery\Exception;
use Aura\SqlQuery\QueryFactory;
use Delight\Auth\Auth;
use PDO;
class KirillRemnant
{
    private $pdo, $auth;

    public function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=oop;", "root", "");
        $this->queryFactory = new QueryFactory('mysql');
        $this->auth = new Auth($this->pdo);
    }

}