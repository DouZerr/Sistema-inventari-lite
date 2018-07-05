<?php

include '/scr/autoload.php';

$connection = new Opis\Database\Connection('mysql:host=localhost;dbname=sccinventario', 'root', '');

$db = new Opis\Database\Database($connection);

$db->schema()->create('productos', function($table){
    $table->integer('id')->autoincrement();
    $table->string('codigo');
    $table->string('nombre');
    $table->string('cantidad');
    $table->string('costo');
    $table->string('preciov');
    $table->timestamp('created_at');
});

$db->schema()->create('compras', function($table){
    $table->integer('id')->autoincrement();
    $table->string('cod_prod');
    $table->string('descripcion');
    $table->string('cantidad');
    $table->string('costo');
    $table->string('costoT');
    $table->string('IVAC');
    $table->string('mes');
    $table->timestamp('created_at');
});

$db->schema()->create('ventas', function($table){
    $table->integer('id')->autoincrement();
    $table->string('cod_prod');
    $table->string('cantidad');
    $table->string('descripcion');
    $table->string('precio');
    $table->string('precioT');
    $table->string('IVAD');
    $table->string('mes');
    $table->timestamp('created_at');
});
