<?php

function conectarDB(): mysqli
{
    $db = mysqli_connect('localhost', 'root', '123456', 'connect');

    if (!$db) {
        echo "Error no se pudo conectar";
        exit;
    }

    return $db;
}
