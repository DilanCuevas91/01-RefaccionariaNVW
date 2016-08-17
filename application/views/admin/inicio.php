<section class="content">
  <div class="box box-primary"><br>
          <div class="row">
                  <div class="col-md-9">
                  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="text-align:center">PANEL DE CONTROL</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="text-align:center">Bienvenid@ Administrador <?php echo $this->session->userdata('nombrecliente');?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                  </div>
                  <br><br>


                  <div class="row">
                    <div class="col-md-3">
                      <div class="pull-left image">
                        <img src="<?php echo base_url();?>Estilosback/dist/img/clientes.png">
                      </div>
                     <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Administrar Clientes</button>
                     </div>
                    </div>
                      
                    

                    <div class="col-md-3">
                      <div class="pull-left image">
                        <img src="<?php echo base_url();?>Estilosback/dist/img/ventas.png">
                      </div>
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Administrar Ventas</button>
                     </div>
                    </div>
                  

                    <div class="col-md-3">
                      <div class="pull-left image">
                        <img src="<?php echo base_url();?>Estilosback/dist/img/productos.png">
                      </div>
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Administrar Productos</button>
                     </div>
                    </div>
                    

                    <div class="col-md-3">
                      <div class="pull-left image">
                        <img src="<?php echo base_url();?>Estilosback/dist/img/proveedores.png">
                      </div>
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Administrar Proveedores</button>
                     </div>
                    </div>
                    <div class="col-lg-12">
                        <h1 class="page-header"></h1>
                    </div>
                  </div>
                  <br><br>


                  <div class="row">
                    <div class="col-md-3">
                      <div class="pull-left image">
                        <img src="<?php echo base_url();?>Estilosback/dist/img/deudasclientes.png" alt="User Image">
                      </div>
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Administrar Deudas Clientes</button>
                     </div>
                    </div>


                    <div class="col-md-3">
                      <div class="pull-left image">
                        <img src="<?php echo base_url();?>Estilosback/dist/img/deudasproveedores.png" alt="User Image">
                      </div>
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Administrar Deudas Proveedores</button>
                     </div>
                    </div>


                    <div class="col-md-3">
                      <div class="pull-left image">
                        <img src="<?php echo base_url();?>Estilosback/dist/img/comentarios.png" alt="User Image">
                      </div>
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Administrar Comentarios</button>
                     </div>
                    </div>


                    <div class="col-md-3">
                      <div class="pull-left image">
                        <img src="<?php echo base_url();?>Estilosback/dist/img/cerrarsesion.png" alt="User Image">
                      </div>
                      <div class="box-footer">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" >Cerrar Sesión</button>
                     </div>
                    </div>

                  </div>
                  <br><br>
                        

                  </div><!-- /.box box-primary -->
                  <div class="col-lg-3">
                      <!-- Calendar -->
                      <div class="box box-solid bg-blue-gradient">
                        <div class="box-header">
                          <i class="fa fa-calendar"></i>
                          <h3 class="box-title">Calendario</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding" >
                          <div id="calendar" style="width: 100%"></div>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->

                      <!-- Calendar -->
                      <div class="box box-solid bg-blue-gradient">
                        <div class="box-header">
                          <span class="glyphicon glyphicon-stats"></span>
                         
                          <h3 class="box-title">Datos importantes</h3>
                          <br>
                          <br>
                          <?php 
                              echo "Tiempo de ejecución TOTAL de la página: ".$this->benchmark->elapsed_time();
                          ?>
                          <br>
                          <br>
                          <?php 
                              echo "Tiempo de ejecución de la página del administrador: ".$this->benchmark->elapsed_time('inicio','fin');
                          ?>
                          <br>
                          <br>
                          <?php 
                              echo "Memoria RAM consumida por el sitio web: ".$this->benchmark->memory_usage();
                          ?>
                        </div><!-- /.box-header -->
                      </div><!-- /.box -->

                  </div><!-- right col -->


            </div>
  </div>
</section>