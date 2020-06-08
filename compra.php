<?php

spl_autoload_register(function ($class) {
    if (file_exists('scr/'. $class . '.php')) {
        include 'scr/'. $class . '.php';
    }

});
include '/scr/autoload.php';

$templates = new League\Plates\Engine('templates');

$connection = new Opis\Database\Connection('mysql:host=localhost;dbname=sccinventario', 'root', '');

$db = new Opis\Database\Database($connection);

$productos = $db->from('productos')->select()->all();


use Cake\Chronos\Chronos;
$fecha = Chronos::now();
$time = new Chronos($fecha);
$mes = $time->month. '-' . $time->year; // calcula mes para efecto de iva


// Renderizado de la plantilla
echo $templates->render('newcompra', ['productos' => $productos, 'fecha' => $fecha, 'mes' => $mes]);