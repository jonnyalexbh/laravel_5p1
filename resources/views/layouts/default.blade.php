<!--
* Jonnyalexbh
* @Descripcion: vista default layouts
-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>College</title>
  <!-- application -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="{{asset('css/master.css')}}" media="screen" title="no title" charset="utf-8">
  <!-- font-awesome framework -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @yield('css')
</head>
<body>
  <div class="brand clearfix">
    <a href="#" class="logo"><img src="{{asset('images/logo.png')}}" class="img-responsive" alt=""></a>
    <span class="menu-btn"><i class="fa fa-bars"></i></span>
    <ul class="ts-profile-nav">
      <li><a href="#">Ajustes</a></li>
      <li class="ts-account">
        <a href="#"><img src="{{asset('images/ts-avatar.jpg')}}" class="ts-avatar hidden-side" alt=""> {!!Auth::user()->name!!}<i class="fa fa-angle-down hidden-side"></i></a>
        <ul>
          <li><a href="#">Mi cuenta</a></li>
          <li><a href="#">Editar cuenta</a></li>
          <li><a href="{{ route('log_logout_path')}}">Cerrar sesión</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <div class="ts-main-content">
    <nav class="ts-sidebar">
      <ul class="ts-sidebar-menu">
        <li class="ts-label">Buscar</li>
        <li>
          <input type="text" class="ts-sidebar-search" placeholder="Busca aquí...">
        </li>
        <li class="ts-label">PRINCIPAL</li>
        <li class="{{ Request::is('home') ? 'open' : '' }}"><a href="{{ route('home_index_path')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Materias</a></li>
        @if(Auth::user()->id == 1)
        <li><a href="#"><i class="fa fa-table"></i> Carreras</a></li>
        @endif
        <li class="{{ Request::is('catalogs*') ? 'open' : '' }}"><a href="#"><i class="fa fa-files-o"></i> Catálogos</a>
          <ul>
            @role('admin')
            <li><a href="{{ route('genders_index_path')}}">Generos</a></li>
            @endrole
            <li><a href="{{ route('documentype_index_path')}}">Tipos de documento</a></li>
          </ul>
        </li>
        <li class="{{ Request::is('user*') ? 'open' : '' }}"><a href="{{ route('users_index_path')}}"><i class="fa fa-users" aria-hidden="true"></i> Usuarios</a></li>
        <li class="#"><a href="{{ route('roles_index_path')}}"><i class="fa fa-users" aria-hidden="true"></i> Roles</a></li>
        <li><a href="#"><i class="fa fa-edit"></i> Tu Perfil</a></li>
        <li><a href="{{ route('log_logout_path')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Cerrar sesión</a></li>

        <!-- Account from above -->
        <ul class="ts-profile-nav">
          <li><a href="#">Help</a></li>
          <li><a href="#">Settings</a></li>
          <li class="ts-account">
            <a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
            <ul>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Edit Account</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
        </ul>

      </ul>
    </nav>

    <div class="content-wrapper">
      @yield('content')
    </div>

  </div>
  <!-- Jquery framework -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <!-- Js -->
  <script src="{{asset('js/application.js')}}" charset="utf-8"></script>
  <!-- Bootstrap framework -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" charset="utf-8"></script>
  @yield('js')
</body>
</html>
