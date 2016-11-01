<!--
* Jonnyalexbh
* @Descripcion: vista users
-->

@extends('layouts.default')

@section('css')
<!-- Multiple-select -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/css/multi-select.min.css" media="screen" rel="stylesheet" type="text/css">
@stop

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h2 class="page-title">Roles</h2>
      <p class="text-right"><a href="#" class="btn btn-warning">Crear Rol</a></p>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Description</th>
        <th>Permissions</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($roles as $role)
      <tr>
        <td>{{ $role->id }}</td>
        <td>{{ $role->name }}</td>
        <td>{{ $role->description }}</td>
        <td>
          <button id="jonny" type="button" class="btn btn-info btn-xs get-perms" roleId="{{ $role->id }}" data-toggle="modal" data-target=".permissions-modal">Permissions</button>
        </td>
        <td>
          <a href="#" class=""><i class="glyphicon glyphicon-pencil"></i></a>
          <a href="#" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?"><i class="glyphicon glyphicon-trash"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<!-- Modal -->
@include('roles.permissions.modal')

@stop

@section('js')
<!-- Multiple-select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.min.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function () {

  $.ajaxSetup(
    {
      headers:
      {
        'X-CSRF-Token': '{{ csrf_token() }}'
      }
    });


    $('#select-perms').multiSelect({

      selectableHeader: "<div class='custom-header'>Permisos no asignados</div>",
      selectionHeader: "<div class='custom-header'>Permisos asignados</div>",

      afterSelect: function (value){
        $.ajax({
          url: '{{ URL::to("/perms/assign") }}',
          type: 'POST',
          dataType: 'json',
          data : {
            permissionId: value[0],
            roleId: roleId
          }
        }).done(function (data) {

        });
      },

      afterDeselect: function (value){
        $.ajax({
          url: '{{ URL::to("/perms/remove") }}',
          type: 'DELETE',
          dataType: 'json',
          data: {
            permissionId: value[0],
            roleId: roleId
          }
        }).done(function (data) {

        });
      }

    });

    $('.get-perms').on('click', function(){

      roleId = $(this).attr('roleId');

      $('#select-perms').multiSelect('refresh');
      $('#select-perms option').attr('selected', false);

      $.ajax({
        url : '{{ URL::to("/perms/assigned") }}',
        type : 'GET',
        dataType: 'json',
        data : {roleId: roleId}
      }).done(function(data){
        $.each(data.assigned, function (index, value) {
          $('#select-perms option[value="'+value.id+'"]').attr('selected', true);
        });
        $('#select-perms').multiSelect('refresh');
      });
    });


  });
  </script>
  @stop
