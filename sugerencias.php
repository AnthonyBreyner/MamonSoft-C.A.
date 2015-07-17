<?php include_once("analyticstracking.php") ?>
<?php
include('cabecera.php');
?>
			<div class="clearfix"></div>
			</div>
			<div class="banner-main">
				<div class="container">	
					<div class="banner-top bnr-top">
						<h1>"POR QUE CADA DIA QUEREMOS BRINDARLE, UN MEJOR SERVICIO"</h1>
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
		<div class="container">
			<div class="clearfix"> </div>

					<div class="tb-one">
						<h3 id="titulo"></h3>
						<div class="tb-one" id="descripcion"></div>
					</div>
					<div class="cajaexterna">
					<div id="cargando" class="cajacentrada"></div>
				    </div>
					<div class="tb-one">
					    <br>
						<center><h2>Formulario de Sugerencias:</h2></center>
							<div class="tb-two">
								<input type="text" id="nombres" name="nombres" placeholder="Nombre y Apellido"/>
						<input type="text" id="cedula" name="cedula" placeholder="Cedula"  />
						<input type="text" id="correo" name="correo" placeholder="Email"  />
				        <input type="text" id="telefono" name="telefono" placeholder="Telefono" />
						<textarea placeholder="Sugerencias..." class="textarea" id="observacion" style="height: 25%"></textarea>
								
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
<?php
include('pie.php');
?>