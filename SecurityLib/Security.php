<?php

namespace DAL {;

    require __DIR__."/../DAL/Connect.php";
    class AccesPassword {
        public $username;
        public $password;
        public function __construct($path) {
            $res = file_get_contents($path);
            $this->username = json_decode($res)->username;
            $this->password = json_decode($res)->password;
        }
        public function LoadDB(): Connect {
            return new Connect($this->username, $this->password);
        }
    }
}