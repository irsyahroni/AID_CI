<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <meta content="Bootstrap-ecommerce by Vosidiy" name="author"/>
		<title>AI.ID - Shipping Address</title>
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

		<section class="section-content bg padding-y border-top">
            <div class="container">
                <div class="row">
                    <main class="col-sm-7">
                        <div class="card">
                            <header class="card-header">
                                <div class="form-row">
                                    <?php if($this->session->userdata('username')) { ?>
                                    <div class="col form-group">
                                        <?php
                                        $login_true  = '<span class="icon-wrap icon-xs bg2 round text-secondary fa fa-user" aria-hidden="true"></span>'; 
                                        $login_true .= '<span class="text-wrap">Hello, '. $this->session->userdata('username') .' </span>'; ?>
                                    </div>
                                    <?php } else { ?>
                                    <div class="col form-group"> 
                                        <div class="row">
                                            <div class="col-md-10">
                                                <h4 class="card-title mb-4 mt-1"> Email or Login </h4>
                                            </div>
                                            <div class="col-md-2">
                                                <?php 
                                                     $login_false  = '<span class="btn btn-outline-primary">Login</span>'; 
                                                ?>
                                                <?=anchor('login',$login_false)?>
                                            </div>
                                        </div>
                                        <label>
                                            Email address*
                                        </label>
                                        <input class="form-control" placeholder="email@example.com" type="email">
                                            <small class="form-text text-muted">
                                                We'll never share your email with anyone else.
                                            </small>
                                        </input>
                                    </div>
                                    <?php }?>
                                </div>
                            </header>
                            <article class="card-body">
                              <h4 class="card-title mb-4 mt-1"> Shipping Form </h4>
                            	<div><?= validation_errors() ?></div>
                            	<?=form_open_multipart('Shipping_User/create', ['class'=>'form-horizontal'])?>
                                  
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label>
                                                Recipient Name*
                                            </label>
                                            <input name="recipient_name" class="form-control" placeholder="" type="text" value="<?= set_value('recipient_name') ?>">
                                            </input>
                                        </div>
                                        <!-- form-group end.// -->
                                        <div class="col form-group">
                                            <label>
                                                Phone Number*
                                            </label>
                                            <input name="phone_number" class="form-control" placeholder="" type="text" value="<?= set_value('phone_number') ?>">
                                            </input>
                                        </div>
                                        <!-- form-group end.// -->
                                    </div>
                                    <!-- form-row end.// -->
                                    <div class="form-row">
                                        <div class="col form-group col-md-12">
                                            <label>
                                                Street Address*
                                            </label>
                                            <textarea name="street_address" class="form-control" type="text" value="<?= set_value('street_address') ?>">
                                            </textarea>
                                        </div>
                                       
                                    </div>
                                    <!-- form-group end.// -->
                                    <div class="form-row">
                                        <div class="col form-group col-md-8">
                                            <label>
                                                City/Region*
                                            </label>
                                            <input name="city" class="form-control" type="text" value="<?= set_value('city') ?>">
                                            </input>
                                        </div>
                                        <div class="col form-group col-md-4">
                                            <label>
                                                Postal Code*
                                            </label>
                                            <input name="postal_code" class="form-control" type="text" value="<?= set_value('postal_code') ?>">
                                            </input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <br/>
										<div class="float-right col-md-4">
										  <button type="submit" class="btn btn-block btn-primary">Save</button>
										</div>
								    </div>
                                    <!-- form-group// -->  
                               <?= form_close() ?>
                            </article>
                            <!-- card-body end .// -->
                        </div>
                        <!-- card.// -->
                    </main>
                    <aside class="col-sm-5">
                        <div class="card">
                            <header class="card-header">
                                <h3 class="card-title mb-4 mt-1"> Your Cart Summary </h3>
                            </header>
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
                        <div class="card-footer">
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
                        <hr>
                        </hr>
                    </div>
                    </aside>
                </div>
            </div>
        </section>
        <script>
            $(document).ready(function(){
                $('#myTable').DataTable();
            });
        </script>

        <?php $this->load->view('layout/bottom_menu') ?>
	</body>
</html>
