<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>main/principal">Biblioteca Kronoz</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-book"></span>&nbsp;Libros<span class="caret"></span>
          </a>       
          <ul class="dropdown-menu">
            <li>
              <a href="<?=base_url()?>main/Agregar_Libro/1">Agregar libro</a>
            </li>
            <li>
              <a href="<?=base_url()?>main/Ver_Libros">Ver todos los libros</a>
            </li>
            <li>
              <a href="<?=base_url()?>main/Buscar_Libros/1">Buscar un libro</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-user"></span>&nbsp;Usuarios<span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?=base_url()?>main/ver_usuarios">Ver todos los usuarios</a>
            </li>
            <li>
              <a href="<?=base_url()?>main/Buscar_Usuario">Buscar usuario</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-list"></span>&nbsp;Reportes<span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?=base_url()?>main/VerCompras">Compras</a>
            </li>
            <li>
              <a href="<?=base_url()?>main/VerLibros">Existencia de libros</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active">
          <a href="<?=base_url()?>auth/logout">
            <span class="glyphicon glyphicon-arrow-left"></span>   Salir
          </a>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>