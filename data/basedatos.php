<?php
$db = new mysqli('localhost', 'root', 'lobito2405', 'inmobiliaria');
if(!$db){
    echo 'Error al conectar la base de datos';
    exit;
}
?>