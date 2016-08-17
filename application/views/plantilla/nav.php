<!----start-header----->
	 <div class="header">
	     <div class="wrap">
			<div class="top-header">
				<div class="logo">
					<a href="<?php echo base_url();?>index.php/Frontend"><h1><span>Autorefacciones </span>Nissan & Volkswagen</h1></a>
				</div>
			</div>
			<!---start-top-nav---->
			<div class="top-nav">
				<div class="top-nav-left">
					 <div id="foot-nav">
				      <ul>
				        <li class="active"><a href="<?php echo base_url();?>index.php/Frontend">Inicio</a></li>
				        <li><a href="<?php echo base_url();?>index.php/Frontend/quienessomos">Empresa</a></li>
				         <li><a href="<?php echo base_url();?>index.php/Frontend/productos">Productos</a></li>
				         <li><a href="<?php echo base_url();?>index.php/Frontend/contactanos">Contáctanos</a></li>
				         <!--<li><a href="<?php echo base_url();?>blog.html">Contáctanos</a></li>-->
				          <?php
				         if($this->session->userdata('nombrecliente')){
							if ($this->session->userdata('privilegios') == 1) {
						?>
							<li><a href="<?php echo base_url();?>index.php/Backend">Panel Administrador</a></li>
						<?php	
							}
						}
						?>
				         <?php
				         	if(!$this->session->userdata('nombrecliente')){
				         ?>
				         <li><a href="<?php echo base_url();?>index.php/Frontend/login">Login</a></li>
				         <?php
				         	}else{
				         ?>
							<li><a href="<?php echo base_url();?>index.php/Clientes/cerrarSesion">Log out</a></li>
				         <?php
				         	}
				         ?>
				     </ul>
		       </div>
		       <script>
			      var navigation = responsiveNav("#nav");
			    </script>
				</div>
				<div class="top-nav-right">
					<div class="search">
				  	<form>
				  		<input type="text" value="" />
				  		<input type="submit" value="" />
				  		<div class="clear"></div>
				  	</form>
				  </div>
				</div>
				<div class="clear"> </div>
			</div>
			<!---End-top-nav---->
		</div>
	</div>
   <!----End-header----->

   