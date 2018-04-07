<!DOCTYPE html>
<html lang="en">

<head>
   	<meta charset="utf-8"/>
   	<title>Kuydal - Login</title>
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<meta name="description" content="Kuydal Login">
   	<meta name="author" content="@ganamuhibudin">
   	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/css/media-queries.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/font/fontello.css" rel="stylesheet" >
   	<script src="<?php echo base_url(); ?>assets/js/modernizr.custom.js"></script>
   	<!-- ======================= JQuery libs =========================== -->
	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

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
				            <li><a href="#">Create Event</a></li>
				            <li><a href="<?php echo site_url('account/login'); ?>">Log in</a></li>
				            <li><a href="<?php echo site_url('account/signup'); ?>">Sign Up</a></li>
				            </ul>	
			            </div><!--/.nav-collapse -->
	            </div>
            <!-- end Static navbar -->  
            </div>
		</div>
	</header>
	<!-- slider -->
	<section class="pagetitle bg02">
    	<div class="container">
    		<div class="row">
    			<div class="col-xs-12">
    				<h2>Let's Join Us</h2>
    			</div>
    		</div>
    	</div> 
    </section>
	<section class="generic article">
		<div class="container">
	      	<div class="row">
		        <div class="col-sm-6">
		          	<h3>Login</h3>
		          	<form id="frmLogin" role="form" class="form-alt" method="post">
			            <div class="form-group">
			              	<label for="email" class="sr-only">Email</label>
			              	<input type="email" class="form-control" id="email" name="email" placeholder="Email Address *">
			            </div>
			            <div class="form-group">
			              	<label for="password" class="sr-only">password</label>
			              	<input type="password" class="form-control" id="password" name="password" placeholder="Password *">
			            </div>
			            <span id="msg"></span>
			        </form>
			        <button onclick="login()" class="btn btn-default btn-medium">Log In</button>
		        </div>
		        <div class="col-sm-6">
		          	<h3>&nbsp;</h3>
		          	<p>
		          		Not registered with us yet? <a href="<?php echo site_url('account/signup'); ?>">Sign up</a>
		          	</p>
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
  	<script type="text/javascript">
  		var site_url = '<?php echo site_url(); ?>';
  		var base_url = '<?php echo base_url(); ?>';
  		function login() {
  			var form = $('#frmLogin');
  			$.ajax({
  				type: "POST",
  				url: site_url + '/account/login',
  				data: form.serialize(),
  				success: function(response) {
  					console.log(response);
  				}
  			});
  		}
  	</script>
</body>
</html>
