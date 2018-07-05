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

$compU = $db->from('productos')->sum('costo');
$compT = $db->from('productos')->sum('preciov');



// Render a template
echo $templates->render('infinventario', ['productos' => $productos, 'compU' => $compU, 'compT' => $compT]);