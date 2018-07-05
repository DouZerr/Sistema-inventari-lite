<?php $this->layout('home', ['title' => 'Libreria Leos']) ?>

 
<div class="ui raised very padded text container segment">
<!-- <a class="fluid positive ui button">Nuevo Producto</a> -->
<!-- <div class="ui divider"></div> -->
      <h1 class="ui item header">Ingresar Producto</h1>
<form class="ui form" action="/core/inserprod.php" method="POST">
  <div class="field">
    <label>Codigo del Producto</label>
    <input type="text" name="codigo" placeholder="codigo del Producto">
  </div>
  <div class="field">
    <label>Nombre del Producto</label>
    <input type="text" name="producto-name" placeholder="Nombre del Producto">
  </div>
  <div class="field">
    <label>Precio del Producto</label>
    <input type="text" name="precio-prod" placeholder="Precio del Producto">
  </div>
  <div class="field">
    <label>Cantidad</label>
    <input type="text" name="cantidad" placeholder="cantidad de compras">
  </div>
  <div class="field">
    <label>Precio de venta</label>
    <input type="text" name="precio-venta" placeholder="Precio de venta">
  </div>
  <input type="hidden" name="fecha" value="<?=$this->e($fecha)?>">

  <button class="ui primary button" type="submit">Guardar</button>
  <a href="/"class="ui negative button" type="submit">Cancelar</a>
</form>
</div>


<?php $this->push('scripts') ?>
    <script>
      
    </script>
<?php $this->end() ?>