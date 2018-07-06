<?php $this->layout('home', ['title' => 'Libreria Leos']) ?>



<div class="ui container">
  <div class="ui five stackable cards">
    <div class="ui test card" data-content="Muestra los productos en inventario y la existencia">
      <!-- <div class="content">
          <a class="header" href="/informeInv.php">Inventarios</a>
      </div> -->
      <a class="image" href="/informeInv.php">
        <img src="/img/productos.png">
      </a>
      <div class="content">
        <a class="header" href="/informeInv.php">Inventarios</a>
        <!-- <div class="meta">
          <a>Muestra los productos en inventario y la existencia</a>
        </div> -->
      </div>
    </div>
    <div class="ui card">
      <!-- <div class="content">
          <a class="header" href="/informeV.php">Informe de ventas</a>
      </div> -->
    <a class="image" href="/informeV.php">
        <img src="/img/informeV.png">
      </a>
      <div class="content">
        <a class="header" href="/informeV.php">Informe de ventas</a>
        <!-- <div class="meta">
          <a>Muestra el movimiento de las ventas</a>
        </div> -->
      </div>
    </div>
    <div class="ui card">
      <!-- <div class="content">
          <a class="header" href="/informeC.php">Informe de Compras</a>
      </div> -->
      <a class="image" href="/informeC.php">
        <img src="/img/infomeCompra.png">
      </a>
      <div class="content">
        <a class="header" href="/informeC.php">Informe de Compras</a>
        <!-- <div class="meta">
          <a>Muestra el movimiento de las compras</a>
        </div> -->
      </div>
    </div>
    <div class="ui card">
      <!-- <div class="content">
          <a class="header" href="/compra.php">Ingresar de Compras</a>
      </div> -->
      <a class="image" href="/compra.php">
        <img src="/img/compra.png">
      </a>
      <div class="content">
        <a class="header" href="/compra.php">Ingresar de Compras</a>
        <!-- <div class="meta">
          <a>Introduce las compras realizadas</a>
        </div> -->
      </div>
    </div>
    <div class="ui card">
      <!-- <div class="content">
          <a class="header" href="/venta.php">Ingresar de ventas</a>
      </div> -->
      <a class="image" href="/venta.php">
        <img src="/img/venta.png">
      </a>
      <div class="content">
        <a class="header" href="/venta.php">Ingresar de ventas</a>
        <!-- <div class="meta">
          <a>Introduce la venta realizadas</a>
        </div> -->
      </div>
    </div>
    <div class="ui card">
      <!-- <div class="content">
          <a class="header" href="/IVA.php">Calculo del IVA</a>
      </div> -->
      <a class="image" href="/IVA.php">
        <img src="/img/calculo.png">
      </a>
      <div class="content">
        <a class="header" href="/IVA.php">Calculo del IVA</a>
        <!-- <div class="meta">
          <a>Determina IVA por pagar o Remanente de IVA</a>
        </div> -->
      </div>
    </div>
  </div>
</div>


<?php $this->push('scripts') ?>
    <script>
    // aca escribiria codigo
    </script>
<?php $this->end() ?>
