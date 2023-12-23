<?php

namespace Api {
    abstract class Service {
        function __construct($params, $nbArg) {
            $array = json_decode($params);
                if (count((array)$array) <= $nbArg) {
                    if (count((array)$array) >= $nbArg) {
                        $this->Trig($array);
                    } else {
                        echo "Error: Not enough parameters";
                    }
                } else {
                    echo "Error: Too many parameters";
                }
        }
        abstract function Trig($params);
    }
}