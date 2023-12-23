<?php

namespace DAL;
use PDO;
class Connect
{
    public \PDO $db;
    private string $SettingsPath = __DIR__."/../Settings.json";
    public function __construct($username, $password) {
        $file = file_get_contents($this->SettingsPath);
        $host = json_decode($file)->host;
        $port = json_decode($file)->port;
        $dbname = json_decode($file)->dbname;
        $this->db = new PDO('mysql:dbname='.$dbname.';host='.$host.';port='.$port, $username, $password);
    }
}