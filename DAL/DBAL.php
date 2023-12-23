<?php

namespace DAL;
require __DIR__."/../SecurityLib/Security.php";
class DBAL
{
    private \PDO $db;
    private string $SettingsPath = __DIR__."/../Settings.json";

    public function __construct()
    {
        $file = file_get_contents($this->SettingsPath);
        $credentials = json_decode($file)->CredentialPath;
        $sec = new AccesPassword($credentials);
        $connect = $sec->LoadDB();
        $this->db = $connect->db;
    }

    public function AddRecord($table, $record): string {
        $query = "INSERT INTO $table (";
        foreach ($record as $key => $value) {
            $query .= "$key, ";
        }
        $query = substr($query, 0, -2);
        $query .= ") VALUES (";
        foreach ($record as $key => $value) {
            $query .= "'$value', ";
        }
        $query = substr($query, 0, -2);
        $query .= ")";
        $this->db->exec($query);
        return 'Record added successfully';
    }

    public function UpdateRecord($table, $record, $filter): string {
        $query = "UPDATE $table SET ";
        foreach ($record as $key => $value) {
            $query .= "$key = '$value', ";
        }
        $query = substr($query, 0, -2);
        $query .= " WHERE ";
        foreach ($filter as $key => $value) {
            $query .= "$key = '$value' AND ";
        }
        $query = substr($query, 0, -5);
        $this->db->exec($query);
        return 'Record updated successfully';
    }

    public function DeleteRecord($table, $filter): string {
        $query = "DELETE FROM $table WHERE ";
        foreach ($filter as $key => $value) {
            $query .= "$key = '$value' AND ";
        }
        $query = substr($query, 0, -5);
        $this->db->exec($query);
        return 'Record deleted successfully';
    }

    public function SelectRecord($table,$out, $filter) {
        $query = "SELECT ";
        foreach ($out as $value) {
            $query .= "$value, ";
        }
        $query = substr($query, 0, -2);
        $query .= " FROM $table WHERE ";
        foreach ($filter as $key => $value) {
            $query .= "$key = '$value' AND ";
        }
        $query = substr($query, 0, -5);
        $query .= ";";
        $result = $this->db->query($query);
        $result = $result->fetchAll(\PDO::FETCH_ASSOC);
        var_dump($query);
        return json_encode($result);
    }
}