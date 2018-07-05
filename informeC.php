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

$compras = $db->from('compras')->orderBy('created_at', 'desc')->select()->all();
$compU = $db->from('compras')->sum('costo');
$compT = $db->from('compras')->sum('costoT');
$IVAT  = number_format($db->from('compras')->sum('IVAC'), 2);

use Cake\Chronos\Chronos;
$fecha = Chronos::now();
$time = new Chronos($fecha);
$mes = $time->year; // calcula mes para efecto de iva
$tipo = '/informeCM.php';
$boton = 'Informe Mensual';
$titulo = 'Informe General de Compras';

// Render a template
echo $templates->render('infcompra', ['compras' => $compras, 'compU' => $compU, 
                                        'compT' => $compT, 'IVAT' => $IVAT, 'mes' => $mes, 
                                        'tipo' => $tipo, 'boton' => $boton, 'titulo' => $titulo]);