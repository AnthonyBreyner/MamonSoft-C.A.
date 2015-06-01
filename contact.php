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
						<h4>ADDRESS</h4>
						<p>Planeto Ltd.<span>Drayton Park 243</span>N5 1BU London</p>
					</div>
					<div class="email">
						<h4>EMAIL</h4>
						<p><a href="mailto:example@email.com">hello@planeto.com</a></p>
					</div>
					<div class="phone">
						<h4>PHONE</h4>
						<p>421.909.123.456</p>
					</div>
				</div>
				<div class="col-md-8 stop-left">
					<h4>SAY HELLO</h4>
					<div class="stop-btm">
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" />
						<input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" />
						<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
				        <input type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" />
						<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<div class="s-btn">
								<form>
									<input type="submit" value="SEND MESSAGE">
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