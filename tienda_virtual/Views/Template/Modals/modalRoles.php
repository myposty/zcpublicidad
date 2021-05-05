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
        



    <!--=======================================================================================-->

    <!-- Extra large modal -->


<div class="modal fade modalPermisos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    
      <div class="modal-header">
        <h5 class="modal-title" >Permisos Roles de Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-abel="Close">
          <span aria-hidden="true">X</span>
        </button>
      </div>

      <div class="modal-body">
        <!------------------------------------------------------------->
        <div class="col-md-12">
          <div class="tile">
            <form action="" id="formPermisos" name="formPermisos">  
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">#</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modulo</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Leer</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Escribir</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actualizar</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eliminar</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuario</font></font></td>

                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        <div class="toggle-flip">
                          <label>
                            <input type="checkbox"><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                          </label>
                        </div>
                      </font></font></td>
                      
                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        <div class="toggle-flip">
                          <label>
                            <input type="checkbox"><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                          </label>
                        </div>
                      </font></font></td>

                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        <div class="toggle-flip">
                          <label>
                            <input type="checkbox"><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                          </label>
                        </div>
                      </font></font></td>

                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        <div class="toggle-flip">
                          <label>
                            <input type="checkbox"><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                          </label>
                        </div>
                      </font></font></td>

                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        <div class="toggle-flip">
                          <label>
                            <input type="checkbox"><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                          </label>
                        </div>
                      </font></font></td>

                       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        <div class="toggle-flip">
                          <label>
                            <input type="checkbox"><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                          </label>
                        </div>
                      </font></font></td>



                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-------------------------------------------------------->
              <div class="text-center">
                <button class="btn btn-success" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</font></font></button>

                <button class="btn btn-danger" type="button" data-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><i class="app-menu__icon fas fa-sign-out-alt"></i>Cerrar</font></font></button>
              </div>
            </form>
            <!--------------------------------------------------------->
          </div>
        </div>
        <!-------------------------------------------------------------->
      </div>
    
    </div>
  </div>
</div>
 