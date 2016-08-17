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
                                            <td><strong>Cliente quien hizó la venta</strong></td>
                                            <td><strong>Detalle de venta</strong></td>
                                            <td colspan="2"><strong>Acciones</strong></td>
                                        </tr>
                                    <?php
                                    
                                    if(isset($vents)){
                                    foreach ($vents as $v){
                                        echo    "<tr><td>" . $v->fechaventa . "</td>" .
                                                "<td>" ."$ ". $v->montofinal .".00"."</td>" . 
                                                "<td>" . $v->nombrecliente . "</td>".
                                                "<td><button type='button' class='btn btn-primary btn-xs' data-toggle='modal' data-target='#$v->iddetalleventas'> Detalle de venta</button> </td>";
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
                    

                                    <?php 
                                    if(isset($detalle)){
                                    foreach ($detalle as $d){
                                    ?>

                                    <!-- Modal -->
                                    <div class="modal fade" id="<?php echo $d->iddetalleventas?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h3 class="modal-title text-center" id="myModalLabel"><strong><em>Detalle de venta</em></strong></h3>
                                          </div>
                                          <div class="modal-body">
                                            <table class="table table-responsive table-striped table-bordered table-hover table-condensed">
                                            <tr><td>Venta: </td><td><?php echo $d->idventas?></td></tr>
                                            <tr><td>Fecha: </td><td><?php echo $d->fechaventa?></td></tr>
                                            <tr><td>Cantidad de productos:</td><td><?php echo $d->cantidaddetalle?></td></tr>
                                            <tr><td>Nombre de producto: </td><td><?php echo $d->nombreproducto?></td></tr>
                                            <tr><td>Código de producto: </td><td><?php echo $d->codigoproducto?></td></tr>
                                            <tr><td>Precio del producto: </td><td><?php echo $d->preciomenudeo?></td></tr>
                                            <tr><td>Total de venta: </td><td><?php echo $d->montofinal?></td></tr>
                                            </table>

                                              <h4><strong><em>Generar reporte del total de ventas</em></strong></h4>
                                                <?php echo form_open('Ventas/generar')?>
                                                <div class="radio">
                                                    <label>
                                                        <input name="formato" type="radio" value="xml" required>XML
                                                    </label>
                                                    <label>
                                                        <input name="formato" type="radio" value="xls" required>Excel
                                                    </label>
                                                </div>
                                                <input type="submit" value="Generar" class="center-block btn btn-success btn-xs" onclick="return confirm('¿Deseas Continuar?')">
                                                 </form>

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