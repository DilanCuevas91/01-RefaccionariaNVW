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
                        <h1 class="box-title"><dt>Actualizar Clientes</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start -->
                <?php echo form_open('Clientes/upCliente');?>
                <?php foreach($cliente as $c){ ?>

                  <input type="hidden" name ="idclientes" value="<?php echo $c->idclientes; ?>">
                  <div class="box-body">
                    <div class="form-group">
                        <label>Imagen:</label>
                        <input class="" type="file" name="imagen" value="<?php echo $c->imagencliente; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input class="form-control" type="text" name="nombre" value="<?php echo $c->nombrecliente; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Teléfono:</label>
                        <input class="form-control" type="number" name="telefono" value="<?php echo $c->telefono; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>E-mail:</label>
                        <input class="form-control" type="text" name="email" value="<?php echo $c->emailcliente; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input class="form-control" type="password" name="password" value="<?php echo $c->password; ?>" required>
                    </div>

                    <?php } ?>
                    <div class="with-border">
                      <div class="row">

                        <div class="col-md-3">
                          <br>
                          <div class="form-group">
                            <label>Dirección:</label>
                            <select class="" name="direccion">
                              <option selected="selected">Seleccione la dirección</option>
                               <?php
                                       if(isset($direc)){
                                          foreach ($direc as $p){
                                            echo    "<option value='$p->iddireccion'>" . 'Dirección ' . $p->iddireccion . "</option>";
                                                 }
                                          }else{
                                              echo "sin registros";
                                          }
                                          ?>
                            </select>
                            
                          </div>
                        </div>
                      
                      
                        <div class="col-md-8">
                          <div class="box-footer"><br>
                            <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#1'> Ver Direcciones</button>
                          </div>
                        </div>

                        <div class="modal fade" id="1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Direcciones</h4>
                                          </div>
                                          <div class="modal-body">
                                            <table class="table table-responsive table-striped table-bordered table-hover table-condensed">
                                              <tr style="color:blue;">
                                                  <td><strong>Dirección</strong></td>
                                                  <td><strong>Estado</strong></td>
                                                  <td><strong>Ciudad</strong></td>
                                                  <td class="hidden-xs hidden-sm hidden-md"><strong>Código Postal</strong></td>
                                                  <td><strong>Colonia</strong></td>
                                                  <td class="hidden-xs hidden-sm"><strong>Calle</strong></td>
                                                  <td class="hidden-xs hidden-sm"><strong>Número</strong></td>
                                                  <!--<td class="hidden-xs hidden-sm">Status</td>
                                                  <td colspan="2"><strong>Acciones</strong></td>-->
                                              </tr>
                                              <?php
                                              if(isset($direc)){
                                                foreach ($direc as $d){

                                              echo "<tr><td>" . $d->iddireccion . "</td>" .
                                                    "<td>" . $d->estado . "</td>" .
                                                    "<td>" . $d->ciudad . "</td>" .
                                                    "<td class='hidden-xs hidden-sm hidden-md'>" . $d->codigopostal . "</td>" .
                                                    "<td>" . $d->colonia . "</td>" . 
                                                    "<td>" . $d->calle ."</td>".
                                                    "<td>" . $d->numero ."</td>";

                                                  }
                                                }else{
                                                    echo "sin registros";
                                                }
                                              ?>
                                            </table>

                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
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
                  
                </form>
              </div><!-- /.box -->
            </div>
        </div>
</section>