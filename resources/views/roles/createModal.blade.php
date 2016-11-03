<div class="modal fade create-modal" tabindex="-1" role="dialog" aria-labelledby="permissions">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Crear rol</h4>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-md-11">
            <form class="form-horizontal" action="{{ route('role_store_path')}}" method="post">
              {{ csrf_field()}}
              <div class="row">
                <!-- Text input-->
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Nombre:</label>
                    <div class="col-md-8">
                      <input name="name" id="name" type="text" class="form-control input-sm" placeholder="">
                    </div>
                  </div>
                </div>
                <!-- Text input-->
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="displayName" class="col-md-4 control-label">Mostrar nombre:</label>
                    <div class="col-md-8">
                      <input name="displayName" id="displayName" type="text" class="form-control input-sm" placeholder="">
                    </div>
                  </div>
                </div>
                <!-- Text input-->
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="description" class="col-md-4 control-label">Descripción:</label>
                    <div class="col-md-8">
                      <input name="description" id="description" type="text" class="form-control input-sm" placeholder="">
                    </div>
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-warning" id="saveRole">Guardar</button>
                    <input type="reset" class="btn btn-default" value="Limpiar">
                  </div>
                </div>

              </div><!-- /.row -->
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
