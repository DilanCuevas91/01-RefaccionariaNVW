<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">

                <div class="with-border">
                  <div class="row">
                    <div class="box-header with-border">
                      <div class="col-md-offset-5 col-md-10">
                        <h1 class="box-title"><dt>Clientes Registrados</dt></h1>
                      </div>
                    </div>
                  </div>
                </div><!-- /.with-border -->

                <table class="table table-responsive table-striped table-bordered table-hover table-condensed">
                                        <tr>
                                            <td colspan="4"><a href="agregardireccion"><button type='button' class='btn btn-primary btn-xs'>Agregar nuevo cliente</button></a></td>
                                            <td colspan="4"><a href="<?php echo base_url();?>index.php/Backend/direccion"><button type='button' class='btn btn-primary btn-xs'>Registro de Direcciones</button></a></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"> </td>
                                        </tr>
                                        <tr style="color:blue;">
                                            <td><strong>Imagen</strong></td>
                                            <td><strong>Nombre</strong></td>
                                            <td class="hidden-xs hidden-sm hidden-md"><strong>Teléfono</strong></td>
                                            <td><strong>E-mail</strong></td>
                                            <td class="hidden-xs hidden-sm"><strong>Contraseña</strong></td>
                                            <td class="hidden-xs hidden-sm"><strong>Direccion</strong></td>
                                            <td class="hidden-xs hidden-sm"><strong>Status<strong></td>
                                            <td class="hidden-xs hidden-sm"><strong>Privilegios<strong></td>
                                            <!--<td class="hidden-xs hidden-sm">Status</td>-->
                                            <td colspan="2"><strong>Acciones</strong></td>
                                        </tr>
                                    <?php
                                    
                                    if(isset($clients)){
                                    foreach ($clients as $c){
                                        echo    "<tr><td>" . $c->imagencliente . "</td>" .
                                                "<td>" . $c->nombrecliente . "</td>" .
                                                "<td class='hidden-xs hidden-sm hidden-md'>" . $c->telefono . "</td>" .
                                                "<td>" . $c->emailcliente . "</td>" . 
                                                "<td>" . $c->password ."</td>".
                                                "<td><button type='button' class='btn btn-primary btn-xs' data-toggle='modal' data-target='#$c->iddireccion'> Dirección</button> </td>".
                                                "<td class='hidden-xs hidden-sm'>";
                                                $statu = ($c->status == 0) ? "inactivo" : "activo"; 
                                                echo "<a href='../Clientes/upStatus/$c->idclientes/$c->status'>$statu</a></td><td class='hidden-xs hidden-sm'>";

                                                $privilegio = ($c->privilegios == 0) ? "usuario" : "administrador"; 
                                                echo "<a href='../Clientes/upPrivilegios/$c->idclientes/$c->privilegios'>$privilegio</a></td>";

                                                echo "<td class='hidden-xs hidden-sm'><a href='../Clientes/actualizarcliente/$c->idclientes'>Modificar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Clientes/actualizarcliente/$c->idclientes'><img src='<?php echo base_url();?>images/act.png'></a></td>".
                                                    "<td class='hidden-xs hidden-sm'><a href='../Clientes/delCliente/$c->idclientes'>Eliminar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Clientes/delCliente/$c->idclientes'><img src='<?php echo base_url();?>images/act.png'></a></td>";
                                    
                                            /*echo "<td class='hidden-xs'><a href='frmUpUsuario/$c->idusuario'>Modificar</a></td>".
                                                     "<td class='hidden-xs'><a href='frmUpUsuario/$c->idusuario'><button class='btn btn-info visible-xs hidden-lg hidden-md hidden-sm' type='submit'>
                                                <span>M</span></button></a></td>"
                                                    . "<td><a href='delUsuario/$c->idusuario'>Eliminar</a></td></tr>";*/
                                        }
                                    }else{
                                        echo "sin registros";
                                    }
                                
                                    ?>
                </table>
                    
                                    <?php 
                                    if(isset($direc)){
                                    foreach ($direc as $d){
                                    ?>

                                    <!-- Modal -->
                                    <div class="modal fade" id="<?php echo $d->iddireccion?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>



                                            <h4 class="modal-title text-center" id="myModalLabel"><strong><em>Dirección</em></strong></h4>
                                          </div>
                                          <div class="modal-body">
                                            <table class="table table-responsive table-striped table-bordered table-hover table-condensed">
                                            <tr><td>Estado: </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $d->estado?></td></tr>
                                            <tr><td>Ciudad: </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $d->ciudad?></td></tr>
                                            <tr><td>Código Postal:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $d->codigopostal?></td></tr>
                                            <tr><td>Colonia: </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $d->colonia?></td></tr>
                                            <tr><td>Calle: </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $d->calle?></td></tr>
                                            <tr><td>Número: </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $d->numero?></td></tr>
                                            </table>

                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
              </div><!-- /.box box-primary -->
            </div>
        </div>
</section>