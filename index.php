<?php

spl_autoload_register(function ($class) {
    include 'scr/'. $class . '.php';
});


$templates = new League\Plates\Engine('templates');
use Cake\Chronos\Chronos;
$fecha = Chronos::now();

// Render a template
echo $templates->render('bienvenida', ['name' => $fecha]);