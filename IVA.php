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

$venT = $db->from('ventas')->where('mes')->is($mes)->sum('precioT');
$IVADT = $db->from('ventas')->where('mes')->is($mes)->sum('IVAD');
$compT = $db->from('compras')->where('mes')->is($mes)->sum('costoT');
$IVACT = $db->from('compras')->where('mes')->is($mes)->sum('IVAC');

 
if ($IVACT < $IVADT) {
    $IVA = $IVADT - $IVACT;
    $opcion = 'IVA a pagar';

   
} else {
    $IVA = $IVACT - $IVADT;
    $opcion = 'Remanente de IVA';
   
}


// Render a template
echo $templates->render('infiva', ['compT' => $compT, 'venT' => $venT, 
                                    'IVADT' => $IVADT, 'IVACT' => $IVACT, 
                                     'IVA' => $IVA, 'opcion' => $opcion]);