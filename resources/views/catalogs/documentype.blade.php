<!--
* Jonnyalexbh
* @Descripcion: vista genders
-->

@extends('layouts.default')

@section('content')
@include('layouts.alerts.errors')
<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <h2 class="page-title">Document type</h2>
      <p class="text-right"><a href="{{ route('documentype_create_path')}}" class="btn btn-warning">Create document type</a></p>
    </div>
  </div>

  <table class="table-responsive table-striped table-condensed table-bordered" width="100%">
    <thead>
      <th>Id</th>
      <th>Nombre</th>
      <th>Acciones</th>
    </thead>

    <tbody id="datos"></tbody>
    
  </table>

</div>

@stop
