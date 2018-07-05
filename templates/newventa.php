<?php $this->layout('home', ['title' => 'Libreria Leos']) ?>

 
<div class="ui raised very padded text container segment">
<!-- <a class="fluid positive ui button">Nuevo Producto</a> -->
<!-- <div class="ui divider"></div> -->
      <h1 class="ui item header">Ingresar Venta de Producto</h1>
<form class="ui form" action="/core/inserventa.php" method="POST">
  
<div class="field">
      <label>Producto</label>
      <select name="codigo" class="ui fluid dropdown">
        <option value="">seleciona el producto</option>

        <?php foreach($productos as $producto): ?>
            <option value="<?=$this->e($producto->codigo)?>">
            <?=$this->e($producto->nombre)?> en existencia <?=$this->e($producto->cantidad)?>
            </option>
          
        <?php endforeach ?> 
      
      </select>
    </div>

    <div class="field">
    <label>Decripcion</label>
    <input type="text" name="descripcion" placeholder="Descripcion del producto">
  </div>

    <div class="field">
    <label>Cantidad</label>
    <input type="text" name="cantidad" placeholder="cantidad de venta">
    </div>

  <div class="field">
    <label>Precio de Venta por unidad</label>
    <input type="text" name="precio-venta" placeholder="Precio del Producto">
  </div>

  <input type="hidden" name="fecha" value="<?=$this->e($fecha)?>">
  <input type="hidden" name="mes" value="<?=$this->e($mes)?>">
  

  <button class="ui primary button" type="submit">Guardar</button>
  <a href="/"class="ui negative button" type="submit">Cancelar</a>
</form>
</div>


<?php $this->push('scripts') ?>
    <script>
      
    </script>
<?php $this->end() ?>