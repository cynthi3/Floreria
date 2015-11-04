<header class="padded">
  <div class="container">
    <div class="row">
      <div class="one half">
        <a href="<?=base_url()?>" target="_parent">
          <img height="90px" src="<?=base_url()?>images/logo-floreria.svg" alt="">
        </a>
      </div>

  <div class="one half" align="right">
   <div class="row">
      
      <i class="icon-twitter icon-3x"></i>
      <i class="icon-facebook-sign icon-3x"></i>  
       <i class="icon-github icon-3x"></i> 
     
  </div>
  </div>

</div>

<nav role="navigation" class="nav asphalt" title="Floreria">
  <ul>
    <div class="one half">
    <li><a href="<?=base_url()?>" ><i class="icon-leaf"></i>  Floreria</a></li>

  <li role="menu"><button>Arreglos Florales</button>
    <ul role="menu" aria-expanded="false">

      <li ><a href="<?=base_url()?>">Aniversario</a></li>          <!--poner la funcion que dirige a la vista -->
      <li ><a href="<?=base_url()?>">Cumpleaños</a></li>          <!--poner la funcion que dirige a la vista -->
      <li ><a href="<?=base_url()?>">Bodas</a></li>          <!--poner la funcion que dirige a la vista -->
      <li ><a href="<?=base_url()?>">Graduacion</a></li>          <!--poner la funcion que dirige a la vista -->
      <li><a href="<?=base_url()?>">Funerarios</a></li>            <!--poner la funcion que dirige a la vista -->
      <li><a href="<?=base_url()?>">Especiales</a></li>          <!--poner la funcion que dirige a la vista -->
    </ul>
  </li>

    <li ><a href="<?=base_url()?>"><i class=" icon-shopping-cart"></i>  Carrito de Compras</a></li>
    </div>

    <div class="one fourth two-up-small-tablet" ></div>
      <div class="one fourth two-up-small-tablet">
    <li><a href="<?=base_url()?>index.php/auth/logout" class="error button">Salir</a></li>
    </div>
  </ul>
</nav>

 </div>
</header>