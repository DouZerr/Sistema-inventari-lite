<html>
    <head>
      <link type="text/css" rel="stylesheet" href="asset/css/semantic.css"  media="screen,projection"/>

    <style type="text/css">
    body {
      background-color: #DADADA;
    }

  .main.container {
    margin-top: 7em;
  }
    </style>


 
      <title><?=$this->e($title)?></title>
 
    </head>
    <body>
    
<div class="ui secundary menu">
<div class="ui container">
<a href="/" class="header item">
<i class="terminal icon"></i>
        Libreria Leos
        </a>
  <a class="browse item">
    <i class="list icon"></i>
  </a>
  <div class="ui popup bottom left transition hidden" style="top: 553px; left: 1px; bottom: auto; right: auto; width: 670px;">
    <div class="ui two column divided grid">
      <div class="column">
        <h4 class="ui header">Informes</h4>
        <div class="ui link list">
          <a href="/informeV.php" class="item">Ventas</a>
          <a href="/informeC.php" class="item">Compras</a>
          <a href="/informeInv.php" class="item">Inventarios</a>
        </div>
      </div>
      <div class="column">
        <h4 class="ui header">Operaciones</h4>
        <div class="ui link list">
          <a href="/venta.php"  class="item">Venta</a>
          <a href="/compra.php" class="item">Compra</a>
          <a href="/IVA.php"  class="item">Calcular IVA</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

  
    <?=$this->section('content')?>
 

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="asset/js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="asset/js/semantic.js"></script>
      <?=$this->section('scripts')?>

      <script type="text/javascript">
        $('.menu .browse')
          .popup({
            inline     : true,
            hoverable  : true,
            position   : 'bottom left',
            delay: {
              show: 300,
              hide: 500
            }
          })
        ;
      
      </script>

      <div class="ui container tiny message">
        <div class="header">
          <i class="code branch icon"></i> Sistema Inventario e IVA - V0.1.1 Alpha,
          Sistema desarrollado para Sistemas Contables Computarizados.
        </div>
      </div>
    </body>
  </html>