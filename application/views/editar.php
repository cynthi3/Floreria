<html>
 <head>
 <title><?=$page_title?></title>
 </head>
 <body>
 <form name="editar" action="http://localhost/floreria/index.php/mantenimientoClientes/editar" method="POST">
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
 </body>
</html>