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

$compras = $db->from('compras')->orderBy('created_at', 'desc')->where('mes')->is($mes)->select()->all();
$compU = $db->from('compras')->where('mes')->is($mes)->sum('costo');
$compT = $db->from('compras')->where('mes')->is($mes)->sum('costoT');
$IVAT  = number_format($db->from('compras')->where('mes')->is($mes)->sum('IVAC'), 2);

$tipo = '/informeC.php';
$boton = 'Informe General';
$titulo = 'Informe Mensual de Compras';

// Renderizado de la plantilla
echo $templates->render('infcompra', ['compras' => $compras, 'compU' => $compU, 
                                        'compT' => $compT, 'IVAT' => $IVAT, 'mes' => $mes, 
                                        'tipo' => $tipo, 'boton' => $boton, 'titulo' => $titulo]);