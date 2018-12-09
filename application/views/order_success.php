<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <meta content="Bootstrap-ecommerce by Vosidiy" name="author"/>
		<title>AI.ID - Order Success</title>
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
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<br/><br/><br/>
				<br/><br/><br/>
				<div class="card">
					<article class="card-title">
						<h2 class="card-title text-center mb-2 mt-5">Thank you, your order is being processed..</h2>
					</article>
					<article class="card-body">
						<hr/>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm-10">
								<br/>
								<strong class="h4"> Your Order Number is : #32</strong>
								<br/><br/>
								<p> Payment and other information including invoice will be sent to your email</p>
								<br/>
								<?= anchor(base_url(),'Back to Shopping',['class'=>'float-right btn btn-primary']) ?>
							</div>
						</div>
						<br/> <br/>
					</article>
				</div>
				<br/> <br/><br/> <br/><br/> <br/><br/> <br/>
				<br/> <br/><br/> <br/><br/> <br/><br/> <br/>
			</div>
		</div>
		<?php $this->load->view('layout/bottom_menu') ?>
	</body>
</html>