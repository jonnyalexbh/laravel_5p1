/*
* create documentype
*/

$("#saveDocumenttype").click(function(){
  var dato = $("#nameDocumentype").val();
  var route = "/catalogs/create/documentype";
  var token = $("#token").val();

  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    data:{name: dato},

    success:function(){
      $("#msj-success").fadeIn();
    },
    error:function(msj){
      $("#msj").html(msj.responseJSON.genre);
      $("#msj-error").fadeIn();
    }
  });

});

/*
* list documentype
*/

$(document).ready(function(){
  var tablaDatos = $("#datos");
  var route = "/catalogs/documentype";

  $("#datos").empty();
  $.get(route, function(res){
    $(res).each(function(key,value){
      tablaDatos.append("<tr><td>"+value.id+"</td><td>"+value.name+"</td><td><button class='btn btn-default'>Editar</button><button class='btn btn-warning'>Eliminar</button></td></tr>");
    });
  });
});

/*
* create role
*/

$('#saveRole').click(function(){

  var route = "/role/create/ajax";
  var name = $("#name").val();
  var displayName = $("#displayName").val();
  var description = $("#description").val();
  var token = $("#token").val();

  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    data:{name: name, display_name:displayName, description:description},
    success:function(data){

      $('.create-modal').modal('toggle');
      $addrow = "<tr>";
      $addrow += "<td>"+data.datos.id+"</td>";
      $addrow += "<td>"+data.datos.name+"</td>";
      $addrow += "<td>"+data.datos.description+"</td>";
      $addrow += "<td><button type='button' class='btn btn-info btn-xs get-perms' roleId="+data.datos.id+" data-toggle='modal' data-target='.permissions-modal'>Permissions</button></td>";
      $addrow += "<td><a href='#'>Editar</a></td>";
      $addrow += "<td><a href='#'>Eliminar</a></td>";
      $addrow += "</tr>";
      $('#roles').append($addrow);
    }

  });
});
