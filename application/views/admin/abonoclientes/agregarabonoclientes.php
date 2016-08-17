
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
                        <h1 class="box-title"><dt>Agregar nuevo abono de cliente</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start -->
                <?php echo form_open('Abonoclientes/addAbonoclientes');?>
                <?php foreach($deudascobrar as $ab){ ?>
                  <div class="box-body">
                    <div class="form-group">
                        <label>Fecha:</label>
                        <input class="form-control" type="date" name="fecha" required>
                    </div>
                    <div class="form-group">
                        <label>Abono:</label>
                        <input class="form-control" type="number" name="abono" placeholder="Introduce cantidad del abono" required>
                    </div>
                    <input type="hidden" name="iddeudas" value="<?php echo $ab->iddeudascobrar?>">
                    <!--<div class="form-group">
                        <label>Escribe de nuevo tu Contraseña:</label>
                        <input class="form-control" type="password2" name="password2" placeholder="Introduce nuevamente el password del cliente" required>
                    </div>-->
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                  <?php }?>
                </form>
              </div><!-- /.box -->
            </div>
        </div>
</section>