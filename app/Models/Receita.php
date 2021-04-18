<?php

namespace App\Models;

use Core\Database;

class Receita{
    private $table = "receita";

    function getAll(){
        $db = Database::getInstance();

        return $db->getList($this->table, "*");
    }

    function add($data){
        $db = Database::getInstance();

        return $db->insert($this->table, $data);
    }

    function get($r){
        $db = Database::getInstance();

        return $db->getlist($this->table, '*' ,$r);
    }
}