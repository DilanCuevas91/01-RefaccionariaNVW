
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
                        <h1 class="box-title"><dt>Agregar Clientes</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start -->
                <?php echo form_open('Clientes/addCliente');?>
                  <div class="box-body">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input class="form-control" type="text" name="nombre" placeholder="Introduce nombre del cliente" required>
                    </div>
                    <div class="form-group">
                        <label>Teléfono:</label>
                        <input class="form-control" type="number" name="telefono" placeholder="Introduce teléfono del cliente" required>
                    </div>
                    <div class="form-group">
                        <label>E-mail:</label>
                        <input class="form-control" type="text" name="email" placeholder="Introduce e-mail del cliente" required>
                    </div>
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input class="form-control" type="password" name="password" placeholder="Introduce password del cliente" required>
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