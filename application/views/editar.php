<header class="padded">
    <div class="container">
        <div class="row">
            <div class="one half">
                <a href="<?= base_url() ?>" target="_parent">
                    <img height="90px" src="<?= base_url() ?>images/logo-floreria.svg" alt="">
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
                <li><a href="<?= base_url() ?>" ><i class="icon-leaf"></i>  Floreria</a></li>

                <li role="menu"><button>Arreglos</button>
                    <ul role="menu">
                        <li><a href="<?= base_url() ?>">Agregar Arreglo Floral</a></li>          <!--poner la funcion que dirige a la vista -->
                        <li><a href="<?= base_url() ?>">Ver Arreglos Florales</a></li>            <!--poner la funcion que dirige a la vista -->
                        <li><a href="<?= base_url() ?>">Buscar Arreglo Floral</a></li>          <!--poner la funcion que dirige a la vista -->
                    </ul>
                </li>

                <li role="menu"><button>Articulos</button>
                    <ul>
                        <li><a href="<?= base_url() ?>controladorFloresYAccesorios/agregaAccesoriosAdmin">Editar Catalogo</a></li>           <!--poner la funcion que dirige a la vista -->
                        <li><a href="<?= base_url() ?>controladorFloresYAccesorios/catalogoAccesoriosAdmin">Ver Catalogo</a></li>              <!--poner la funcion que dirige a la vista -->
                    </ul>
                </li>

                <li role="menu"><button>Flores</button>
                    <ul>
                        <li><a href="<?= base_url() ?>controladorFloresYAccesorios/agregaFloresAdmin">Editar Catalogo</a></li>           <!--poner la funcion que dirige a la vista -->
                        <li><a href="<?= base_url() ?>controladorFloresYAccesorios/catalogoFloresAdmin">Ver Catalogo</a></li>              <!--poner la funcion que dirige a la vista -->
                    </ul>
                </li>

                <li role="menu"><button>Clientes</button>
                    <ul>
                        <li><a href="<?= base_url() ?>index.php/mantenimientoClientes">Ver Lista de Clientes</a></li>       <!--poner la funcion que dirige a la vista -->
                    </ul>
                </li>

                <li role="menu"><button>Empleados</button>
                    <ul>
                        <li><a href="<?= base_url() ?>">Nuevo Empleado</a></li>              <!--poner la funcion que dirige a la vista -->
                        <li><a href="<?= base_url() ?>">Editar Empleados</a></li>            <!--poner la funcion que dirige a la vista -->
                    </ul>
                </li>

                <li role="menu"><button>Proveedores</button>
                    <ul>
                        <li><a href="<?= base_url() ?>">Nuevo Proveedor</a></li>              <!--poner la funcion que dirige a la vista -->
                        <li><a href="<?= base_url() ?>">Catalogo Proveedores</a></li>            <!--poner la funcion que dirige a la vista -->
                    </ul>
                </li>

                <li role="menu"><button>Reportes</button>
                    <ul>
                        <li><a href="<?= base_url() ?>">Ventas</a></li>                      <!--poner la funcion que dirige a la vista -->
                        <li><a href="<?= base_url() ?>">Cliente</a></li>                    <!--poner la funcion que dirige a la vista -->
                        <li><a href="<?= base_url() ?>">Inventario</a></li>                  <!--poner la funcion que dirige a la vista -->
                        <li><a href="<?= base_url() ?>">Pedidos</a></li>                     <!--poner la funcion que dirige a la vista -->
                    </ul>
                </li>

                <li><a href="<?= base_url() ?>index.php/auth/logout">Salir</a>
                </li>

            </ul>
        </nav>

    </div>
</header>
<html>
 <head>
 <title><?=$page_title?></title>
 </head>
 
 <body>
 <div class=" red container">
      <div class="one centered mobile third">
       
 <form name="editar" action="http://localhost/floreria/index.php/mantenimientoClientes/editar" method="POST">
     <p class="red box">Editar clientes</p>
     <table>
 <tr>
 <td>Nombre(s): </td>
 <td><input name="txtNombre" value="<?=$usuario[0]->nombresCliente?>" type="text"/></td>
 </tr>
 <tr>
 <td>Apellido(s): </td>
 <td><input name="txtApellido" value="<?=$usuario[0]->apellidosCliente?>" type="text"/></td>
 </tr>
 <tr>
 <td>Direccion: </td>
 <td><input name="txtDireccion" value="<?=$usuario[0]->direccionCliente?>" type="text"/></td>
 </tr>
 <tr>
 <td>Tel. Celualar: </td>
 <td><input name="txtCelular" value="<?=$usuario[0]->telefonoCelular?>" type="text"/></td>
 </tr>
  <tr>
      
 <td>Tel. Casa: </td>
 <td><input name="txtCasa" value="<?=$usuario[0]->telefonoCasa?>" type="text"/></td>
 </tr>
 </table>
 <input type="hidden" name="idCliente" value="<?=$usuario[0]->idCliente?>"/>
 <input type="submit" value="Editar"/>
 </form>
    </div>       
  </div>
 </body>

</html>