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
	<!--start-error-->
	<div class="error">
		<div class="container">
			<div class="error-main">
				<h3>404</h3>
				<p>oops! something goes wrong</p>
				<div class="error-btn">
					<a href="index.php">Back To Home</a>
				</div>
			</div>
		</div>
	</div>
	<!--end-error-->
<?php
	include('pie.php');
?>