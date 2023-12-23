<?php

namespace API;
require __DIR__."/../DAL/DBAL.php";
require 'Service.php';
class AddRecord extends Service {

    function __construct($params) {
        parent::__construct($params, 2);
    }

    function Trig($params) {
        var_dump($this->AddRecord($params));
    }

    public function AddRecord($params): string {
        $table = $params->table;
        $record = $params->record;
        $dbal = new \DAL\DBAL();
        return $dbal->AddRecord($table, $record);
    }
}

/*
{
    "table": "personne",
    "record": {
        "nom": "test",
        "prenom": "test2"
    }
} json test pour AddRecord
 */