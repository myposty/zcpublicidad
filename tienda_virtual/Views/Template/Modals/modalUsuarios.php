<div class="modal fade" id="modalFormUsuario" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
      <!-------------------------form----------------------------------------->
          <form id="formUsuario" name="formUsuario" class="form-horizontal">
           <input type="hidden" id="idUsuario" name="idUsuario"  value=""> 
           <p class="text-primary">Todos los campos son obligatorios.</p>

           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="txtIdentificacion">Identificacion</label>
               <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion" required="">
             </div>
           </div>

            <div class="form-row">
               <div class="form-group col-md-6">
                 <label for="txtNombre">Nombres</label>
                 <input type="text" class="form-control" id="txtNombre" name="txtNombre" required="">
               </div>
          
               <div class="form-group col-md-6">
                 <label for="txtApellido">Apellidos</label>
                 <input type="text" class="form-control" id="txtApellido" name="txtApellido" required="">
               </div>
            </div>
     

             <div class="form-row">
               <div class="form-group col-md-6">
                 <label for="txtTelefono">Teléfono</label>
                 <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" required="">
               </div>
          
               <div class="form-group col-md-6">
                 <label for="txtEmail">Email</label>
                 <input type="email" class="form-control" id="txtEmail" name="txtEmail" required="">
               </div>
            </div>

             <div class="form-row">
               <div class="form-group col-md-6">
                 <label for="listRolid">Tipo Usuario</label>
                 <select class="form-control" id="listRolid" name="listRolid" required></select> 
               </div>
          
               <div class="form-group col-md-6">
                 <label for="listStatus">Status</label>
                <select class="form-control" id="listStatus" name="listStatus" required>
                  <option value="1">Activo</option>
                  <option value="2">Inactivo</option>
                </select>
               </div>
            </div>

             <div class="form-row">
               <div class="form-group col-md-6">
                 <label for="txtPassword">Password</label>
                 <input type="password" class="form-control" id="txtPassword" name="txtPassword">
               </div>
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
    <!------------------------------------------------------------------------>       
    </div>
    </div>
  </div>
</div>
        
 