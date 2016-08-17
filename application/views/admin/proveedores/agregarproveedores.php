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
                        <h1 class="box-title"><dt>Agregar nuevo proveedor</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start -->
                <?php echo form_open('Proveedores/addProveedor');?>
                  <div class="box-body">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input class="form-control" type="text" name="nombre" placeholder="Introduce nombre del proveedor" required>
                    </div>
                    <div class="form-group">
                        <label>Apellido Paterno:</label>
                        <input class="form-control" type="text" name="apaterno" placeholder="Introduce apellido paterno del proveedor" required>
                    </div>
                    <div class="form-group">
                        <label>Apellido Materno:</label>
                        <input class="form-control" type="text" name="amaterno" placeholder="Introduce apellido materno del proveedor" required>
                    </div>
                    <div class="form-group">
                        <label>Dirección:</label>
                        <input class="form-control" type="text" name="direccion" placeholder="Introduce la direción del proveedor" required>
                    </div>
                    <div class="form-group">
                        <label>Teléfono:</label>
                        <input class="form-control" type="number" name="telefono" placeholder="Introduce el teléfono del proveedor" required>
                    </div>
                    <div class="form-group">
                        <label>E-mail:</label>
                        <input class="form-control" type="text" name="email" placeholder="Introduce e-mail del proveedor" required>
                    </div>
                    <div class="form-group">
                        <label>RFC:</label>
                        <input class="form-control" type="text" name="rfc" placeholder="Introduce el rfc del proveedor" required>
                    </div>
                    <!--<div class="form-group">
                        <label>Escribe de nuevo tu Contraseña:</label>
                        <input class="form-control" type="password2" name="password2" placeholder="Introduce nuevamente el password del cliente" required>
                    </div>-->
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div>
        </div>
</section>