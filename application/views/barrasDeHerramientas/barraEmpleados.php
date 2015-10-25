<header class="padded">
  <div class="container">
    <div class="row">
      <div class="one half">
        <a href="<?=base_url()?>" target="_parent">
          <img height="90px" src="<?=base_url()?>images/logo-floreria.svg" alt="">
        </a>
      </div>

  <div class="one half" >
   <div class="row">
      <div class="three mobile twelfths skip-six">
      <i class="icon-twitter icon-3x"></i>
      <i class="icon-facebook-sign icon-3x"></i>  
       <i class="icon-github icon-3x"></i> 
      </div>
  </div>
  </div>

</div>

<nav role="navigation" class="nav asphalt" title="Floreria">
  <ul>
    <li><a href="<?=base_url()?>" ><i class="icon-leaf"></i>  Floreria</a></li>

  <li role="menu"><button>Catalogos</button>
    <ul role="menu" aria-expanded="false">
        <li ><a href="<?=base_url()?>">Catalogo Arreglos Florales</a></li>          <!--poner la funcion que dirige a la vista -->
        <li><a href="<?=base_url()?>">Catalogo de Flores</a></li>            <!--poner la funcion que dirige a la vista -->
        <li><a href="<?=base_url()?>">Buscar Arreglo Floral</a></li>          <!--poner la funcion que dirige a la vista -->
      </ul>
  </li>

    <li><button>Registrar Nuevo Cliente</button></li>

    <li><button>Nueva Venta</button></li>

  <li ><button>Pedidos</button></li>

    <li ><button>Reporte de Entregas</button></li>

    <li><a href="<?=base_url()?>index.php/auth/logout">Salir</a> </li>

  </ul>
</nav>

 </div>
</header>