<?php

namespace API;
require __DIR__."/../DAL/DBAL.php";
require 'Service.php';
class SelectRecord extends Service {

    function __construct($params) {
        parent::__construct($params, 3);
    }

    function Trig($params) {
        var_dump($this->SelectRecord($params));
    }

    public function SelectRecord($params): string {
        $table = $params->table;
        $out = $params->out;
        $filter = $params->filter;
        $dbal = new \DAL\DBAL();
        return $dbal->SelectRecord($table, $out, $filter);
    }
}

/*
{
    "table": "personne", (table a selectionner)
    "out": ["nom", "prenom"], (champs a selectionner)
    "filter": {
        "nom": "jean", (colone : valeur)
        "prenom": "michel"
    }
} json test pour SelectRecord
 */