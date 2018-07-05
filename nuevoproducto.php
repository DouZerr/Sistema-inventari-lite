<?php

spl_autoload_register(function ($class) {
    if (file_exists('scr/'. $class . '.php')) {
        include 'scr/'. $class . '.php';
    }

});

$templates = new League\Plates\Engine('templates');

use Cake\Chronos\Chronos;
$fecha = Chronos::now();

// Render a template
echo $templates->render('newproduct', ['fecha' => $fecha]);