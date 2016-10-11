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
            <h2 class="page-title">Genders</h2>
            <p class="text-right"><a href="{{ route('gender_create_path')}}" class="btn btn-warning">Create gender</a></p>
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
                <th>Fecha creacion</th>
                <th>Fecha actualizacion</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genders as $gender)
            <tr>
                <td>{{ $gender->id }}</td>
                <td>{{ $gender->name }}</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><a href="{{ route('gender_edit_path',$gender->id)}}">Editar</a></td>
                <td><a href="{{ route('gender_destroy_path',$gender->id)}}">Eliminar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop
