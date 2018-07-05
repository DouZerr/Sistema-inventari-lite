<?php $this->layout('home', ['title' => 'Libreria Leos']) ?>

    <!-- <div class="ui menu container">

    <p>Infome de ventas</P>
    <a class="right item ui button">Ver productos</a>
       
    </div> -->


<div class="ui container piled segment">
<h1 class="ui item header">Informe de Inventarios</h1>
    <div class="ui divider"></div>
    <a href="/nuevoproducto.php" class="fluid positive ui button">Agregar producto</a>
    <div class="ui divider"></div>
<table class="ui unstackable table">
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Existencias</th>
      <th>Precio de Compra</th>
      <th>Precio de Venta</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($productos as $producto): ?>

<tr>
  <td><?=$this->e($producto->codigo)?></td>
  <td><?=$this->e($producto->nombre)?></td>
  <td><?=$this->e($producto->cantidad)?></td>
  <td>$ <?=$this->e($producto->costo)?></td>
  <td>$ <?=$this->e($producto->preciov)?></td>
 
</tr>


<?php endforeach ?> 
  </tbody>
  <tfoot>
    <tr>
    <th>Total</th>
    <th>-</th>
    <th>-</th>
    <th>$ <?=$this->e($compU)?></th>
    <th>$ <?=$this->e($compT)?></th>
    </tr>
  </tfoot>
</table>
</div>


<?php $this->push('scripts') ?>
    <script>
        // Some JavaScript
    </script>
<?php $this->end() ?>