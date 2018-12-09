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
        <script src="<?php echo base_url();?>assets/js/jquery-2.0.0.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/owlcarousel/owl.carousel.min.js"></script>
        <!-- custom style -->
		<link href="<?php echo base_url();?>assets/css/ui.css?v=1.0" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url();?>assets/css/responsive.css" media="only screen and (max-width: 1200px)" rel="stylesheet"/>
        <!-- custom javascript -->
        <script src="<?php echo base_url();?>assets/js/script.js" type="text/javascript"></script>
        <script type="text/javascript">
        // some script
		// jquery ready start
			$(document).ready(function(){
  				$(".owl-carousel").owlCarousel();
			});
			// jquery end
        </script>
	</head>
	<body>
		<?php $this->load->view('layout/top_menu') ?> 
		<section class="section-main bg padding-top-sm">
            <div class="container">
            	
                <div class="card">
                    <div class="row no-gutters">
                        <aside class="col-sm-5 border-right">
                            <article class="gallery-wrap">
                                <div class="img-big-wrap">
                                    <div class data-fancybox>
                                    	<?=img(['src'=> 'uploads/' . $details->image])?>
                                    </div>
                                </div>
                            </article>
                        </aside>
                        <aside class="col-sm-7">
                            <article class="p-5">
                                <h3 class="title mb-3">
                                    <?=$details->name ?>
                                </h3>
                                <div class="mb-3">
                                    <var class="price h3 text-warning">
                                        <span class="currency">
                                            IDR
                                        </span>
                                        <span class="num">
                                            <?=$details->price?>
                                        </span>
                                    </var>
                                    <span>
                                        /per pcs
                                    </span>
                                    <span class="h3 float-right text-warning">
										<span class="currency">
                                            IDR
                                        </span>
                                        <span class="num">
                                            <?=$details->donated?> Donated
                                        </span>
                                    </span>
                                </div>
                                <!-- price-detail-wrap .// -->
                                <dl>
                                    <dt>
                                        Description
                                    </dt>
                                    <dd>
                                        <p>
                                            <?=$details->description?>
                                        </p>
                                    </dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-3">
                                        Model#
                                    </dt>
                                    <dd class="col-sm-9">
                                        #000001
                                    </dd>
                                    <dt class="col-sm-3">
                                        Color
                                    </dt>
                                    <dd class="col-sm-9">
                                        Obviously Black
                                    </dd>
                                    <dt class="col-sm-3">
                                        Delivery
                                    </dt>
                                    <dd class="col-sm-9">
                                        Indonesia
                                    </dd>
                                </dl>
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
                                <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <dl class="dlist-inline">
                                                <dt>
                                                    Quantity:
                                                </dt>
                                                <dd>
                                                    <select class="form-control form-control-sm" style="width:70px;">
                                                        <option>
                                                            1
                                                        </option>
                                                        <option>
                                                            2
                                                        </option>
                                                        <option>
                                                            3
                                                        </option>
                                                    </select>
                                                </dd>
                                            </dl>
                                            <!-- item-property .// -->
                                        </div>
                                        <!-- col.// -->
                                        <div class="col-sm-7">
                                            <dl class="dlist-inline">
                                                <dt>
                                                    Size:
                                                </dt>
                                                <dd>
                                                    <label class="form-check form-check-inline">
                                                        <input class="form-check-input" id="inlineRadio2" name="inlineRadioOptions" type="radio" value="option2">
                                                            <span class="form-check-label">
                                                                S
                                                            </span>
                                                        </input>
                                                    </label>
                                                    <label class="form-check form-check-inline">
                                                        <input class="form-check-input" id="inlineRadio2" name="inlineRadioOptions" type="radio" value="option2">
                                                            <span class="form-check-label">
                                                                M
                                                            </span>
                                                        </input>
                                                    </label>
                                                    <label class="form-check form-check-inline">
                                                        <input class="form-check-input" id="inlineRadio2" name="inlineRadioOptions" type="radio" value="option2">
                                                            <span class="form-check-label">
                                                                L
                                                            </span>
                                                        </input>
                                                    </label>
                                                </dd>
                                            </dl>
                                            <!-- item-property .// -->
                                        </div>
                                        <!-- col.// -->
                                    </div>
                                    <!-- row.// -->
                                    <hr>
							<?=anchor('welcome/buy_now/' . $details->id, 'Buy Now' , [
                            'class' => 'btn btn-primary ',
                            'role'  => 'button'
                            ])?>
                           
                            <?=anchor('welcome/add_to_cart/' . $details->id, '<i class="fas fa-shopping-cart"></i> Add to Chart ' , [
                            'class' => 'btn btn-outline-primary',
                            'role'  => 'button'
                            ])?>
                                    </hr>
                                </hr>
                            </article>
                            <!-- card-body.// -->
                        </aside>
                        <!-- col.// -->
                    </div>
                    <!-- row.// -->
                </div>
                                  <!-- card.// -->
            </div>
        </section>
        <section class="section-content padding-y bg">
            <div class="container">
                <div class="col-md-4">
                    <div class="container">
                    </div>
                </div>
                <header class="clearfix">
                    <div class="title-text">
                        <span class="h4">
                            Recomended Product
                        </span>
                        <div class="btn-group btn-group-sm float-right">
                            <button class="custom-nav-first owl-custom-prev btn btn-secondary" type="button">
                                <
                            </button>
                            <button class="custom-nav-first owl-custom-next btn btn-secondary" type="button">
                                >
                            </button>
                        </div>
                    </div>
                </header>
                <div class="owl-carousel owl-init slide-items" data-custom-nav="custom-nav-first" data-dots="true" data-items="5" data-margin="20" data-nav="false" id="slide_custom_nav">
                    <div class="item-slide">
                        <figure class="card card-product">
                            <span class="badge-new">
                                NEW
                            </span>
                            <div class="img-wrap">
                                <img src="<?php echo base_url();?>assets/images/items/9.jpg">
                                </img>
                            </div>
                            <figcaption class="info-wrap text-center">
                                <h6 class="title text-truncate">
                                    <a href="#">
                                        White Shirt
                                    </a>
                                </h6>
                            </figcaption>
                        </figure>
                        <div class="item-slide">
                        <figure class="card card-product">
                            <div class="img-wrap">
                                <img src="<?php echo base_url();?>assets/images/items/2.jpg">
                                </img>
                            </div>
                            <figcaption class="info-wrap text-center">
                                <h6 class="title text-truncate">
                                    <a href="#">
                                        "COEXIST" WallSticker
                                    </a>
                                </h6>
                            </figcaption>
                        </figure>
                        <!-- card // -->
                    </div>
                    <div class="item-slide">
                        <figure class="card card-product">
                            <div class="img-wrap">
                                <img src="<?php echo base_url();?>assets/images/items/3.jpg">
                                </img>
                            </div>
                            <figcaption class="info-wrap text-center">
                                <h6 class="title text-truncate">
                                    <a href="#">
                                        "Ligma Awareness" T Shirt
                                    </a>
                                </h6>
                            </figcaption>
                        </figure>
                        <!-- card // -->
                    </div>
                    <div class="item-slide">
                        <figure class="card card-product">
                            <div class="img-wrap">
                                <img src="<?php echo base_url();?>assets/images/items/4.jpg">
                                </img>
                            </div>
                            <figcaption class="info-wrap text-center">
                                <h6 class="title text-truncate">
                                    <a href="#">
                                        Blood Type Card
                                    </a>
                                </h6>
                            </figcaption>
                        </figure>
                        <!-- card // -->
                    </div>
                    <div class="item-slide">
                        <figure class="card card-product">
                            <div class="img-wrap">
                                <img src="<?php echo base_url();?>assets/images/items/10.jpg">
                                </img>
                            </div>
                            <figcaption class="info-wrap text-center">
                                <h6 class="title text-truncate">
                                    <a href="#">
                                        Orca Iphone Case
                                    </a>
                                </h6>
                            </figcaption>
                        </figure>
                        <!-- card // -->
                    </div>
                    <div class="item-slide">
                        <figure class="card card-product">
                            <div class="img-wrap">
                                <img src="<?php echo base_url();?>assets/images/items/1.jpg">
                                </img>
                            </div>
                            <figcaption class="info-wrap text-center">
                                <h6 class="title text-truncate">
                                    <a href="#">
                                        Indonesia Map Phone case
                                    </a>
                                </h6>
                            </figcaption>
                        </figure>
                        <!-- card // -->
                    </div>
                        <!-- card // -->
                    </div>
                </div>
            </div>
        </section>
        <?php $this->load->view('layout/bottom_menu') ?>
       

	</body>