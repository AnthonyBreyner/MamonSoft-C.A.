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
						<p><a href="mailto:example@email.com">mamonsoft.ca@gmail.com</a></p>
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
						<input type="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}" />
						<input type="text" value="Cedula" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" />
						<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
				        <input type="text" value="Telefono" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" />
						<textarea value="Mensaje:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Mensaje...</textarea>
							<div class="s-btn">
								<form>
									<input type="submit" value="ENVIAR">
						    	</form>
						    </div>	
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--end-banner-->
<?php
	include('pie.php');
?>