<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-10">
              <!-- general form elements -->
              <div class="box box-primary">

                <div class="with-border">
                  <div class="row">
                    <div class="box-header with-border">
                      <div class="col-md-offset-5 col-md-10">
                        <h1 class="box-title"><dt>Actualizar Deudas con proveedores</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start -->
                <?php echo form_open('Deudasproveedores/upDeudasproveedores');?>
                <?php foreach($deudasprovee as $dp){ ?>

                  <input type="hidden" name ="iddeudaspagar" value="<?php echo $dp->iddeudaspagar; ?>">
                  <div class="box-body">
                    <div class="form-group">
                        <label>Nota:</label>
                        <input class="form-control" type="text" name="nota" value="<?php echo $dp->notapagar; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Cantidad:</label>
                        <input class="form-control" type="number" name="cantidad" value="<?php echo $dp->cantidaddeuda; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Fecha:</label>
                        <input class="form-control" type="date" name="fecha" value="<?php echo $dp->fechadeuda; ?>" required>
                    </div>
                    <div class="with-border">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Proveedor:</label>
                            <select class="" name="proveedores">
                              <option selected="selected">Seleccione el proveedor</option>
                               <?php
                                       if(isset($proveedor)){
                                          foreach ($proveedor as $p){
                                            echo    "<option value='$p->idproveedores'>" . $p->nombreproveedor . "</option>";
                                                 }
                                          }else{
                                              echo "sin registros";
                                          }
                                          ?>
                            </select>
                            
                          </div>
                        </div>
                      
                      
                        <div class="col-md-9">
                          <div class="box-footer"><br>
                            <button><a href="<?php echo base_url();?>index.php/Backend/agregarproveedores"><span class="glyphicon glyphicon-plus"></span>Agregar Proveedores</a></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--<div class="form-group">
                        <label>Escribe de nuevo tu Contraseña:</label>
                        <input class="form-control" type="password2" name="password2" placeholder="Introduce nuevamente el password del cliente" required>
                    </div>-->
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                  <?php } ?>
                </form>
              </div><!-- /.box -->
            </div>
        </div>
</section>