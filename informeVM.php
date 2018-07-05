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

use Cake\Chronos\Chronos;
$fecha = Chronos::now();
$time = new Chronos($fecha);
$mes = $time->month. '-' . $time->year; // calcula mes para efecto de iva

$ventas = $db->from('ventas')->orderBy('created_at', 'desc')->where('mes')->is($mes)->select()->all();
$venU = $db->from('ventas')->where('mes')->is($mes)->sum('precio');
$venT = $db->from('ventas')->where('mes')->is($mes)->sum('precioT');
$IVAT = $db->from('ventas')->where('mes')->is($mes)->sum('IVAD');

$tipo = '/informeV.php';
$boton = 'Informe General';
$titulo = 'Informe Mensual de Ventas';



// Render a template
echo $templates->render('infventa', ['ventas' => $ventas, 'venU' => $venU, 'venT' => $venT, 'IVAT' => $IVAT,
                                    'mes' => $mes, 'tipo' => $tipo, 'boton' => $boton, 'titulo' => $titulo]);