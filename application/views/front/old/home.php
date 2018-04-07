<!DOCTYPE html>
<html lang="en">

<head>
   	<meta charset="utf-8"/>
   	<title>Kuydal - Home</title>
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<meta name="description" content="Kuydal Home">
   	<meta name="author" content="@ganamuhibudin">
   	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/css/media-queries.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/font/fontello.css" rel="stylesheet" >
   	<script src="<?php echo base_url(); ?>assets/js/modernizr.custom.js"></script>
</head>
<body class="animated fadeIn delay2">
    <header id="valencia-header" class="valencia-header">
		<div class="container">
            <div class="row"> 
	            <div class="navbar navbar-default">
		            <div class="navbar-header">
			            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            </button>
			            
			            <h1 class="logo">
			            <a class="navbar-brand" href="index-2.html"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Logo" /></a>
			            </h1> 
		            
		            </div>
		            <div class="navbar-collapse collapse navbar-right">
			            <ul class="nav navbar-nav">
				            <?php if ($loged_in == 1) { ?>
					            <?php if ($role == 1) { ?>
					            <li><a href="<?php echo site_url('category/all'); ?>">Category</a></li>
					            	<li><a href="<?php echo site_url('account/profile'); ?>"><?php echo $name; ?></a></li>
					            <?php } elseif ($role == 2) { ?>
						            <li><a href="<?php echo site_url('account/profile'); ?>"><?php echo $name; ?></a></li>
					            <?php } elseif ($role == 3) { ?>
						            <li><a href="#">Create Event</a></li>
						            <li><a href="<?php echo site_url('account/profile'); ?>"><?php echo $name; ?></a></li>
					            <?php } ?>
				            <?php } else { ?>
					            <li><a href="<?php echo site_url('account/login'); ?>">Log in</a></li>
					            <li><a href="<?php echo site_url('account/signup'); ?>">Sign Up</a></li>
				            <?php } ?>
			            </ul>
			        </div><!--/.nav-collapse -->
	            </div>
            <!-- end Static navbar -->  
            </div>
		</div>
	</header>
	<!-- slider -->
    <section id="home">
		<div id="fullscreenslider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#fullscreenslider" data-slide-to="0" class="active"></li>
				<li data-target="#fullscreenslider" data-slide-to="1"></li>
				<li data-target="#fullscreenslider" data-slide-to="2"></li>
			</ol>
			<a class="left carousel-control" href="#fullscreenslider" data-slide="prev">
				<span class="icon-left-open-big"></span>
			</a>
			<a class="right carousel-control" href="#fullscreenslider" data-slide="next">
				<span class="icon-right-open-big"></span>
			</a>
			<div class="carousel-inner carousel-fade">
				<div class="item active">
					<img src="<?php echo base_url(); ?>assets/img/slider/slider1.jpg" alt="slider 1">
					<div class="carousel-caption animated flipInY delay2">
						<h1>We are Creative</h1>
						<span class="border"></span>
		    			<h2>Agency based in New York <br />We are passionate about our work</h2>
		    			<div class="btn btn-default">Learn more</div>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/img/slider/slider2.jpg" alt="slider 2">
					<div class="carousel-caption animated lightSpeedIn delay2">
						<h1>We are Creative2</h1>
		    			<span class="border"></span>
		    			<h2>Agency based in New York <br />We are passionate about our work</h2>
		    			<div class="btn btn-default">Learn more</div>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/img/slider/slider3.jpg" alt="slider 3">
					<div class="carousel-caption animated flipInY delay2">
						<h1>We are Creative3</h1>
		    			<span class="border"></span>
		    			<h2>Agency based in New York <br />We are passionate about our work</h2>
		    			<div class="btn btn-default">Learn more</div>
					</div>
				</div>
			</div> 
		</div>  
    </section>
    <!-- end slider -->
	<section class="generic services">
		<div class="container">
			<div class="row sectitle">
				<div class="col-xs-12">
					<h1>Our services</h1>
					<span class="border"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 item">
					<a href="#"><i class="glyphicon glyphicon-pencil violet"></i></a>
					<h3>Modern Design</h3>
					<p>Lorem ipsum dolor sit amet, consetetur and adipscing elmy eirmod tempor invidunt ut labore.</p>
					<a href="#" class="btn btn-nobox">Read more</a>
				</div>
				<div class="col-xs-3 item itwo">
					<a href="#"><i class="glyphicon glyphicon-cog cyan"></i></a>
					<h3>Customizable</h3>
					<p>Lorem ipsum dolor sit amet, consetetur and adipscing elmy eirmod tempor invidunt ut labore.</p>
					<a href="#" class="btn btn-nobox">Read more</a>
				</div>
				<div class="col-xs-3 item ithree">
					<a href="#"><i class="glyphicon glyphicon-phone orange"></i></a>
					<h3>Fully Responsive</h3>
					<p>Lorem ipsum dolor sit amet, consetetur and adipscing elmy eirmod tempor invidunt ut labore.</p>
					<a href="#" class="btn btn-nobox">Read more</a>
				</div>
				<div class="col-xs-3 item ifour">
					<a href="#"><i class="glyphicon glyphicon-signal green"></i></a>
					<h3>SEO Friendly</h3>
					<p>Lorem ipsum dolor sit amet, consetetur and adipscing elmy eirmod tempor invidunt ut labore.</p>
					<a href="#" class="btn btn-nobox">Read more</a>
				</div>
			</div>
		</div>
	</section>
	<section class="generic work bgcolor">
		<div class="container">
			<div class="row sectitle">
				<div class="col-xs-12">
					<h1>Works</h1>
					<span class="border"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">				    
					<ul id="filters">
						<li><a class="all" href="#" data-filter="*">All</a></li>	
						<li><a href="#" data-filter=".branding">Branding</a></li>
						<li><a href="#" data-filter=".design">Design</a></li>
						<li><a href="#" data-filter=".photography">Photography</a></li>
						<li><a href="#" data-filter=".packaging">Packaging</a></li>
						<li><a href="#" data-filter=".web">Web</a></li>
					</ul>
				</div>
			</div>
			<div class="row" id="portfolio-wrap">
				<div class="portfolio-item col-xs-4 web">
					<div class="portfolio-image">
                		<img src="<?php echo base_url(); ?>assets/img/portfolio/portfolio1.jpg" alt="Portfolio 1">
            		</div>
            		<div class="project-overlay">
		                <a href="img/portfolio/portfolio1.jpg" data-rel="prettyPhoto" title="Demo title" class="open-project-link">          
			                <div class="project-info">
			                    <div class="zoom-icon"><i class="glyphicon glyphicon-search"></i></div>
			                    <h4 class="project-name">Valencia Website</h4>
			                    <p class="project-categories">Website</p>	
			                </div>
		                </a>
		            </div>
				</div>
				<div class="portfolio-item col-xs-4 photography branding">
					<div class="portfolio-image">
                		<img src="<?php echo base_url(); ?>assets/img/portfolio/portfolio2.jpg" alt="Portfolio 1">
            		</div>
            		<div class="project-overlay">
		                <a href="img/portfolio/portfolio2.jpg" data-rel="prettyPhoto" title="Demo title" class="open-project-link">
			                <div class="project-info">
			                    <div class="zoom-icon"><i class="glyphicon glyphicon-search"></i></div>
			                    <h4 class="project-name">Valencia Theme</h4>
			                    <p class="project-categories">Website</p>	
			                </div>
		                </a>
		            </div>
				</div>
				<div class="portfolio-item col-xs-4 design packaging">
					<div class="portfolio-image">
                		<img src="<?php echo base_url(); ?>assets/img/portfolio/portfolio3.jpg" alt="Portfolio 1">
            		</div>
            		<div class="project-overlay">
		                <a href="img/portfolio/portfolio3.jpg" data-rel="prettyPhoto" title="Demo title" class="open-project-link">
			                <div class="project-info">
			                    <div class="zoom-icon"><i class="glyphicon glyphicon-search"></i></div>
			                    <h4 class="project-name">Valencia Theme</h4>
			                    <p class="project-categories">Website</p>	
			                </div>
		                </a>
		            </div>
				</div>
				<div class="portfolio-item col-xs-4 design  branding ">
					<div class="portfolio-image">
                		<img src="<?php echo base_url(); ?>assets/img/portfolio/portfolio4.jpg" alt="Portfolio 1">
            		</div>
            		<div class="project-overlay">
		                <a href="img/portfolio/portfolio4.jpg" data-rel="prettyPhoto" title="Demo title" class="open-project-link">
			                <div class="project-info">
			                    <div class="zoom-icon"><i class="glyphicon glyphicon-search"></i></div>
			                    <h4 class="project-name">Valencia Theme</h4>
			                    <p class="project-categories">Website</p>	
			                </div>
		                </a>
		            </div>
				</div>
				<div class="portfolio-item col-xs-4 design  photography">
					<div class="portfolio-image">
                		<img src="<?php echo base_url(); ?>assets/img/portfolio/portfolio5.jpg" alt="Portfolio 1">
            		</div>
            		<div class="project-overlay">
		                <a href="img/portfolio/portfolio5.jpg" data-rel="prettyPhoto" title="Demo title" class="open-project-link">
			                <div class="project-info">
			                    <div class="zoom-icon"><i class="glyphicon glyphicon-search"></i></div>
			                    <h4 class="project-name">Valencia Theme</h4>
			                    <p class="project-categories">Website</p>	
			                </div>
		                </a>
		            </div>
				</div>
				<div class="portfolio-item col-xs-4 design  photography">
					<div class="portfolio-image">
                		<img src="<?php echo base_url(); ?>assets/img/portfolio/portfolio6.jpg" alt="Portfolio 6">
            		</div>
            		<div class="project-overlay">
		                <a href="img/portfolio/portfolio6.jpg" data-rel="prettyPhoto" title="Demo title" class="open-project-link">
			                <div class="project-info">
			                    <div class="zoom-icon"><i class="glyphicon glyphicon-search"></i></div>
			                    <h4 class="project-name">Valencia Theme</h4>
			                    <p class="project-categories">Website</p>	
			                </div>
		                </a>
		            </div>
				</div>
			</div>
			<div class="row">
				<div class="text-center">
	            	<a href="work.html" class="btn btn-default btn-large">See all works</a>
	        	</div>			
			</div>

		</div>		
	</section>
	<section class="generic team">
		<div class="container">
			<div class="row sectitle">
				<div class="col-xs-12">
					<h1>Our team</h1>
					<span class="border"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 group">
					<img src="<?php echo base_url(); ?>assets/img/team/team01.jpg" alt="team image">
					<h3>Jack Sparrow</h3>
					<h4>CEO & Founder</h4>
					<p>Lorem ipsum dolor sit amet, consetetur and adipscing elmy eirmod tempor invidunt ut labore.</p>
				</div>
				<div class="col-xs-6 col-sm-3 group">
					<img src="<?php echo base_url(); ?>assets/img/team/team02.jpg" alt="team image">
					<h3>Ashley Jhonson</h3>
					<h4>Art director</h4>
					<p>Lorem ipsum dolor sit amet, consetetur and adipscing elmy eirmod tempor invidunt ut labore.</p>
				</div>
				<div class="col-xs-6 col-sm-3 group">
					<img src="<?php echo base_url(); ?>assets/img/team/team03.jpg" alt="team image">
					<h3>Michael Simpson</h3>
					<h4>Project manager</h4>
					<p>Lorem ipsum dolor sit amet, consetetur and adipscing elmy eirmod tempor invidunt ut labore.</p>
				</div>
				<div class="col-xs-6 col-sm-3 group">
					<img src="<?php echo base_url(); ?>assets/img/team/team04.jpg" alt="team image">
					<h3>Neal Spathrow</h3>
					<h4>Web designer</h4>
					<p>Lorem ipsum dolor sit amet, consetetur and adipscing elmy eirmod tempor invidunt ut labore.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="divisor"></div>
			</div>
		</div>
	</section>
	<section class="generic about">
		<div class="container">
			<div class="row sectitle">
				<div class="col-xs-12">
					<h1>About Us</h1>
					<span class="border"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 group">
					<h5 class="text-center">Who</h5>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. Lorem ipsum dolor sit amet, consetetur link sample, sed diam nonumy eirmod tempor invidunt ut labore.</p>
				</div>
				<div class="col-xs-4 group">
					<h5 class="text-center">What</h5>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. Lorem ipsum dolor sit amet, consetetur link sample, sed diam nonumy eirmod tempor invidunt ut labore.</p>
				</div>
				<div class="col-xs-4 group">
					<h5 class="text-center">Why</h5>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. Lorem ipsum dolor sit amet, consetetur link sample, sed diam nonumy eirmod tempor invidunt ut labore.</p>
				</div>
			</div>
		</div>
	</section>
	<section id="quote-parallax" class="parallax">
		<div class="container">	
	    	<blockquote class="col-xs-12">
			  <h2>It is better to lead from behind and to put others in front, especially when</h2> <br />
			  <h2>you celebrate victory when nice things occur. You take the front line when </h2>
			  <h2>there is danger. Then people will appreciate your leadership.</h2>
			  <cite title="Nelson Mandela">Nelson Mandela</cite>
			</blockquote>
	    </div>
	</section>
	<section class="generic tables">
		<div class="container">
			<div class="row sectitle">
				<div class="col-xs-12">
					<h1>Pricing Table</h1>
					<span class="border"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<div class="pricing-table">
						<div class="price-header ">
							<h5 class="plan-title basicHeader">Standart</h5>
							<h6 class="plan-price"> <span>$9.99</span> <small>/month</small> </h6>
						</div>
						<ul class="features">
							<li><i class="glyphicon glyphicon-ok"></i>Fully customizable</li>
							<li><i class="glyphicon glyphicon-ok"></i>SEO friendly</li>
							<li><i class="glyphicon glyphicon-remove"></i>Fully customizable</li>
							<li><i class="glyphicon glyphicon-remove"></i>Simple and Effective</li>
							<li><i class="glyphicon glyphicon-remove"></i>Fully customizable</li>
						</ul>
						<div class="price-footer basicFooter"> <a href="#" class="btn">Buy now</a> </div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-4">
					<div class="pricing-table">
						<div class="price-header ">
							<h5 class="plan-title basicHeader">Advanced</h5>
							<h6 class="plan-price"> <span>$19.99</span> <small>/month</small> </h6>
						</div>
						<ul class="features">
							<li><i class="glyphicon glyphicon-ok"></i>Fully customizable</li>
							<li><i class="glyphicon glyphicon-ok"></i>Pefrect pixels</li>
							<li><i class="glyphicon glyphicon-ok"></i>SEO friendly</li>
							<li><i class="glyphicon glyphicon-remove"></i>Fully customizable</li>
							<li><i class="glyphicon glyphicon-remove"></i>Simple and Effective</li>
						</ul>
						<div class="price-footer basicFooter"> <a href="#" class="btn">Buy now</a> </div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 col-lg-4">
					<div class="pricing-table">
						<div class="price-header ">
							<h5 class="plan-title basicHeader">Premium</h5>
							<h6 class="plan-price"> <span>$29.99</span> <small>/month</small> </h6>
						</div>
						<ul class="features">
							<li><i class="glyphicon glyphicon-ok"></i>Fully customizable</li>
							<li><i class="glyphicon glyphicon-ok"></i>Fully customizable</li>
							<li><i class="glyphicon glyphicon-ok"></i>Simple and Effective</li>
							<li><i class="glyphicon glyphicon-ok"></i>Fully customizable</li>
							<li><i class="glyphicon glyphicon-remove"></i>Fully customizable</li>
						</ul>
						<div class="price-footer basicFooter"> <a href="#" class="btn">Buy now</a> </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="divisor"></div>
			</div>
		</div>
	</section>
	<section class="generic testimonials">
		<div class="container">
			<div class="row sectitle">
				<div class="col-xs-12">
					<h1>What our clients say</h1>
					<span class="border"></span>
				</div>
			</div>
			<div class="row">
				<div id="catestimo" class="carousel slide" data-ride="carousel">
				  	<ol class="carousel-indicators">
					    <li data-target="#catestimo" data-slide-to="0" class="active"></li>
					    <li data-target="#catestimo" data-slide-to="1"></li>
					    <li data-target="#catestimo" data-slide-to="2"></li>
				  	</ol>
				  	<div class="carousel-inner">
				    	<div class="row item active">
				      		<img src="<?php echo base_url(); ?>assets/img/testimonials/testimonial01.jpg" alt="team image" class="col-xs-4">
				      		<blockquote class="col-xs-8">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.
				      			<cite>John Doe</cite>
				      		</blockquote>
				    	</div>
					    <div class="row item">
					      <img src="<?php echo base_url(); ?>assets/img/testimonials/testimonial02.jpg" alt="team image" class="col-xs-4">
					      <blockquote class="col-xs-8">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.
					      <cite>John Doe</cite>
					      </blockquote>
					    </div>
				  	</div>
					<a class="left carousel-control" href="#catestimo" data-slide="prev">
					    <span class="icon-left-open-big"></span>
					</a>
				  	<a class="right carousel-control" href="#catestimo" data-slide="next">
				    	<span class="icon-right-open-big"></span>
				  	</a>
				</div>
			</div>
		</div>
	</section>
	<section class="generic contact parallax" id="contact-parallax">
		<div class="container">
			<div class="row sectitle">
				<div class="col-xs-12">
					<h1>Contact Us</h1>
					<span class="border"></span>
				</div>
			</div>
			<div class="row contact-info">
				<div class="col-xs-6">
					<h5>Get in touch with us</h5>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
					<ul>
						<li><i class="glyphicon glyphicon-globe"></i> 24 Star Apple street, New York, NY 25416, USA</li>
						<li><i class="glyphicon glyphicon-phone"></i> +1 888 5239 12 63</li>
						<li><i class="glyphicon glyphicon-envelope"></i> <a href="#">hello@company.com</a></li>
					</ul>
				</div>
				<div class="col-xs-6">
					<form id="contact" class="row suscribe col-sm-12" action="http://valencia.mustachethemes.com/contact-form.php" method="post" accept-charset="utf-8">
						<div class="row">
							<div class="col-xs-6"><input type="text" class="form-control" placeholder="Name *" name="name"></div>
							<div class="col-xs-6"><input type="text" class="form-control" placeholder="Email *" name="email"></div>
						</div>
						<div class="row">
							<div class="col-xs-12"><textarea class="form-control" rows="8" placeholder="Message" name="Message"></textarea></div>
						</div>
						<div class="row text-right">
							<div class="col-xs-12"><button type="submit" class="btn text-center">Send</button></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer>
    	<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ul class="social">
						<li title="Facebook" class="tooltip_hover"><a href="#"><i class="icon-facebook"></i></a></li>
						<li title="Twitter" class="tooltip_hover"><a href="#"><i class="icon-twitter"></i></a></li>
						<li title="Google" class="tooltip_hover"><a href="#"><i class="icon-gplus"></i></a></li>
					</ul>
				</div>
				<div class="col-xs-12 copyright"><h6>© 2018 Kuydal <a href="http://www.mercubuana.ac.id">With love by Universitas Mercu Buana</a></h6></div>
			</div>           
        </div>
    </footer> 
  	<a href="#" class="scrollup"><i class="icon-up-open-big"></i></a>
  	<!-- ======================= JQuery libs =========================== -->
	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Retina Support -->
    <script src="<?php echo base_url(); ?>assets/js/retina.js" ></script>

	<!-- Parallax -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.parallax-1.1.3.js"></script>

    <!-- Isotope -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.isotope.js"></script> 

    <!-- lightbox -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>

	<!-- Nicescroll -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>

	<!-- Respond.js media queries for IE8 -->
	<script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>

    <!-- Custom -->
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>

  <!-- ======================= End JQuery libs ======================= -->
</body>
</html>
