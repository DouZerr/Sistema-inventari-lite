<?php $this->layout('home', ['title' => 'Libreria Leos']) ?>

 


<div class="ui container piled segment">
<h1 class="ui item header">Informe de IVA</h1>
    <div class="ui divider"></div>
    <table class="ui unstackable table">
    <thead>
    <tr>
      <th>Ventas Totales</th>
      <th>Compras Totales</th>
      <th>IVA DEBITO</th>
      <th>IVA CREDITO</th>
      <th><?=$this->e($opcion)?></th>
    </tr>
  </thead>
  <tbody>


            <tr>
            <td>$ <?=$this->e(number_format($venT, 2))?></td>
            <td>$ <?=$this->e(number_format($compT, 2))?></td>
            <td>$ <?=$this->e(number_format($IVADT, 2))?></td>
            <td>$ <?=$this->e(number_format($IVACT, 2))?></td>
            <td>$ <?=$this->e(number_format($IVA, 2))?></td>
             
            </tr>
  
          
    
  </tbody>

</table>
</div>


<?php $this->push('scripts') ?>
    <script>
        // Some JavaScript
    </script>
<?php $this->end() ?>