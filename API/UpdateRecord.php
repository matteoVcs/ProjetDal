<?php

namespace API;
require __DIR__."/../DAL/DBAL.php";
require 'Service.php';
class UpdateRecord extends Service {

    function __construct($params) {
        parent::__construct($params, 3);
    }

    function Trig($params) {
        var_dump($this->AddRecord($params));
    }

    public function AddRecord($params): string {
        $table = $params->table;
        $record = $params->record;
        $filter = $params->filter;
        $dbal = new \DAL\DBAL();
        return $dbal->UpdateRecord($table, $record, $filter);
    }
}

/*
{
    "table": "personne",
    "record": {
        "nom": "Dupont2", (nouvelle valeur colone : valeur)
        "prenom": "Jean2"
    },
    "filter": {
        "nom": "Dupont", (ancienne valeur colone : valeur
        "prenom": "Jean"
    }
} json test pour UpdateRecord
 */