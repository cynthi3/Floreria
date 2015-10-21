    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url()?>main/index">Biblioteca</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?=base_url()?>main/Ver_Libros">
              <span class="glyphicon glyphicon-book"></span> &nbsp;Libreria</a></li>
              
            <li><a href="<?=base_url()?>main/Buscar_Libros/1">
              <span class="glyphicon glyphicon-search"></span> &nbsp;Busqueda de un libro</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="<?=base_url()?>auth/logout">
                <button class="btn btn-sm btn-success">Ingresa</button>
              </a>
            </li>
            <li class="active">
              <a href="<?=base_url()?>auth/register">
                <button class="btn btn-sm btn-success">Registrate</button>
              </a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>