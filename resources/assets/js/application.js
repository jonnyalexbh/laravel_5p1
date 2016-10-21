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
