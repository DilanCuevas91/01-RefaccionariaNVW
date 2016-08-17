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
                        <h1 class="box-title"><dt>Actualizar abonos de clientes</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start -->
                <?php echo form_open('Abonoclientes/upAbonoclientes');?>
                <?php foreach($abonos as $ab){ ?>

                  <input type="hidden" name ="idabonoclientes" value="<?php echo $ab->idabonoclientes; ?>">
                  <div class="box-body">
                    <div class="form-group">
                        <label>Fecha:</label>
                        <input class="form-control" type="date" name="fecha" value="<?php echo $ab->fechaabono; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Cantidad:</label>
                        <input class="form-control" type="number" name="abono" value="<?php echo $ab->cantidadabono; ?>" required>
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