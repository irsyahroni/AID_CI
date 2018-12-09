<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <meta content="Bootstrap-ecommerce by Vosidiy" name="author"/>
		<title>AI.ID - Login</title>
		<link href="<?php echo base_url();?>assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
		<!-- jQuery -->
		<script src="<?php echo base_url();?>assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>
		<!-- Bootstrap4 files-->
		<link href="<?php echo base_url();?>assets/css/bootstrap.css?v=1.0')?>" rel="stylesheet" type="text/css"/>
		<!-- Font awesome 5 -->
		<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"  rel="stylesheet"  type='text/css'/>
        <!-- plugin: fancybox  -->
        <script src="<?php echo base_url();?>assets/plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
        <link href="<?php echo base_url();?>assets/plugins/fancybox/fancybox.min.css" rel="stylesheet" type="text/css"/>
        <!-- plugin: owl carousel  -->
        <link href="<?php echo base_url();?>assets/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet"/>
        <script src="<?php echo base_url();?>assets/plugins/owlcarousel/owl.carousel.min.js"></script>
        <!-- custom style -->
		<link href="<?php echo base_url();?>assets/css/ui.css?v=1.0" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url();?>assets/css/responsive.css" media="only screen and (max-width: 1200px)" rel="stylesheet"/>
		<!-- custom javascript -->
        <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

	</head>
	<body>
		<?php $this->load->view('layout/top_menu') ?>

		<div class="row bg-pattern">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
				<br/> <br/><br/> <br/><br/> <br/>
		
		<div class="card">
			<article class="card-body">
				<h4 class="card-title text-center mb-4 mt-1">Sign in</h4>
				<hr>			
				<div><?=validation_errors()?></div>
				<div><?=$this->session->flashdata('error')?></div>
				<?=form_open('login', ['class'=>'form-horizontal'])?>		
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
		    					<span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 					</div>
							<input name="username" class="form-control" placeholder="Username" type="text">
						</div> <!-- input-group.// -->
					</div> <!-- form-group// -->
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
					    		<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
						    <input name="password" class="form-control" placeholder="******" type="password">
						</div> <!-- input-group.// -->
					</div> <!-- form-group// -->
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block"> Sign In  </button>
					</div> <!-- form-group// -->
					<p class="text-center"><a href="#" class="btn">Forgot password?</a></p>
				</form>
			</article>
		</div> <!-- card.// -->
		<br/> <br/><br/> <br/><br/> <br/><br/> <br/>
		<br/> <br/><br/> <br/><br/> <br/><br/> <br/>
		</div>
		</div>
		<?php $this->load->view('layout/bottom_menu')?>
	</body>
</html>