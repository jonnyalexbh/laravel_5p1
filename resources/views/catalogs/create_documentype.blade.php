<!--
* Jonnyalexbh
* @Descripcion: vista create user
-->

@extends('layouts.default')

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <h2 class="page-title">Create document type</h2>
    </div>
  </div>

  <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    <strong> Genero Agregado Correctamente.</strong>
  </div>

  @include('layouts.alerts.request')

  <div class="row">
    <div class="col-md-11">
      <form class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <div class="row">
          <!-- Text input-->
          <div class="col-md-12">
            <div class="form-group">
              <label for="nameDocumentype" class="col-md-2 control-label">Nombre:</label>
              <div class="col-md-8">
                <input name="nameDocumentype" id="nameDocumentype" type="text" class="form-control input-sm" >
              </div>
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <div class="col-md-12 text-center">
              <button type="button" id="saveDocumenttype" class="btn btn-warning">Guardar</button>
              <input type="reset" class="btn btn-default" value="Limpiar">
            </div>
          </div>
        </div><!-- /.row -->
      </form>
    </div>
  </div>

</div>

@stop
