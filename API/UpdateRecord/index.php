<?php

require __DIR__."/../UpdateRecord.php";
new Api\UpdateRecord(file_get_contents('php://input')); // on crée une nouvelle instance de la classe UpdateRecord en lui passant en paramètre le contenu du flux php