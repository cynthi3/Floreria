<nav role="navigation" class="nav asphalt" title="Floreria">
  <ul>
    <li><a href="<?=base_url()?>" ><i class="icon-leaf"></i>  Floreria</a></li>

  <li role="menu"><button>Arreglos</button>
    <ul role="menu" aria-expanded="false">
        <li ><a href="<?=base_url()?>">Agregar Arreglo Floral</a></li>          <!--poner la funcion que dirige a la vista -->
        <li><a href="<?=base_url()?>">Ver Arreglos Florales</a></li>            <!--poner la funcion que dirige a la vista -->
        <li><a href="<?=base_url()?>">Buscar Arreglo Floral</a></li>          <!--poner la funcion que dirige a la vista -->
      </ul>
  </li>

    <li role="menu"><button>Flores</button>
      <ul>
        <li><a href="<?=base_url()?>main/">Editar Catalogo</a></li>           <!--poner la funcion que dirige a la vista -->
        <li><a href="<?=base_url()?>main/">Ver Catalogo</a></li>              <!--poner la funcion que dirige a la vista -->
      </ul>
    </li>

    <li role="menu"><button>Articulos</button>
      <ul>
        <li><a href="<?=base_url()?>main/">Editar Catalogo</a></li>           <!--poner la funcion que dirige a la vista -->
        <li><a href="<?=base_url()?>main/">Ver Catalogo</a></li>              <!--poner la funcion que dirige a la vista -->
      </ul>
    </li>

  <li role="menu"><button>Clientes</button>
    <ul>
        <li><a href="<?=base_url()?>main/">Ver Lista de Clientes</a></li>       <!--poner la funcion que dirige a la vista -->
    </ul>
  </li>

    <li role="menu"><button>Empleados</button>
      <ul>
        <li><a href="<?=base_url()?>main/">Nuevo Empleado</a></li>              <!--poner la funcion que dirige a la vista -->
        <li><a href="<?=base_url()?>main/">Editar Empleados</a></li>            <!--poner la funcion que dirige a la vista -->
      </ul>
  </li>

      <li role="menu"><button>Proveedores</button>
      <ul>
        <li><a href="<?=base_url()?>main/">Nuevo Proveedor</a></li>              <!--poner la funcion que dirige a la vista -->
        <li><a href="<?=base_url()?>main/">Catalogo Proveedores</a></li>            <!--poner la funcion que dirige a la vista -->
      </ul>
  </li>

      <li role="menu"><button>Reportes</button>
        <ul>
        <li><a href="<?=base_url()?>main/">Ventas</a></li>                      <!--poner la funcion que dirige a la vista -->
        <li><a href="<?=base_url()?>main/">Clientes</a></li>                    <!--poner la funcion que dirige a la vista -->
        <li><a href="<?=base_url()?>main/">Inventario</a></li>                  <!--poner la funcion que dirige a la vista -->
        <li><a href="<?=base_url()?>main/">Pedidos</a></li>                     <!--poner la funcion que dirige a la vista -->
        </ul>
      </li>

    <li><a href="<?=base_url()?>index.php/auth/logout">Salir</a>
    </li>

  </ul>
</nav>