/*
* menu
*/

$(document).ready(function () {

  $(".ts-sidebar-menu li a").each(function () {
    if ($(this).next().length > 0) {
      $(this).addClass("parent");
    };
  })
  var menux = $('.ts-sidebar-menu li a.parent');
  $('<div class="more"><i class="fa fa-angle-down"></i></div>').insertBefore(menux);
  $('.more').click(function () {
    $(this).parent('li').toggleClass('open');
  });
  $('.parent').click(function (e) {
    e.preventDefault();
    $(this).parent('li').toggleClass('open');
  });
  $('.menu-btn').click(function () {
    $('nav.ts-sidebar').toggleClass('menu-open');
  });


  $('#zctb').DataTable();


  $("#input-43").fileinput({
    showPreview: false,
    allowedFileExtensions: ["zip", "rar", "gz", "tgz"],
    elErrorContainer: "#errorBlock43"
    // you can configure `msgErrorClass` and `msgInvalidFileExtension` as well
  });

});

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

//# sourceMappingURL=application.js.map
