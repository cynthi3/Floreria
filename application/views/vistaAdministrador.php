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
                        <li><a href="<?= base_url() ?>index.php/reporteClientes">Cliente</a></li>                    <!--poner la funcion que dirige a la vista -->
                        <li><a href="<?= base_url() ?>index.php/reporteInventario">Inventario</a></li>                  <!--poner la funcion que dirige a la vista -->
                        <li><a href="<?= base_url() ?>index.php/reportePedidos">Pedidos</a></li>                     <!--poner la funcion que dirige a la vista -->
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
        <title><?= $page_title ?></title>
    </head>
    <body>

        <form name="tabla" action="http://localhost/floreria/index.php/mantenimientoClientes/accion" method="POST">
            <div class= "orange container"> 
                <p class="red box">Clientes registrados en el sistema</p>
                <div class= "equalize row">
                    <div class="three fourths"> 
                        <div class= "container"> 
                            <table border="solid">
                                <table class="responsive " data-max="11" style="width : 75%; font-size: 15px;" > 
                                    <thead>
                                        <tr>
                                            <th style= "width: 15%;"> Nombre</th>
                                            <th style= "width: 15%;"> Nombre</th>
                                            <th style= "width: 15%;"> Apellido</th>
                                            <th style= "width: 20%;"> Direccion</th>
                                            <th style= "width: 20%;"> Tel. Celular</th>
                                            <th style= "width: 15%;"> Tel. Casa</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($usuario as $u): ?>
                                            <tr>
                                                <td style= "width: 20%;" ><input type="radio" name="editar" value="<?= $u->idcliente ?>"/></td>
                                                <td style= "width: 20%;" ><?= $u->nombresCliente ?></td>
                                                <td  style= "width: 20%;" ><?= $u->apellidosCliente ?></td>
                                                <td  style= "width: 20%;" ><?= $u->direccionCliente ?></td>
                                                <td  style= "width: 20%;" ><?= $u->telefonoCelular ?></td>
                                                <td  style= "width: 20%;" ><?= $u->telefonoCasa ?></td>
                                            </tr> 

                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                                <input type="submit" value="Editar Empleado" />
                        </div>
                    </div>

                    </form>
                    </body>

                    <div class="container"> 
                        <div class="one fourth padded equal">
                            <p class="red box">Agregar Clientes nuevos.<p>
                            <form name="alta" action="http://localhost/floreria/index.php/mantenimientoClientes/alta" method="POST">
                                <table class="responsive" data-max="1" style="width : 100%; font-size: 15px;" >
                                    <tr>
                                        <td>Nombre</td>
                                        <td style= "width: 70%;"><input type="text" name="txtNombre" /></td>
                                    </tr>
                                    <tr>
                                        <td>Apellidos</td>
                                        <td style= "width: 70%;"><input type="text" name="txtApellido" /></td>
                                    </tr>
                                    <tr>
                                        <td>Dirección</td>
                                        <td style= "width: 70%;"><input type="text" name="txtDireccion" /></td>
                                    </tr>
                                    <tr>
                                        <td style= "width: 70%;">Telefono celular</td>
                                        <td><input type="text" name="txtCelular" /></td>
                                    </tr>
                                    <tr>
                                        <td style= "width: 70%;">Telefono de casa</td>
                                        <td><input type="text" name="txtCasa" /></td>
                                    </tr>
                                </table>
                                <input type="submit" value="Alta Clientes"/>
                            </form>
                        </div>

                    </div>
                    </div>
                </div>
                </html>
                <html>
                    <body>
                        
                        <div class="orange container">
                            <div class="equalize row">
                                <div class="one third padded"></div>
                                <div class="one third padded"></div>
                                <div class="one third padded">
                                    <p style="" class=" red box">Eliminar un cliente</p>
                                    <form name="baja" action="http://localhost/floreria/index.php/mantenimientoClientes/baja" method="POST">
                                        <table>
                                            <tr>
                                                <td style= "width: 20%;" >Nombre: </td>
                                                <td style= "width: 20%;" ><input name="txtNombre" type="text"/></td>
                                            </tr>
                                        </table>
                                        <button class="error">
                                        <input type="submit" value="Eliminar cliente" />
                                        </button>
                                   </form>
                                </div>
                            </div>
                        </div>
                            </body>
                    
                </html>
                   

