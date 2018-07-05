<?php $this->layout('home', ['title' => 'Libreria Leos']) ?>

    <!-- <div class="ui menu container">

    <p>Infome de ventas</P>
    <a class="right item ui button">Ver productos</a>
       
    </div> -->


<div class="ui container piled segment">
<h1 class="ui item header"><?=$this->e($titulo)?> <?=$this->e($mes)?></h1>
    <div class="ui divider"></div>
    <a href="<?=$this->e($tipo)?>" class="ui button"><?=$this->e($boton)?></a>
    <a href="/venta.php" class="positive ui button">Agregar venta</a>
    <div class="ui divider"></div>
    <table class="ui unstackable table">
  <thead>
    <tr>
      <th>Fecha</th>
      <th>Codigo</th>
      <th>Descripcion</th>
      <th>cantidad</th>
      <th>Precio unitario</th>
      <th>Precio Total</th>
      <th>IVA Debito</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($ventas as $venta): ?>

<tr>
  <td><?=$this->e($venta->created_at)?></td>
  <td><?=$this->e($venta->cod_prod)?></td>
  <td><?=$this->e($venta->descripcion)?></td>
  <td><?=$this->e($venta->cantidad)?></td>
  <td>$ <?=$this->e($venta->precio)?></td>
  <td>$ <?=$this->e($venta->precioT)?></td>
  <td>$ <?=$this->e(number_format($venta->IVAD, 2))?></td>
 
</tr>


<?php endforeach ?> 
  </tbody>
  <tfoot>
    <tr>
    <th>Total</th>
    <th>-</th>
    <th>-</th>
    <th>-</th>
    <th>$ <?=$this->e($venU)?></th>
    <th>$ <?=$this->e($venT)?></th>
    <th>$ <?=$this->e($IVAT)?></th>
    </tr>
  </tfoot>
</table>
</div>


<?php $this->push('scripts') ?>
    <script>
        // Some JavaScript
    </script>
<?php $this->end() ?>