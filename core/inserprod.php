<?php


if (isset($_POST['codigo']) && !empty($_POST['codigo']) &&
isset($_POST['producto-name']) && !empty($_POST['producto-name']) &&
isset($_POST['precio-prod']) && !empty($_POST['precio-prod']) &&
isset($_POST['cantidad']) && !empty($_POST['cantidad']) &&
isset($_POST['precio-venta']) && !empty($_POST['precio-venta']) &&
isset($_POST['fecha']) && !empty($_POST['fecha'])
) {
include '../scr/autoload.php';

$connection = new Opis\Database\Connection('mysql:host=localhost;dbname=sccinventario', 'root', '');

$db = new Opis\Database\Database($connection);


$db->insert(array(
    'codigo' => $_POST['codigo'],
    'nombre' => $_POST['producto-name'],
    'cantidad' => $_POST['cantidad'],
    'costo' => $_POST['precio-prod'],
    'preciov' => $_POST['precio-venta'],
    'created_at' => $_POST['fecha']
                    ))->into('productos');


}
header('Location: http://localhost/nuevoproducto.php');
?>