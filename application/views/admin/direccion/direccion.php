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
                        <h1 class="box-title"><dt>Direcciones Registradas</dt></h1>
                      </div>
                    </div>
                  </div>
                </div><!-- /.with-border -->

                <table class="table table-responsive table-striped table-bordered table-hover table-condensed">
                                        <tr style="color:blue;">
                                            <td><strong>Dirección</strong></td>
                                            <td><strong>Estado</strong></td>
                                            <td><strong>Ciudad</strong></td>
                                            <td class="hidden-xs hidden-sm hidden-md"><strong>Código Postal</strong></td>
                                            <td><strong>Colonia</strong></td>
                                            <td class="hidden-xs hidden-sm"><strong>Calle</strong></td>
                                            <td class="hidden-xs hidden-sm"><strong>Número</strong></td>
                                            <!--<td class="hidden-xs hidden-sm">Status</td>-->
                                            <td colspan="2"><strong>Acciones</strong></td>
                                        </tr>
                                    <?php
                                    
                                    if(isset($direc)){
                                    foreach ($direc as $d){
                                        echo    "<tr><td>" . $d->iddireccion . "</td>" .
                                                "<td>" . $d->estado . "</td>" .
                                                "<td>" . $d->ciudad . "</td>" .
                                                "<td class='hidden-xs hidden-sm hidden-md'>" . $d->codigopostal . "</td>" .
                                                "<td>" . $d->colonia . "</td>" . 
                                                "<td>" . $d->calle ."</td>".
                                                "<td>" . $d->numero ."</td>".
                                                "<td class='hidden-xs hidden-sm'>";

                                                echo "<td class='hidden-xs hidden-sm'><a href='../Direccion/actualizardirecciones/$d->iddireccion'>Modificar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Direccion/actualizardirecciones/$d->iddireccion'><img src='<?php echo base_url();?>images/act.png'></a></td>".
                                                    "<td class='hidden-xs hidden-sm'><a href='../Direccion/delDireccion/$d->iddireccion'>Eliminar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Direccion/delDireccion/$d->iddireccion'><img src='<?php echo base_url();?>images/act.png'></a></td>";
                                    
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