<!---start-content---->
		 <div class="wrap">
		 	<div class="about-desc">
		     <div class="content">	 	
		      <div class="about-data"> 
		       <h2>Dejanos tu comentario...</h2>
		          <!--<div class="contact-form">
					   <div class="left_form">
					     <?php echo form_open('Comentarios/addComentario');?>
					    	<div>
						    	<span><label>Nombre</label></span>
						    	<span><input name="nombre" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="email" type="text" class="textbox"></span>
						    </div>
					        <div>					    	
						    	<span><label>Comentario</label></span>
						    	<span><textarea name="comentario"> </textarea></span>
						    </div>
						    <div>					    	
						    	<span><label>Cliente</label></span>
						    	<span><input name="cliente" type="text" class="textbox"></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit" class="myButton"></span>
						  </div>
						</form>
					</div>
					<div class="col-md-6">
				  		<img src="<?php echo base_url();?>images/comentario.png" alt="" />
				  	</div>
					 <div class="clear">
					 </div>
				  </div>-->

				  <?php
				         	if(!$this->session->userdata('nombrecliente')){
				         ?>
				          <div class="contact-form">
				          	<div class="row">
				          		<div class="col-md-6">
				          			<h3 style="color:#9B9696">Para dejar tu comentario es necesario ser cliente.</h3>
				          			<h3 style="color:#9B9696; text-align:center;"><a href="<?php echo base_url();?>index.php/Frontend/login">Iniciar sesión</a></h3>
				          			<p style="color:#9B9696">Si aún no eres cliente de nosotros, contáctanos y con gusto te atenderemos.</p>
				          			<p style="color:#9B9696">Forma parte de nuestra empresa, siendo uno de nuestros clientes y obten muchos beneficios. Enterarte de nuestras ofertas, además de utilizar nuestro carrito de compras y dejandonos tu opinión o sugerencias, además de muchos beneficios más.</p>
				          		</div>
				          		<div class="col-md-6">
				          			<img src="<?php echo base_url();?>images/comentario.png" alt="" />
				          		</div>
				          	</div>
							 <div class="clear">
							 </div>
				          </div>
				         <?php
				         	}else{
				         ?>
							<div class="contact-form">
							   <div class="left_form">
							     <?php echo form_open('Comentarios/addComentario');?>
							     <?php //echo $mensaje; ?>
								    <div>					    	
								    	<span><label>Nombre del cliente</label></span>
								    	<span><input name="nombre" type="text" class="textbox" readonly value="<?php echo $this->session->userdata('nombrecliente')?>"></span>
								    	<?php echo form_error('nombre'); ?>
								    </div>
								    <div>
								    	<span><label>E-MAIL</label></span>
								    	<span><input name="email" type="text" class="textbox" readonly value="<?php echo $this->session->userdata('emailcliente')?>"></span>
								    	<?php echo form_error('email'); ?>
								    </div>
							        <div>					    	
								    	<span><label>Comentario</label></span>
								    	<span><textarea name="comentario"> </textarea></span>
								    	<?php echo form_error('comentario'); ?>
								    </div>
								   <div>
								   		<span><input type="submit" value="Submit" class="myButton"></span>
								  </div>
								   <input type="hidden" name="cliente" value="<?php echo $this->session->userdata('idclientes')?>">
								</form>
							</div>
							<div class="col-md-6">
						  		<img src="<?php echo base_url();?>images/comentario.png" alt="" />
						  	</div>
							    <div class="clear"></div>
						  </div>
				         <?php
				         	}
				         ?>

				  <div class="content_bottom">
				 	<div class="company_address">
				     	<h2>Dirección</h2>
						    	<p>Prol. Fco I Madero #1087-A </p>
						   		<p>Maravatío Mich.</p>
						   		<p>México</p>
				   		<p>Teléfono: (447) 1151617</p>
				 	 	<p>Email: <span><a href="#">autorefaccionesnvw@gmail.com</a></span></p>
				   		<p>Sigueno en: <span><a href="#">Facebook</a></span>, <span><a href="#">Twitter</a></span></p>
				     </div>
				       <div class="contact_info">
    	 				<h2>Encuentranos aquí</h2>
					    	  <div class="map">
							   	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.766473203842!2d-100.43434428568021!3d19.89208043098315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2da7a76efdee9%3A0x2f5a1c0410292873!2sAv+Francisco+I.+Madero+1087A%2C+Maravat%C3%ADo%2C+61250+Maravat%C3%ADo%2C+Mich.!5e0!3m2!1ses-419!2smx!4v1466302343833" width="815" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							  </div>
      				     </div>
				      <div class="clear"></div>
	                </div>
		 	  </div>
			</div>
			</div>
		  </div>		   			
		 <!---End-content---->