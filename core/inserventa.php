<?php


if (isset($_POST['codigo']) && !empty($_POST['codigo']) &&
isset($_POST['precio-venta']) && !empty($_POST['precio-venta']) &&
isset($_POST['descripcion']) && !empty($_POST['descripcion']) &&
isset($_POST['cantidad']) && !empty($_POST['cantidad']) &&
isset($_POST['fecha']) && !empty($_POST['fecha'])&&
isset($_POST['mes']) && !empty($_POST['mes'])
) {
include '../scr/autoload.php';

$connection = new Opis\Database\Connection('mysql:host=localhost;dbname=sccinventario', 'root', '');

$db = new Opis\Database\Database($connection);

$precioT = $_POST['precio-venta'] * $_POST['cantidad'];

// calculo del iva 
$iva1 = '1.13';
$iva2 = '0.13';
$iva3 = $precioT / $iva1;
$IVAC = $iva3 * $iva2;
// fin del calculo del iva

$res = $db->from('productos')
             ->where('codigo')->is($_POST['codigo']) //Alternatively: ->where('age')->eq(18)
             ->select()
             ->all();

foreach($res as $cant)
{
    $catidad = $cant->cantidad - $_POST['cantidad'];
    $db->update('productos')->where('codigo')->is($_POST['codigo'])->set(array(
        'cantidad' => $catidad
    ));
    
}

$db->insert(array(
    'cod_prod' => $_POST['codigo'],
    'descripcion' => $_POST['descripcion'],
    'cantidad' => $_POST['cantidad'],
    'precio' => $_POST['precio-venta'],
    'precioT' => $precioT,
    'IVAD' => $IVAC,
    'mes' => $_POST['mes'],
    'created_at' => $_POST['fecha']
                    ))->into('ventas');



} else {
    echo 'error';
}
header('Location: http://localhost/venta.php');
?>