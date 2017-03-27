<!--
* Jonnyalexbh
* @Descripcion: vista users angularjs
-->

@extends('layouts.default')

@section('css')

@stop

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h2 class="page-title">Usuarios AngularJs</h2>
      <p class="text-right"><a href="{{ route('user_create_path')}}" class="btn btn-warning">Crear usuario</a></p>
    </div>
  </div>
  <div ng-app="myApp" ng-controller="myCtrl">
    <table class="table-responsive table-striped table-condensed table-bordered" width="100%">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Email</th>
          <th colspan="2">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="row in data">
          <td>@{{row.id}}</td>
          <td>@{{row.name}}</td>
          <td>@{{row.email}}</td>
          <td><a href="">Editar</a></td>
          <td><a href="">Eliminar</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular.min.js" charset="utf-8"></script>
<script src="{{asset('js/users.js')}}" charset="utf-8"></script>
<script src="{{asset('js/services/user-service.js')}}" charset="utf-8"></script>
<script src="{{asset('js/services/test-factory.js')}}" charset="utf-8"></script>
@stop
