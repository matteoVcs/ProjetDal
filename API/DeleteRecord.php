<?php

namespace API;
require __DIR__."/../DAL/DBAL.php";
require 'Service.php';
class DeleteRecord extends Service {

    function __construct($params) {
        parent::__construct($params, 2);
    }

    function Trig($params) {
        var_dump($this->DeleteRecord($params));
    }

    public function DeleteRecord($params): string {
        $table = $params->table;
        $filter = $params->filter;
        $dbal = new \DAL\DBAL();
        return $dbal->DeleteRecord($table, $filter);
    }
}

/*
 {
    "table": "personne",
    "filter": {
        "nom": "test",
        "prenom": "test2"
    }
} json test pour Delete un record
 */