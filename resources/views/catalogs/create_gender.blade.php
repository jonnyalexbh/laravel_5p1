<!--
* Jonnyalexbh
* @Descripcion: vista create user
-->

@extends('layouts.default')

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Create gender</h2>
        </div>
    </div>

    @include('layouts.alerts.request')

    <div class="row">
        <div class="col-md-11">
            <form class="form-horizontal" action="{{ route('gender_create_path')}}" method="post">
                {{ csrf_field()}}
                <div class="row">
                    <!-- Text input-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nameGender" class="col-md-2 control-label">Nombre:</label>
                            <div class="col-md-8">
                                <input name="nameGender" type="text" class="form-control input-sm" >
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-warning">Guardar</button>
                            <input type="reset" class="btn btn-default" value="Limpiar">
                        </div>
                    </div>
                </div><!-- /.row -->
            </form>
        </div>
    </div>


</div>

@stop
