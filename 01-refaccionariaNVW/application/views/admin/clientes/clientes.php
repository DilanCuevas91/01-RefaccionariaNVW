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
                                            <td colspan="5"><a href="agregarclientes">Nuevo</a></td>
                                        </tr>
                                        <tr style="color:blue;">
                                            <td class="hidden-xs hidden-sm hidden-md"><strong>Nombre</strong></td>
                                            <td><strong>Teléfono</strong></td>
                                            <td><strong>E-mail</strong></td>
                                            <td class="hidden-xs hidden-sm"><strong>Contraseña</strong></td>
                                            <td class="hidden-xs hidden-sm"><strong>Status<strong></td>
                                            <td class="hidden-xs hidden-sm"><strong>Privilegios<strong></td>
                                            <!--<td class="hidden-xs hidden-sm">Status</td>-->
                                            <td colspan="2"><strong>Acciones</strong></td>
                                        </tr>
                                    <?php
                                    
                                    if(isset($clients)){
                                    foreach ($clients as $c){
                                        echo    "<tr><td>" . $c->nombre . "</td>" .
                                                "<td class='hidden-xs hidden-sm hidden-md'>" . $c->telefono . "</td>" .
                                                "<td>" . $c->email . "</td>" . 
                                                "<td>" . $c->password ."</td>".
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

              </div><!-- /.box box-primary -->
            </div>
        </div>
</section>