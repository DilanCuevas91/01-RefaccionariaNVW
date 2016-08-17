<!---start-content---->
		 <div class="wrap">
		 	<div class="about-desc">
		     <div class="content">	 	
		      <div class="about-data"> 
		       <h2>Iniciar sesión</h2>
		          <div class="row">
		          	<div class="col-md-6">
		          		
		          		<div class="contact-form">
		          							     <!--<form method="post" action="contact-post.html" class="left_form">-->
		          		
		          			
     						<!--<?php echo validation_errors();?>-->
		          			<?php echo form_open('Clientes/login');?>
		          			<!--<p style="color:#FBF9F9"><?php echo $this->session->flashdata('mensaje')?></p>-->

		          				<div>
		          					<span><label>E-mail</label></span>
		          					<span><input name="email" type="text" value="<?php echo set_value('email');?>" class="textbox"></span>
		          					<?php echo form_error('email'); ?>
		          					<p style="color:#FBF9F9"><?php echo $this->session->flashdata('mensaje2')?></p>
		          				</div>
		          				<div>
		          					<span><label>Password</label></span>
		          					<span><input name="password" type="password" class="textbox"></span>
		          					<?php echo form_error('password'); ?>
		          					<p style="color:#FBF9F9"><?php echo $this->session->flashdata('mensaje')?></p>
		          				</div>
		          				<div>
		          					<span><input type="submit" value="Enviar" class="myButton"></span>
		          				</div>
		          				
		          			</form> 
		          			
		          			<div class="clear"></div>

		          		</div>

		          	</div>
		          	<div class="col-md-6">
				  	<img src="<?php echo base_url();?>images/iniciar.png" alt="" />
				  </div>
		          </div>
		 	  </div>
			</div>
			</div>
		  </div>		   			
		 <!---End-content---->