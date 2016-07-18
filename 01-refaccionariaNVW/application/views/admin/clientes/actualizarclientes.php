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
                        <h1 class="box-title"><dt>Actualizar Clientes</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start -->
                <?php echo form_open('Clientes/upCliente');?>
                <?php foreach($cliente as $c){ ?>

                  <input type="hidden" name ="idclientes" value="<?php echo $c->idclientes; ?>">
                  <div class="box-body">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input class="form-control" type="text" name="nombre" value="<?php echo $c->nombre; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Teléfono:</label>
                        <input class="form-control" type="number" name="telefono" value="<?php echo $c->telefono; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>E-mail:</label>
                        <input class="form-control" type="text" name="email" value="<?php echo $c->email; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input class="form-control" type="password" name="password" value="<?php echo $c->password; ?>" required>
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