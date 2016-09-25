<!--
* Jonnyalexbh
* @Descripcion: vista users
-->

@extends('layouts.default')

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <h2 class="page-title">Usuarios</h2>
      <p class="text-right"><a href="{{ route('user_create_path')}}" class="btn btn-warning">Crear usuario</a></p>
    </div>
  </div>
  @if(Session::has('message'))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{Session::get('message')}}
  </div>
  @endif
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
      @foreach ($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td><a href="{{ route('user_edit_path',$user->id)}}">Editar</a></td>
        <td><a href="{{ route('user_destroy_path',$user->id)}}">Eliminar</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

@stop
