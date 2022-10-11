<?php
$db = new PDO('mysql:host=localhost; dbname=inmobiliaria', 'root', 'lobito2405');
if(!$db){
    echo 'Error al conectar la Base de Datos';
    exit;
}