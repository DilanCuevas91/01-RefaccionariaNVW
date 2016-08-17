
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
                        <h1 class="box-title"><dt>Agregue la dirección del cliente</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start -->
                <?php echo form_open('Direccion/addDireccion');?>
                  <div class="box-body">
                    <div class="form-group">
                        <label>Estado:</label>
                        <input class="form-control" type="text" name="estado" placeholder="Introduce el estado" required>
                    </div>
                    <div class="form-group">
                        <label>Ciudad:</label>
                        <input class="form-control" type="text" name="ciudad" placeholder="Introduce la ciudad" required>
                    </div>
                    <div class="form-group">
                        <label>Código Postal:</label>
                        <input class="form-control" type="number" name="codigopostal" placeholder="Introduce código postal" required>
                    </div>
                    <div class="form-group">
                        <label>Colonia:</label>
                        <input class="form-control" type="text" name="colonia" placeholder="Introduce la colonia" required>
                    </div>
                    <div class="form-group">
                        <label>Calle:</label>
                        <input class="form-control" type="text" name="calle" placeholder="Introduce la calle" required>
                    </div>
                    <div class="form-group">
                        <label>Número:</label>
                        <input class="form-control" type="number" name="numero" placeholder="Introduce el número" required>
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