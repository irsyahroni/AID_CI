<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <meta content="Bootstrap-ecommerce by Vosidiy" name="author"/>
		<title>AI.ID - Cart</title>
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
		<br/>
		 <section class="section-content bg padding-y border-top">
            <div class="container">
                <div class="row">
                    <main class="col-sm-9">
                        <h2 class="logo-text">
                            Your Cart
                        </h2><br/>
                        <div class="card">
                            <table class="table table-hover shopping-cart-wrap">
                                <thead class="text-muted">
									<tr>
										<th scope="col">
										 	#
										</th>
										<th scope="col">
											Products
										</th>
										<th scope="col" width="120">
											Quantity
										</th>
										<th scope="col" width="120">
											Price
										</th>
										<th class="text-right" scope="col" width="200">
											Subtotal
										</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$i=0;
										foreach ($this->cart->contents() as $items) : 
											$i++;
									?>
									<tr>
										<td><?= $i ?></td>
										<td><?= $items['name'] ?></td>
										<td align="middle"><?= $items['qty'] ?></td>
										<td align="right"><?= number_format($items['price'],0,',','.') ?></td>
										<td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</main>
					<aside class="col-sm-3">
				        <p class="alert alert-success">
                            Add IDR 50000 of eligible items to your order to qualify for FREE Shipping.
                        </p>
                        <dl class="dlist-align">
                            <dt>
                                Total price:
                            </dt>
                            <dd class="text-right">
                                IDR <?= number_format($this->cart->total(),0,',','.'); ?>
                            </dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>
                                Discount:
                            </dt>
                            <dd class="text-right">
                                IDR 0
                            </dd>
                        </dl>
                        <dl class="dlist-align h4">
                            <dt>
                                Total:
                            </dt>
                            <dd class="text-right">
                                <strong>
                                    IDR <?= number_format($this->cart->total(),0,',','.'); ?>
                                </strong>
                            </dd>
                        </dl>
                        <br/>
                        <div align="center">
							<?= anchor('welcome/clear_cart','Clear Cart',['class'=>'btn btn-block btn-danger']) ?> 
							<?= anchor(base_url(),'Continue Shopping',['class'=>'btn btn-block btn-primary']) ?>
							<?= anchor('order','Check Out',['class'=>'btn btn-block btn-success']) ?>
						</div>
                        <hr>
                        </hr>
                    </aside>
				</div>
			</div>
		</section>
		<br/><br/><br/><br/>
		<br/><br/><br/><br/>
		<br/><br/><br/><br/>

		<?php $this->load->view('layout/bottom_menu') ?>
	</body>
</html>