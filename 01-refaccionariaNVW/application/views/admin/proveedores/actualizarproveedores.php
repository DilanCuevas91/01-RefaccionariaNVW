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
                        <h1 class="box-title"><dt>Actualizar Proveedores</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start -->
                <?php echo form_open('Proveedores/upProveedor');?>
                <?php foreach($provee as $p){ ?>

                  <input type="hidden" name ="idproveedores" value="<?php echo $p->idproveedores; ?>">
                  <div class="box-body">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input class="form-control" type="text" name="nombre" value="<?php echo $p->nombre; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Apellido Paterno:</label>
                        <input class="form-control" type="text" name="apaterno" value="<?php echo $p->apaterno; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Apellido Materno:</label>
                        <input class="form-control" type="text" name="amaterno" value="<?php echo $p->amaterno; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Dirección:</label>
                        <input class="form-control" type="text" name="direccion" value="<?php echo $p->direccion; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Teléfono:</label>
                        <input class="form-control" type="number" name="telefono" value="<?php echo $p->telefono; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>E-mail:</label>
                        <input class="form-control" type="text" name="email" value="<?php echo $p->email; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>RFC:</label>
                        <input class="form-control" type="text" name="rfc" value="<?php echo $p->rfc; ?>" required>
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