<!--
* Jonnyalexbh
* @Descripcion: vista login
-->

@extends('layouts.login')

@section('content')

<div>
  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form action="{{ route('log_store_path')}}" method="post">
          {{ csrf_field() }}
          <h1>Login Collage</h1>
          <div>
            <input type="text" name="email" class="form-control" placeholder="Username" />
          </div>
          <div>
            <input type="password" name="password" class="form-control" placeholder="Password" />
          </div>
          <div>
            <input class="btn btn-default btn-sm" value="Acceder" type="submit">
            <a class="reset_pass" href="#">¿Perdiste tu contraseña?</a>
          </div>

          <div class="clearfix"></div>

          <div class="separator">
            <p class="change_link">Eres nuevo en el sitio?
              <a href="#signup" class="to_register"> Crear una cuenta </a>
            </p>

            <div class="clearfix"></div> <br />

            <div>
              <h1><i class="fa fa-university" aria-hidden="true"></i> Collage !</h1>
              <p>© 2016 jonnyalex.bh desarrollador web Laravel 5.1. Todos los derechos reservados.</p>
            </div>
          </div>
        </form>
      </section>
    </div>
  </div>
</div>
@stop
