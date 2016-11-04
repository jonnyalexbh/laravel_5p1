<!--
* Jonnyalexbh
* @Descripcion: vista students
-->

@extends('layouts.default')

@section('content')
<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <h2 class="page-title">Estudiantes</h2>
      <p class="text-right"><a href="#" class="btn btn-warning">Crear estudiante</a></p>
    </div>
  </div>
  <table class="table-responsive table-striped table-condensed table-bordered" width="100%">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Genero</th>
        <th>Tipo documento</th>
        <th colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
      <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->genders->name}}</td>
        <td>{{$student->tp_docs->name}}</td>
        <td></td>
        <td>&nbsp;</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

@stop
