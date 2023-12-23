<?php

require __DIR__."/../DeleteRecord.php";
new Api\DeleteRecord(file_get_contents('php://input')); // on crée une nouvelle instance de la classe DeleteRecord en lui passant en paramètre le contenu du flux php