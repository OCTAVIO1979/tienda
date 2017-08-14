

<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">MicroElectronica</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Inicio</a></li>
      <li><a href="{{route('equipos.index')}}">Equipos</a></li>
      <li><a href="{{route('users.index')}}">Usuarios</a></li>

      <li><a href="{{route('tecnicos.index')}}">Tecnicos</a></li>
    </ul>
 

 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Registro</a></li>
      <li><a href="#">Inicio</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Nombre Usuario <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Perfil</a></li>
          <li><a href="#">Salir</a></li>
          
        </ul>
      </li>
    </ul>
  </div>
</nav>

