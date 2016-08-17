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
                        <h1 class="box-title"><dt>Actualizar categoría</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start -->
                <?php echo form_open('Categoria/upCategoria');?>
                <?php foreach($cat as $c){ ?>

                  <input type="hidden" name ="idcategoria" value="<?php echo $c->idcategoria; ?>">
                  <div class="box-body">
                    <div class="form-group">
                        <label>Nombre de la categoría:</label>
                        <input class="form-control" type="text" name="nombre" value="<?php echo $c->nombrecategoria; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Descripción:</label>
                        <input class="form-control" type="text" name="descripcion" value="<?php echo $c->descripcion; ?>" required>
                    </div>

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