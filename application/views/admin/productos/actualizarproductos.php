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
                        <h1 class="box-title"><dt>Actualizar Productos</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start -->
                <?php echo form_open('Productos/upProducto');?>
                <?php foreach($producs as $p){ ?>

                  <input type="hidden" name ="idproductos" value="<?php echo $p->idproductos; ?>">
                  <div class="box-body">
                    <div class="form-group">
                        <label>Imagen:</label>
                        <input class="" type="file" name="imagen" value="<?php echo $p->imagenproducto; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input class="form-control" type="text" name="nombre" value="<?php echo $p->nombreproducto; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Código del producto:</label>
                        <input class="form-control" type="text" name="codigo" value="<?php echo $p->codigoproducto; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Marca:</label>
                        <input class="form-control" type="text" name="marca" value="<?php echo $p->marca; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Unidad de Medida:</label>
                        <input class="form-control" type="text" name="unidadmedida" value="<?php echo $p->unidadmedida; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Precio Lista:</label>
                        <input class="form-control" type="number" name="preciolista" value="<?php echo $p->preciolista; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Stock:</label>
                        <input class="form-control" type="number" name="stock" value="<?php echo $p->stock; ?>" required>
                    </div>

                    <div class="with-border">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Proveedor:</label>
                            <select class="" name="proveedores">
                              <option selected="selected">Seleccione el proveedor</option>
                               <?php
                                       if(isset($proveedor)){
                                          foreach ($proveedor as $p){
                                            echo    "<option value='$p->idproveedores'>" . $p->nombreproveedor . "</option>";
                                                 }
                                          }else{
                                              echo "sin registros";
                                          }
                                          ?>
                            </select>
                            
                          </div>
                        </div>
                      
                      
                        <div class="col-md-9">
                          <div class="box-footer"><br>
                            <button><a href="<?php echo base_url();?>index.php/Backend/agregarproveedores"><span class="glyphicon glyphicon-plus"></span>Agregar Proveedores</a></button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="with-border">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Categoría:</label>
                            <select class="" name="categoria">
                              <option selected="selected">Seleccione una categoría</option>
                              <?php
                                       if(isset($cat)){
                                          foreach ($cat as $c){
                                            echo    "<option value='$c->idcategoria'>" . $c->nombrecategoria . "</option>";
                                                 }
                                          }else{
                                              echo "sin registros";
                                          }
                                          ?>
                            </select>
                          </div>
                        </div>
                      
                            <div class="col-md-9">
                              <div class="box-footer"><br>
                                <button><a href="<?php echo base_url();?>index.php/Backend/agregarcategoria"><span class="glyphicon glyphicon-plus"></span>Agregar Categoría</a></button>
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
                  <?php } ?>
                </form>
              </div><!-- /.box -->
            </div>
        </div>
</section>