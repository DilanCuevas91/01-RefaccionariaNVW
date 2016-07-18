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
                        <h1 class="box-title"><dt>Ventas Registradas</dt></h1>
                      </div>
                    </div>
                  </div>
                </div><!-- /.with-border -->

                <table class="table table-responsive table-striped table-bordered table-hover table-condensed">
                                       
                                        <tr style="color:blue;">
                                            <td class="hidden-xs hidden-sm hidden-md"><strong>Fecha de Venta</strong></td>
                                            <td><strong>Monto Final</strong></td>
                                            <td colspan="2"><strong>Acciones</strong></td>
                                        </tr>
                                    <?php
                                    
                                    if(isset($vents)){
                                    foreach ($vents as $v){
                                        echo    "<tr><td>" . $v->fecha . "</td>" .
                                                "<td>" ."$ ". $v->montofinal .".00"."</td>";
                                                /*
                                                "<td class='hidden-xs hidden-sm'>";
                                                $statu = ($p->status == 0) ? "inactivo" : "activo"; 
                                                echo "<a href='../Proveedores/upStatus/$p->idclientes/$p->status'>$statu</a></td><td class='hidden-xs hidden-sm'>";

                                                $privilegio = ($p->privilegios == 0) ? "usuario" : "administrador"; 
                                                echo "<a href='../Proveedores/upPrivilegios/$p->idclientes/$p->privilegios'>$privilegio</a></td>";
                                                */

                                                 /*"<td class='hidden-xs hidden-sm'><a href='../Productos/actualizarproductos/$v->idproductos'>Modificar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Productos/actualizarproductos/$v->idproductos'><img src='<?php echo base_url();?>images/act.png'></a></td>".*/
                                                  echo  "<td class='hidden-xs hidden-sm'><a href='../Ventas/delVenta/$v->idventas'>Eliminar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Ventas/delVenta/$v->idventas'><img src='<?php echo base_url();?>images/act.png'></a></td>";
                                    
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