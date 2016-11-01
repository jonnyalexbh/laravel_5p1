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
* load permission
*/
