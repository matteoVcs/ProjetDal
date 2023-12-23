<?php

require __DIR__."/../SelectRecord.php";
new Api\SelectRecord(file_get_contents('php://input')); // on crée une nouvelle instance de la classe SelectRecord en lui passant en paramètre le contenu du flux php