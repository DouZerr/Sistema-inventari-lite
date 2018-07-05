<?php $this->layout('home', ['title' => 'Libreria Leos']) ?>

    <!-- <div class="ui menu container">

    <p>Infome de ventas</P>
    <a class="right item ui button">Ver productos</a>
       
    </div> -->


<div class="ui container piled segment">
<h1 class="ui item header"><?=$this->e($titulo)?> <?=$this->e($mes)?></h1>
    <div class="ui divider"></div>
    <a href="<?=$this->e($tipo)?>" class="ui button"><?=$this->e($boton)?></a>
    <a href="/compra.php" class="positive ui button">Agregar Compras</a>
    <div class="ui divider"></div>
    <table class="ui unstackable table">
    <thead>
    <tr>
      <th>Fecha</th>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Cantidad</th>
      <th>Precio Unitario</th>
      <th>Precio Total</th>
      <th>IVA Credito</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($compras as $compra): ?>

            <tr>
              <td><?=$this->e($compra->created_at)?></td>
              <td><?=$this->e($compra->cod_prod)?></td>
              <td><?=$this->e($compra->descripcion)?></td>
              <td><?=$this->e($compra->cantidad)?></td>
              <td>$ <?=$this->e($compra->costo)?></td>
              <td>$ <?=$this->e($compra->costoT)?></td>
              <td>$ <?=$this->e(number_format($compra->IVAC, 2))?></td>
             
            </tr>
  
          
        <?php endforeach ?> 
    
  </tbody>
  <tfoot>
    <tr>
    <th>Total</th>
    <th>-</th>
    <th>-</th>
    <th>-</th>
    <th>$ <?=$this->e($compU)?></th>
    <th>$ <?=$this->e($compT)?></th>
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