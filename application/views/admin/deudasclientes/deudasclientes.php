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
                        <h1 class="box-title"><dt>Deudas de clientes</dt></h1>
                      </div>
                    </div>
                  </div>
                </div><!-- /.with-border -->

                <table class="table table-responsive table-striped table-bordered table-hover table-condensed">
                                        <tr>
                                            <td colspan="4"><a href="agregardeudasclientes"><button type='button' class='btn btn-primary btn-xs'>Agregar nueva deuda</button></a></td>
                                            <td colspan="3"><a href="<?php echo base_url();?>index.php/Backend/abonoclientes"><button type='button' class='btn btn-primary btn-xs'>Historial de abonos</button></a></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"> </td>
                                        </tr>
                                        <tr style="color:blue;">
                                            <td><strong>Nota</strong></td>
                                            <td class="hidden-xs hidden-sm hidden-md"><strong>Fecha</strong></td>
                                            <td><strong>Cantidad</strong></td>
                                            <td class="hidden-xs hidden-sm hidden-md"><strong>Cliente deudor</strong></td>
                                            <td colspan="3"><strong>Acciones</strong></td>
                                        </tr>
                                    <?php
                                    
                                    if(isset($deudascli)){
                                    foreach ($deudascli as $dc){
                                        echo    "<tr>
                                                 <td class='hidden-xs hidden-sm hidden-md'>" . $dc->notacobrar . "</td>" .
                                                "<td class='hidden-xs hidden-sm hidden-md'>" . $dc->fechadeuda . "</td>" .
                                                "<td>" . $dc->cantidaddeuda . "</td>".
                                                "<td>" . $dc->nombrecliente . "</td>";
                                                echo "<td class='hidden-xs hidden-sm'><a href='../Backend/agregarabonoclientes/$dc->iddeudascobrar'><button type='button' class='btn btn-primary btn-xs'> Agregar Abono</button></a></td>".
                                                    //"<td class='hidden-xs hidden-sm'><a href='../Deudasproveedores/actualizardeudasproveedores/$dc->iddeudascobrar'>Historial de Abonos</a></td>".
                                                    "<td class='hidden-xs hidden-sm'><a href='../Deudasclientes/actualizardeudasclientes/$dc->iddeudascobrar'>Modificar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Deudasclientes/actualizardeudasclientes/$dc->iddeudascobrar'><img src='<?php echo base_url();?>images/act.png'></a></td>".
                                                    "<td class='hidden-xs hidden-sm'><a href='../Deudasclientes/deldeudasclientes/$dc->iddeudascobrar'>Eliminar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Deudasclientes/deldeudasclientes/$dc->iddeudascobrar'><img src='<?php echo base_url();?>images/act.png'></a></td>";
                                    
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