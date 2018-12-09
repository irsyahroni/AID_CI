<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <meta content="Bootstrap-ecommerce by Vosidiy" name="author"/>
		<title>AI.ID - Home</title>
		<link href="<?php echo base_url();?>assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
		<!-- jQuery -->
		<script src="<?php echo base_url();?>assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>
		<!-- Bootstrap4 files-->
		<script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
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
        <script src="<?php echo base_url();?>assets/js/script.js" type="text/javascript"></script>
        <script type="text/javascript">
        // some script
		// jquery ready start
			$(document).ready(function() {
				// jQuery code
			}); 
			// jquery end
        </script>
	</head>
	<body>
		<?php $this->load->view('layout/top_menu') ?>
		<?php $this->load->view('layout/carousel_body') ?>
		<br />

        <!-- Tampilkan semua produk -->
		<section class="section-content padding-y bg">
            <div class="container">
                <div class="col-md-4">
                    <div class="container">
                        <header class="section-heading heading-line">
                            <h4 class="title-section bg">
                                All Product
                            </h4>
                        </header>
                    </div>
                </div>
               <div class="row">
        <!-- looping products -->
        <?php foreach($products as $product) : ?>
            <div class="col-md-3">
                <figure class="card card-product">
                    <div class="img-wrap">
                        <?=img(['src'=> 'uploads/' . $product->image])?>
                    </div>
                    <figcaption class="info-wrap">
                        <h4 style="min-height:60px;"><?=$product->name?></h4>
                       
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li class="stars-active" style="width:80%">
                                    <i class="fa fa-star">
                                    </i>
                                    <i class="fa fa-star">
                                    </i>
                                    <i class="fa fa-star">
                                    </i>
                                    <i class="fa fa-star">
                                    </i>
                                    <i class="fa fa-star">
                                    </i>
                                </li>
                                <li>
                                    <i class="fa fa-star">
                                    </i>
                                    <i class="fa fa-star">
                                    </i>
                                    <i class="fa fa-star">
                                    </i>
                                    <i class="fa fa-star">
                                    </i>
                                    <i class="fa fa-star">
                                    </i>
                                </li>
                            </ul>
                            <div class="label-rating">
                                16 reviews
                            </div>
                                <div class="label-rating">
                                76 orders
                            </div>
                        </div>
                        <!-- rating-wrap.// --> 
                    </figcaption>
                    <div class="bottom-wrap">                       
                        <div class="price-wrap h5">
                            <small>Price</small>        
                            <span class="price-new float-right">IDR <?=$product->price?></span>
                            <br/>
                            <small>Donated</small>
                            <span class="price-new float-right">IDR <?=$product->donated?></span>
                        </div>

                            <?=anchor('welcome/detail/' . $product->id, 'Details' , [
                            'class' => 'btn btn-primary ',
                            'role'  => 'button'
                            ])?>
                           
                            <?=anchor('welcome/add_to_cart/' . $product->id, '<i class="fas fa-shopping-cart"></i> Add to Chart ' , [
                            'class' => 'btn btn-outline-primary',
                            'role'  => 'button'
                            ])?>
                    </div>
                </figure>
            </div>
        <?php endforeach; ?>
              
            </div>
        </section>
        
		<!-- end looping -->
		</div>	
		<?php $this->load->view('layout/bottom_menu') ?>
	</body>
</html>