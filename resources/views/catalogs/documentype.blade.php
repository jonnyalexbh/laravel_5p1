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

</div>

@stop
