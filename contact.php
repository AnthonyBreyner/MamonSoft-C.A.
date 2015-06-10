<?php
include('cabecera.php');
?>
				<div class="clearfix"></div>
			</div>
			<div class="banner-main">
				<div class="container">	
					<div class="banner-top bnr-top">
						<h1>"SOLUCIONES QUE FUNCIONAN..."</h1>
					</div>
				</div>
			</div>
		</div>	
	<!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->		
	<!--end-banner-->
	<!--start-banner-->
	<div class="stop">
		<div class="container">
			<div class="stop-top">
				<h3>CONTACTENOS</h3>
			</div>
			<div class="cajaexterna">
			<div id="cargando" class="cajacentrada"></div>
			</div>
			<div class="stop-bottom">
				<div class="col-md-4 stop-left">
					<div class="address">
						<h4>DIRECCIOM</h4>
						<p>
						Avenida 4 Bolívar entre Calles 18 y 19,<span> Centro Profesional Freddy-Al, Piso 2,</span>  Núcleo 5, Oficina 3,	
						Casco Central de <span> Estado Mérida. </span></p>
					</div>
					<div class="email">
						<h4>EMAIL</h4>
						<p><a href="https://plus.google.com/u/0/106132533452799309051/posts" target="_blank">mamonsoft.ca@gmail.com</a></p>
					</div>
					<div class="phone">
						<h4>TELEFONOS</h4>
						<p>(0426) 554.94.35</p>
						<p>(0414) 741.24.45</p>
					</div>
				</div>
				
				<div class="col-md-8 stop-left">
					<h4>MamonSoft</h4>
					<div class="stop-btm">
						<input type="text" id="nombres" name="nombres" placeholder="Nombre y Apellido"/>
						<input type="text" id="cedula" name="cedula" placeholder="Cedula"  />
						<input type="text" id="correo" name="correo" placeholder="Email"  />
				        <input type="text" id="telefono" name="telefono" placeholder="Telefono" />
						<textarea id="mensaje" name="mensaje" placeholder="Mensaje..."></textarea>
							<div class="s-btn">
								<form action="#" method="post" onsubmit="return guardar();">
											<input type="submit" value="Enviar">
								 </form>
						    </div>	
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--end-banner-->
	<script type="text/javascript" src="js/contacto.js"></script>
	
<?php
	include('pie.php');
?>