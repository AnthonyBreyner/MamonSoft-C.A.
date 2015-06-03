<?php
include('cabecera.php');
?>
				<div class="clearfix"></div>
			</div>
			<div class="banner-main">
				<div class="container">	
					<div class="banner-top bnr-top">
						<h1>"Soluciones a la medida... Para una empresa competitiva..." </h1>
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
	<!--start-carrer-->
	<div class="carrer">
		<div class="container">
			<div class="carrer-top">
				<h3>SoftWare Disponibles</h3>
			</div>
			<div class="tabs-box">
			<ul class="tabs-menu">
				<li><a href="#tab1"><span> </span>Gestiones Escolares</a></li>
				<li><a href="#tab2"><span> </span>SoftWare A la Medida</a></li>
			</ul>
			<div class="clearfix"> </div>
			<div class="tab-grids">
				<div id="tab1" class="tab-grid">
					<div class="tb-one">
						<h3>Software Para Gestiones Escolares (GESAODIN).</h3>
						<p> 	Le permitirá administrar totalmente su institución en tan solo unos clic.

Incluye múltiples funciones y herramientas para automatizar los procedimientos administrativos, académicos y comerciales de su institución, optimizando sus recursos ahorrándole tiempo y dinero. Dicha aplicación fue desarrollada por un grupo comprometido en diversas labores empresariales, buscando automatizar los procedimientos administrativos, académicos y comerciales en instituciones de Educación.  </p>
					</div>
					<div class="tb-one">
						<h3>
Mejorando el aspecto y la factibilidad</h3>
						<p>GesaOdin II, presenta la mejor forma para mejorar los procesos de gestión educativa, y facilitar la coordinación entre docentes y cargos directivos, con la utilización de una única y completa aplicación de gestión académica</p>
					</div>
					<div class="tb-one">
						<h3>Nuestro principal objetivo.</h3>
						<p>Es proporcionales una herramienta que les permita consolidar todas las operaciones de gestión escolar automatizada, bajo un sólido concepto y una amigable interfaz, que se convertirá en su mejor aliada en el proceso para automatizar los procedimientos administrativos y académicos en las instituciones educativas.</p>
					</div>
					<div class="tb-one">
						<h3>Obtén tu copia gratis:</h3>
							<div class="tb-two">
								<input type="text" placeholder="Nombre Y Apellido" id="nombre" name="nombre" />
								<input type="text" placeholder="Institución" id="insti" name="insti" />
								<input type="text" placeholder="Email" id="correo" name="correo" />
						        <input type="text" placeholder="Telefonos" id="telefono" name="telefono" />
								<textarea placeholder="Mensaje" id="mensaje" name="mensaje"></textarea>
									<div class="t-btn">
										<form action="#" method="post" onsubmit="return guardar();">
											<input type="submit" value="Enviar">
								    	</form>
								    </div>
						    </div>
					</div>
				</div>
				<div id="tab2" class="tab-grid">
					<div class="tb-one">
						<h3>Lorem ipsum dolor sit amet</h3>
						<p>Nulla tincidunt adipiscing aliquet. Suspendisse vitae mi at diam tempus imperdiet. Aliquam erat volutpat. Duis pharetra nibh sit amet augue porta, quis mattis massa aliquet. Morbi in consectetur ipsum rhoncus risus. Pellentesque quam felis, vulte. Aliquam erat volutpat. Curabitur varius gravida bibendum. </p>
					</div>
					<div class="tb-one">
						<h3>Curabitur dapibus eros luctus.</h3>
						<p>Donec eu erat efficitur, varius est at, rhoncus augue. Praesent lacinia magna risus, convallis egestas nisl maximus a. Aenean suscipit lacinia felis et placerat. Donec in dictum nibh, nec lacinia nisl. Nunc sem ipsum, tempor id tincidunt sit amet, pretium sed nulla. Morbi lacinia felis sit amet fermentum gravida. Aliquam iaculis id magna quis tempor</p>
					</div>
					<div class="tb-one">
						<h3>Apply for this position:</h3>
							<div class="tb-two">
								<input type="text" placeholder="Nombre Y Apellido" id="nombreM" name="nombreM" />
								<input type="text" placeholder="Empresa" id="instiM" name="instiM" />
								<input type="text" placeholder="Email" id="correoM" name="correoM" />
						        <input type="text" placeholder="Telefonos" id="telefonoM" name="telefonoM" />
								<textarea placeholder="Describa lo que desea"  id="mensajeM" name="mensajeM"></textarea>
									<div class="t-btn">
										<form  action="#" method="post" onsubmit="return guardar2();">
											<input type="submit" value="Enviar">
								    	</form>
								    </div>
						    </div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!--start-carrer-->
	<!----- Comman-js-files ----->
	    <script type="text/javascript" src="js/software.js"></script>
		<script>
			$(document).ready(function() {
				$("#tab2").hide();
				$(".tabs-menu a").click(function(event){
					event.preventDefault();
					var tab=$(this).attr("href");
					$(".tab-grid").not(tab).css("display","none");
					$(tab).fadeIn("slow");
				});
			});
		</script>
		<!----- Comman-js-files ----->
<?php
	include('pie.php');
?>