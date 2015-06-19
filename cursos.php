<?php
include('cabecera.php');
?>
			<div class="clearfix"></div>
			</div>
			<div class="banner-main">
				<div class="container">	
					<div class="banner-top bnr-top">
						<h1>"TE AYUDAMOS A ENCONTRAR LA FORMACION IDEAL"</h1>
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
				<h3>Cursos Y Talleres</h3><br>
				<select class="select" id="lista_cursos" style="width: 50%;" onchange="mostrarCurso();"></select>
			</div>
			<div class="tabs-box">
			<!--<ul class="tabs-menu" id="lista_cursos">
				<li><a href="#"onclick="mostrar()"><span> </span>Senior webdesigner</a></li>
				<li><a href="#"onclick="mostrar()"><span> </span>Project manager</a></li>
				<li><a href="#"onclick="mostrar()"><span> </span>Front-end developer</a></li>
			</ul>!-->

			<div class="clearfix"> </div>
			<div class="services-main">
				<div id="tab1" class="tab-grid">

					<div class="tb-one">
						<h3 id="titulo"></h3>
						<div class="tb-one" id="descripcion"></div>
					</div>
					<div class="cajaexterna">
					<div id="cargando" class="cajacentrada"></div>
				    </div>
					<div class="tb-one">
					    <br>
						<h3>Estoy intersado en esto:</h3>
							<div class="tb-two">
								<select  class="select1" name="nac" id="nac" onchange="habilitar(this.value)">
								<option selected>Nacionalidad</option>
								<option value="1">Venezolano</option>
								<option value="2">Extranjero</option>
								<option value="3">Juridico</option>
								<option value="4">Institucional</option>
								</select>				  
								<input type="text" id="nombres" name="nombres" placeholder="Nombre y Apellido / Razon Social" />
								</div>
								<input type="text" id="cedula" name="cedula" placeholder="Cedula o RIF"/>
								<input type="text" id="correo" name="correo" placeholder="Email"/>
						        <input type="text" id="institucion" name="institucion" placeholder="Institucion donde trabaja"/>
						        <input type="text" id="participantes" name="participantes" placeholder="Cantidad de Participantes"/>
						    	<input type="text" id="telefonos" name="telefonos" placeholder="Telefono de habitacion / oficina"/>
						    	<input type="text" id="celular" name="celular" placeholder="Telefono celular"/>
						        <select  class="select" id="nivel"></select>
						        <select  class="select" id="profesion"></select>
						        <select  class="select" id="ocupacion"></select>
						 
								<textarea placeholder="Observaciones..." class="textarea" id="observacion"></textarea>
								
									<div class="t-btn">
										<form onsubmit="return guardar();" action="#">
											<div class="tb-one">
											<input type="submit" value="Enviar">
								    	    </div>
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
	    <script type="text/javascript" src="js/curso.js"></script>
		<script>
			$(document).ready(function() {
				cursos();
				nivel();
				ocupa();
				profe();
			});
		</script>
		<!----- Comman-js-files ----->
<?php
include('pie.php');
?>