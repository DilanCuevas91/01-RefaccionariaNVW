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
                        <h1 class="box-title"><dt>Comentarios Registrados</dt></h1>
                      </div>
                    </div>
                  </div>
                </div><!-- /.with-border -->

                <table class="table table-responsive table-striped table-bordered table-hover table-condensed">
                                        <!--<tr>
                                            <td colspan="5"><a href="agregarproveedores">Nuevo</a></td>
                                        </tr>-->
                                        <tr style="color:blue;">
                                            <td class="hidden-xs hidden-sm hidden-md"><strong>Nombre</strong></td>
                                            <td><strong>E-mail</strong></td>
                                            <td><strong>Comentario</strong></td>
                                            <!--<td><strong>Status</strong></td>-->
                                            <td colspan="2"><strong>Acciones</strong></td>
                                        </tr>
                                    <?php
                                    
                                    if(isset($coments)){
                                    foreach ($coments as $c){
                                        echo    "<tr><td>" . $c->nombrecomentario . "</td>" .
                                                "<td class='hidden-xs hidden-sm hidden-md'>" . $c->emailcomentario . "</td>" .
                                                "<td>" . $c->comentario . "</td>";
                                                /*"<td class='hidden-xs hidden-sm'>";
                                                $statu = ($c->status == 0) ? "despublicado" : "publicado"; 
                                                echo "<a href='../Comentarios/upStatus/$c->idcomentarios/$c->status'>$statu</a></td><td class='hidden-xs hidden-sm'>";

                                                $privilegio = ($c->privilegios == 0) ? "usuario" : "administrador"; 
                                                echo "<a href='../Comentarios/upPrivilegios/$c->idComentarios/$c->privilegios'>$privilegio</a></td>";
                                                */

                                                echo "<td class='hidden-xs hidden-sm'><a href='../Comentarios/delComentario/$c->idcomentarios'>Eliminar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Comentarios/delComentario/$c->idcomentarios'><img src='<?php echo base_url();?>images/act.png'></a></td>";
                                    
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