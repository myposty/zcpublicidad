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

        <?php 

        //dep($data);

         ?>
        <!------------------------------------------------------------->
        <div class="col-md-12">
          <div class="tile">
            <form action="" id="formPermisos" name="formPermisos">
            <input type="hidden" id="idrol" name="idrol" value="<?= $data['idrol'];?>" required=""> 
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">#</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Módulo</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ver</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Crear</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actualizar</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eliminar</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 

                    $no=1;
                    $modulos = $data['modulos'];
                    for ($i=0; $i < count($modulos) ; $i++) { 
                      
                      $permisos = $modulos[$i]['permisos'];
                      $rCheck = $permisos['r'] == 1 ? " checked" : "";
                      $wCheck = $permisos['w'] == 1 ? " checked" : "";
                      $uCheck = $permisos['u'] == 1 ? " checked" : "";
                      $dCheck = $permisos['d'] == 1 ? " checked" : "";

                      $idmod = $modulos[$i]['idmodulo'];
                    

                     ?>
                    <tr>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        <?= $no ?>
                        <input type="hidden" name="modulos[<?= $i; ?>][idmodulo]" value="<?= $idmod ?>">
                      </font></font></td>

                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      <?= $modulos[$i]['titulo']; ?>
                      </font></font></td>
                      
                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        <div class="toggle-flip">
                          <label>
                            <input type="checkbox" name="modulos[<?= $i; ?>][r]" <?= $rCheck ?> ><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                          </label>
                        </div>
                      </font></font></td>

                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        <div class="toggle-flip">
                          <label>
                            <input type="checkbox" name="modulos[<?= $i; ?>][w]" <?= $wCheck ?>><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                          </label>
                        </div>
                      </font></font></td>

                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        <div class="toggle-flip">
                          <label>
                            <input type="checkbox" name="modulos[<?= $i; ?>][u]" <?= $uCheck ?>><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                          </label>
                        </div>
                      </font></font></td>

                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        <div class="toggle-flip">
                          <label>
                            <input type="checkbox" name="modulos[<?= $i; ?>][d]" <?= $dCheck ?>><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                          </label>
                        </div>
                      </font></font></td>

                      



                    </tr>
                    <?php $no++;

                    } ?>
                    
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
 