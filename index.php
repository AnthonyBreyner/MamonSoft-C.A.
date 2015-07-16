<!DOCTYPE html>
<html>
<head>
    <title>MamonSoft</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery-1.11.0.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html charset=utf-8 " />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--start-smoth-scrolling-->
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64453129-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W4RB5M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W4RB5M');</script>
<!-- End Google Tag Manager -->
<!--start-banner-->
<div class="banner" id="home">
    <div class="header">
        <div class="logo">
            <a href="index.php"><img src="images/logo_1.png" class="logo" alt=""></a>
        </div>
        <div class="navigation">
            <span class="menu"></span>
            <ul class="navig">
                <li><a href="index.php" class="active">INICIO</a></li><span><img src="images/clk.png" alt="" /></span>
                <li><a href="about-us.php">NOSOTROS</a></li><span><img src="images/clk.png" alt="" /></span>
                <li><a href="services.php">SERVICIOS</a></li><span><img src="images/clk.png" alt="" /></span>
                <li><a href="cursos.php">CURSOS</a></li><span><img src="images/clk.png" alt="" /></span>
                <li><a href="carrers.php">SOFTWARE</a></li><span><img src="images/clk.png" alt="" /></span>
                <li><a href="contact.php">CONTACTO</a></li>
            </ul>
        </div>
				<div class="clearfix"></div>
			</div>
			<div class="banner-main">
				<div class="container">	
					<div class="banner-top">
						<h1>SOLUCIONES A TU ALCANCE </h1>
						<div class="banner-top-btm">
							<div class="col-md-6 bnr-left">
								<img src="images/icn-1.png" alt="" />
							</div>
							<div class="col-md-6 bnr-right">
								<img src="images/icn-2.png" alt="" />
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="banner-bottom">
						<div class="banner-slide">
						<div  id="top" class="callbacks_container">
			      			<ul class="rslides" id="slider4">
				        	<li>
								<img src="images/slide-1.png" alt="" />
							</li>
							<li>
								<img src="images/slide-2.png" alt="" />
							</li>
							<li>
								<img src="images/slide-3.png" alt="" />
							</li>
			      	</ul>
			    </div>
			  <div class="clearfix"> </div>
			  </div>
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
		  <!--Slider-Starts-Here-->
				<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->		
	<!--end-banner-->
	<!--start-idea-->
	<div class="idea">
		<div class="container">
			<div class="idea-main">
				<div class="idea-top">
					<div class="col-md-5 idea-left id-left">
						<img src="images/idea-1.png" alt="" />
					</div>
					<div class="col-md-7 idea-right id-right">
						<h3>TENEMOS UNA IDEA PARA TODO</h3>
						<p>Software a la medida. Este servicio es ideal para aquellas empresas u organizaciones que requieran de la adquisición de un sistema para automatizar sus procesos, que esté hecho justamente como ellos lo desean y que se acople a su estructura de trabajo.</p>
						<div class="i-btn">
							<a href="carrers.php">VER MAS</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="idea-top">
					<div class="col-md-7 idea-right id-one-left">
						<h3>A UN PASO DE TUS METAS</h3>
						<p>Cursos y talleres. Encontrarás cursos de formación que te ayudarán a ampliar conocimientos en temas que te interesan, información que te permitirá optimizar la forma en la que te presentas a una oferta de trabajo y recursos para poner en marcha tu propio proyecto emprendedor.</p>
						<div class="i-btn">
							<a href="cursos.php">VER MAS</a>
						</div>
					</div>
					<div class="col-md-5 idea-left id-one-right">
						<img src="images/idea-2.png" alt="" />
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end-idea-->
	<!--start-number-->
	<div class="number">
		<div class="container">
			<div class="number-main">
				<h3>“El futuro del trabajo está en el mundo online, un mundo lleno de
					posibilidades donde puedes conseguir todo lo que te propongas.”</h3>
			</div>
		</div>
	</div>
	<!--end-number-->
	<!--start-partner-->
	<!-- <div class="partner">
		<div class="container">
			<div class="partner-top">
				<h3>OUR WONDERFUL PARTNERS</h3>
				<p>Move over logo to see testimonial</p>
			</div>
			<div class="partner-bottom">
				<div  id="top" class="callbacks_container">
			      	<ul class="rslides" id="slider5">
				       <li>
							<div class="part-one">
								<div class="col-md-4 partner-left">
									<img src="images/prt-1.png" alt="" />
									<div class="part">
										<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
										<label>Adrian - Hover Agency</label>
									</div>
								</div>
								<div class="col-md-4 partner-left prt-1">
									<img src="images/prt-2.png" alt="" />
									<div class="part">
										<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
										<label>Adrian - Hover Agency</label>
									</div>
								</div> 
								<div class="col-md-4 partner-left prt-1">
									<img src="images/prt-3.png" alt="" />
									<div class="part">
										<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
										<label>Adrian - Hover Agency</label>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="part-one">
								<div class="col-md-4 partner-left">
									<img src="images/prt-4.png" alt="" />
									<div class="part">
										<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
										<label>Adrian - Hover Agency</label>
									</div>
								</div>
								<div class="col-md-4 partner-left">
									<img src="images/prt-5.png" alt="" />
									<div class="part">
										<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
										<label>Adrian - Hover Agency</label>
									</div>
								</div>
								<div class="col-md-4 partner-left">
									<img src="images/prt-6.png" alt="" />
									<div class="part">
										<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
										<label>Adrian - Hover Agency</label>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="part-one">
								<div class="col-md-4 partner-left prt-1">
									<img src="images/prt-2.png" alt="" />
									<div class="part">
										<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
										<label>Adrian - Hover Agency</label>
									</div>
								</div>
								<div class="col-md-4 partner-left prt-1">
									<img src="images/prt-3.png" alt="" />
									<div class="part">
										<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
										<label>Adrian - Hover Agency</label>
									</div>
								</div>
								<div class="col-md-4 partner-left">
									<img src="images/prt-1.png" alt="" />
									<div class="part">
										<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
										<label>Adrian - Hover Agency</label>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="part-one">
								<div class="col-md-4 partner-left">
									<img src="images/prt-5.png" alt="" />
									<div class="part">
										<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
										<label>Adrian - Hover Agency</label>
									</div>
								</div>
								<div class="col-md-4 partner-left">
									<img src="images/prt-6.png" alt="" />
									<div class="part">
										<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
										<label>Adrian - Hover Agency</label>
									</div>
								</div>
								<div class="col-md-4 partner-left">
									<img src="images/prt-4.png" alt="" />
									<div class="part">
										<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
										<label>Adrian - Hover Agency</label>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
			      	</ul>
			    </div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div> -->
	<!--end-partner--> 
	<!--Slider-Starts-Here-->
				<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider5").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
	<!--start-project-->
	<!--<div class="project">
		<div class="container">
			<div class="project-top">
				<h3>OUR AWESOME PROJECTS</h3>
			</div>
			<div class="project-bottom">
				<div class="portfolios entertain_box  wow fadeInUp" data-wow-delay="0.4s" id="portfolio">
					<div class="portfolio-top">
						<ul id="filters" class="clearfix">
							<li><span class="filter active" data-filter="app card icon logo web photo">ALL</span></li>
							<li><span class="filter" data-filter="app">WEB</span></li>
							<li><span class="filter" data-filter="photo">APP</span></li>
							<li><span class="filter" data-filter="card photo">LOGO</span></li>
							<li><span class="filter" data-filter="icon card">CODE</span></li>
						</ul>
					<div id="portfoliolist">
						<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="images/p-6.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
							     <img src="images/port-6.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Processing Steps Web</h2>
							  	 </div></a>
			                </div>
						</div>				
						<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="images/p-2.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
							     <img src="images/port-2.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Processing Steps Web</h2>
							  	 </div></a>
			               	</div>
						</div>		
						<div class="portfolio photo mix_all" data-cat="photo" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="images/p-3.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
							     <img src="images/port-3.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Processing Steps Web</h2>
							  	 </div></a>
			                </div>
						</div>				
						<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="images/p-4.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
							     <img src="images/port-4.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Processing Steps Web</h2>
							  	 </div></a>
			                </div>
						</div>	
						<div class="portfolio photo mix_all" data-cat="photo" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="images/p-5.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
							     <img src="images/port-5.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Processing Steps Web </h2>
							  	 </div></a>
			                </div> 
						</div>			
						<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="images/p-1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							     <img src="images/port-1.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Processing Steps Web</h2>
							  	 </div></a>
			                </div>
			            </div>		
					</div>
				</div>
			   </div>
			</div>
		</div>
	</div>
	<!--end-project-->
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>
	<!-- Portfolio Ends Here -->
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
$(function () {
	
	var filterList = {
	
		init: function () {
		
			// MixItUp plugin
		// http://mixitup.io
		$('#portfoliolist').mixitup({
			targetSelector: '.portfolio',
			filterSelector: '.filter',
			effects: ['fade'],
			easing: 'snap',
			// call the hover effect
			onMixEnd: filterList.hoverEffect()
		});				
	
	},
	
	hoverEffect: function () {
	
		// Simple parallax effect
		$('#portfoliolist .portfolio').hover(
			function () {
				$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
				$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
			},
			function () {
				$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
				$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
			}		
		);				
	
	}

};

// Run the show!
	filterList.init();
	
});	
</script>

<?php
include('pie.php');
?>