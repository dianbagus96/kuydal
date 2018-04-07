<!DOCTYPE html>
<html lang="en">

<head>
   	<meta charset="utf-8"/>
   	<title>Kuydal - Category</title>
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<meta name="description" content="Kuydal Login">
   	<meta name="author" content="@ganamuhibudin">
   	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
   	<link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet" >
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
  	<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
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
	<section class="pagetitle bg02">
    	<div class="container">
    		<div class="row">
    			<div class="col-xs-12">
    				<h2>Category</h2>
    			</div>
    		</div>
    	</div> 
    </section>
	<section class="generic article">
		<div class="container">
	      	<div class="row">
		        <div class="col-sm-12">
		          	<h3>All Categories</h3>
		          	<button type="button" class="btn btn-default btn-small btn-green" data-toggle="modal" data-target="#categoryModal" data-event="add">
					  Add Category
					</button>
					<!-- Modal Form Add / Edit -->
					<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel">
					  	<div class="modal-dialog" role="document">
					    	<div class="modal-content">
					      		<div class="modal-header">
					        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        		<h4 class="modal-title" id="categoryModalLabel">Modal title</h4>
					      		</div>
					      		<div class="modal-body">
					        		<form id="frmCategory" role="form" class="form-alt" method="post">
					        			<input type="hidden" id="id_category" name="id_category">
					        			<div class="form-group">
							              	<label for="category" class="sr-only">Category</label>
							              	<input type="category" class="form-control" id="category" name="category" placeholder="Category *">
							            </div>
					        		</form>
					      		</div>
							    <div class="modal-footer">
							    	<table style="float: right;">
							    		<tr>
							    			<td>
							    				<button type="button" id="cancelFrmCategory" class="btn btn-default btn-small btn-red" data-dismiss="modal">Cancel</button>
							    			</td>
							    			<td>
							    				<button type="button" id="saveFrmCategory" class="btn btn-default btn-small btn-dark-blue" onclick="saveCatgory()">Save</button>
							    			</td>
							    		</tr>
							    		<tr>
							    			<td colspan="2">
							    				<span id="msg"></span>
							    			</td>
							    		</tr>
							    	</table>
							    </div>
					    	</div>
					  	</div>
					</div>
					<!-- Modal Delete -->
					<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
					  	<div class="modal-dialog" role="document">
					    	<div class="modal-content">
					      		<div class="modal-header">
					        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        		<h4 class="modal-title" id="deleteModalLabel">Delete Category</h4>
					      		</div>
					      		<div class="modal-body">
					      			<form id="frmDelCategory" role="form" class="form-alt" method="post">
					      				<input type="hidden" id="id_category" name="id_category">
					      			</form>
					        		<span>Are you sure want to delete this data ?</span>
					      		</div>
							    <div class="modal-footer">
							    	<table style="float: right;">
							    		<tr>
							    			<td>
							    				<button type="button" id="btnCancelDel" class="btn btn-default btn-small btn-red" data-dismiss="modal">Cancel</button>
							    			</td>
							    			<td>
							    				<button type="button" id="btnDel" class="btn btn-default btn-small btn-dark-blue" onclick="deleteCatgory()">Delete</button>
							    			</td>
							    		</tr>
							    		<tr>
							    			<td colspan="2">
							    				<span id="msg"></span>
							    			</td>
							    		</tr>
							    	</table>
							    </div>
					    	</div>
					  	</div>
					</div>
		          	<?php if (count($category) > 0) { ?>
			        <table id="example" class="table table-striped table-bordered" style="width:100%">
				        <thead>
				            <tr>
				                <th>No</th>
				                <th>Category</th>
				                <th>Created Time</th>
				                <th>Update Time</th>
				                <th>Action</th>
				            </tr>
				        </thead>
				        <tbody>
				        	<?php $no = 0; ?>
				        	<?php foreach ($category as $dataCategory) { ?>
				        	<?php $no++;; ?>
				            <tr>
				                <td><?php echo $no; ?></td>
				                <td><?php echo $dataCategory['category']; ?></td>
				                <td><?php echo $dataCategory['created_at']; ?></td>
				                <td><?php echo $dataCategory['updated_at']; ?></td>
				                <td>
				                	<a href="#" data-toggle="modal" data-target="#categoryModal" data-event="edit" data-id="<?php echo $dataCategory['id_category']; ?>" data-category="<?php echo $dataCategory['category']; ?>" >
				                		[edit]
				                	</a>
				                	<a href="#" data-toggle="modal" data-target="#deleteModal" data-event="delete" data-id="<?php echo $dataCategory['id_category']; ?>" >
				                		[delete]
				                	</a>
				                </td>
				            </tr>
				            <?php } ?>
				        </tbody>
				    </table>
				    <?php } ?>
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
  		$(document).ready(function() {
		    $('#example').DataTable();
		});
  		$('#categoryModal').on('show.bs.modal', function (event) {
		  	var button = $(event.relatedTarget);
		  	var recipient = button.data('event');
		  	var modal = $(this);
		  	if (recipient == "add") {
		  		var title = "Add Category";

		  		modal.find('.modal-title').text('Form ' + title);
		  		modal.find('#id_category').val('');
		  		modal.find('#category').val('');
		  		modal.find('#msg').val('');
		  	} else if (recipient == "edit") {
		  		var title = "Edit Category";
		  		var id_category = button.data('id');
		  		var category = button.data('category');

		  		modal.find('.modal-title').text('Form ' + title);
		  		modal.find('#id_category').val(id_category);
		  		modal.find('#category').val(category);
		  		modal.find('#msg').val('');
		  	} else if (recipient == "delete") {
		  		var title = "Delete Category";
		  		modal.find('.modal-title').text('Form ' + title);
		  	}
		});
		$('#deleteModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget);
		  	var recipient = button.data('event');
		  	var modal = $(this);
		  	var id_category = button.data('id');
		  	modal.find('#id_category').val(id_category);
		});
		function saveCatgory() {
			$.ajax({
				type: "POST",
				url: site_url + "/category/setCategory/save",
				data: $('#frmCategory').serialize(),
				success: function(response) {
					var arrStr = response.split("|");
					if (arrStr[0] == "0") {
						$('#categoryModal #msg').text(arrStr[1]);
					} else {
						setInterval($('#categoryModal #msg').text(arrStr[1]), 3000);
						location.reload();
					}
				}
			});
		}
		function deleteCatgory() {
			$.ajax({
				type: "POST",
				url: site_url + "/category/setCategory/delete",
				data: $('#frmDelCategory').serialize(),
				success: function(response) {
					console.log(response); return false;
					// var arrStr = response.split("|");
					// if (arrStr[0] == "0") {
					// 	$('#deleteModal #msg').text(arrStr[1]);
					// } else {
					// 	setInterval($('#deleteModal #msg').text(arrStr[1]), 3000);
					// 	location.reload();
					// }
				}
			});
		}
  	</script>
</body>
</html>
