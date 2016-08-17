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
                        <h1 class="box-title"><dt>Abonos registrados a provedores</dt></h1>
                      </div>
                    </div>
                  </div>
                </div><!-- /.with-border -->

                <table class="table table-responsive table-striped table-bordered table-hover table-condensed">
                                        <!--<tr>
                                            <td colspan="5"><a href="agregarproveedores">Nuevo</a></td>
                                        </tr>-->
                                        <tr style="color:blue;">
                                            <td><strong>Nota</strong></td>
                                            <td class="hidden-xs hidden-sm hidden-md"><strong>Fecha de abono</strong></td>
                                            <td><strong>Abono</strong></td>
                                            <td colspan="2"><strong>Acciones</strong></td>
                                        </tr>
                                    <?php
                                    
                                    if(isset($abonoprovee)){
                                    foreach ($abonoprovee as $ap){
                                        echo    "<tr><td>" . $ap->notapagar . "</td>" . 
                                                "<td class='hidden-xs hidden-sm hidden-md'>" . $ap->fechaabono . "</td>" .
                                                "<td>" . $ap->cantidadabono . "</td>";
                                                /*
                                                "<td class='hidden-xs hidden-sm'>";
                                                $statu = ($p->status == 0) ? "inactivo" : "activo"; 
                                                echo "<a href='../Proveedores/upStatus/$p->idclientes/$p->status'>$statu</a></td><td class='hidden-xs hidden-sm'>";

                                                $privilegio = ($p->privilegios == 0) ? "usuario" : "administrador"; 
                                                echo "<a href='../Proveedores/upPrivilegios/$p->idclientes/$p->privilegios'>$privilegio</a></td>";
                                                */

                                                echo "<td class='hidden-xs hidden-sm'><a href='../Abonoproveedores/actualizarabonoproveedores/$ap->idabonoproveedores'>Modificar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Abonoproveedores/actualizarabonoproveedores/$ap->idabonoproveedores'><img src='<?php echo base_url();?>images/act.png'></a></td>".
                                                    "<td class='hidden-xs hidden-sm'><a href='../Abonoproveedores/delAbonoproveedor/$ap->idabonoproveedores'>Eliminar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Abonoproveedores/delAbonoproveedor/$ap->idabonoproveedores'><img src='<?php echo base_url();?>images/act.png'></a></td>";
                                    
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

              </div><!-- /.box box-primary -->
            </div>
        </div>
</section>