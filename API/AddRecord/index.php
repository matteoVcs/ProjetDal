<?php

require __DIR__."/../AddRecord.php";
new Api\AddRecord(file_get_contents('php://input')); // on crée une nouvelle instance de la classe AddRecord en lui passant en paramètre le contenu du flux php