<?php

$database = "mysql:dbname=taller2;host=127.0.0.1";
$user = "root";
$pass = "";

try {
    $dbh = new PDO($database, $user, $pass);
}

catch (Exception $e) {
    die("Error Al Conectar Con La Base De Datos");
}
?>