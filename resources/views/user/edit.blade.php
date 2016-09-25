<!--
* Jonnyalexbh
* @Descripcion: vista edit user
-->

@extends('layouts.default')

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <h2 class="page-title">Editar usuario</h2>
    </div>
  </div>
  
  @include('layouts.request')

  <div class="row">
    <div class="col-md-11">
      <form class="form-horizontal" action="{{ route('user_update_path',$user->id)}}" method="post">
        {{ csrf_field()}}
        {{ method_field('PUT') }}
        <div class="row">
          <!-- Text input-->
          <div class="col-md-12">
            <div class="form-group">
              <label for="inputLabel3" class="col-md-2 control-label">Nombre:</label>
              <div class="col-md-8">
                <input name="name" type="text" class="form-control input-sm" value="{{ $user->name }}" placeholder="">
              </div>
            </div>
          </div>
          <!-- Text input-->
          <div class="col-md-12">
            <div class="form-group">
              <label for="inputLabel3" class="col-md-2 control-label">Email:</label>
              <div class="col-md-8">
                <input name="email" type="text" class="form-control input-sm" value="{{ $user->email }}" placeholder="">
              </div>
            </div>
          </div>
          <!-- Text input-->
          <div class="col-md-12">
            <div class="form-group">
              <label for="inputLabel3" class="col-md-2 control-label">Password:</label>
              <div class="col-md-8">
                <input name="password" disabled type="password" class="form-control input-sm" value="{{ $user->password }}" placeholder="">
              </div>
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-warning" id="validar_Activos" id="validar_Activos">Generar informe</button>
              <input type="reset" class="btn btn-default" value="Limpiar">
            </div>
          </div>

        </div><!-- /.row -->
      </form>
    </div>
  </div>


</div>

@stop
