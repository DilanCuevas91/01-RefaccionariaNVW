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
                        <h1 class="box-title"><dt>Actualizar Dirección</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start -->
                <?php echo form_open('Direccion/upDireccion');?>
                <?php foreach($direc as $d){ ?>

                  <input type="hidden" name ="iddireccion" value="<?php echo $d->iddireccion; ?>">
                  <div class="box-body">
                    <div class="form-group">
                        <label>Estado:</label>
                        <input class="form-control" type="text" name="estado" value="<?php echo $d->estado; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Ciudad:</label>
                        <input class="form-control" type="text" name="ciudad" value="<?php echo $d->ciudad; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Código Postal:</label>
                        <input class="form-control" type="number" name="codigopostal" value="<?php echo $d->codigopostal; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Colonia:</label>
                        <input class="form-control" type="text" name="colonia" value="<?php echo $d->colonia; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Calle:</label>
                        <input class="form-control" type="text" name="calle" value="<?php echo $d->calle; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Número:</label>
                        <input class="form-control" type="number" name="numero" value="<?php echo $d->numero; ?>" required>
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