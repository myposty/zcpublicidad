<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
      <!-------------------------form----------------------------------------->

      <div class="tile">
        <div class="tile-body">
          <form id="formRol" name="formRol">
           <input type="hidden" id="idRol" name="idRol"  value=""> 
            <div class="form-group">
                  <label class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</font></font></label>
                  <input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Nombre del Rol">
            </div>
            
            <div class="form-group">
                  <label class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descripción</font></font></label>
                  <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="" placeholder="Descripción de Rol"></textarea>
            </div>
            <div class="form-group">
                    <label for="exampleSelect1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estado</font></font></label>
                    <select class="form-control" id="listStatus" name="listStatus">
                      <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Activo</font></font></option>
                      <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inactivo</font></font></option>
                    </select>
            </div>
            <div class="tile-footer">
                <button id="btnActionForm" class="btn btn-primary" type="submit">
                  <i class="fa fa-fw fa-lg fa-check-circle"></i>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;"><span id="btnText">Guardar</span></font>
                  </font>
                </button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cancelar</font></font></a>
            </div>
          </form>
        </div>
      </div>    
    <!------------------------------------->       
    </div>
    </div>
  </div>
</div>
        
 