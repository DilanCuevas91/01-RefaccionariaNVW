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
                        <h1 class="box-title"><dt>Categorías Registradas</dt></h1>
                      </div>
                    </div>
                  </div>
                </div><!-- /.with-border -->

                <table class="table table-responsive table-striped table-bordered table-hover table-condensed">
                                        <tr>
                                            <td colspan="5"><a href="agregarcategoria">Nueva Categoría</a></td>
                                        </tr>
                                        <tr style="color:blue;">
                                            <td><strong>Categoría</strong></td>
                                            <td><strong>Descripción</strong></td>
                                            <td colspan="2"><strong>Acciones</strong></td>
                                        </tr>
                                    <?php
                                    
                                    if(isset($cat)){
                                    foreach ($cat as $c){
                                        echo    "<tr><td>" . $c->nombrecategoria . "</td>" .
                                                "<td>" . $c->descripcion . "</td>";

                                                echo "<td class='hidden-xs hidden-sm'><a href='../Categoria/actualizarcategoria/$c->idcategoria'>Modificar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Categoria/actualizarcategoria/$c->idcategoria'><img src='<?php echo base_url();?>images/act.png'></a></td>".
                                                    "<td class='hidden-xs hidden-sm'><a href='../Categoria/delCategoria/$c->idcategoria'>Eliminar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Categoria/delCategoria/$c->idcategoria'><img src='<?php echo base_url();?>images/act.png'></a></td>";
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