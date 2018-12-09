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
                                    <div class="col form-group">
                                        <label>
                                            Email address*
                                        </label>
                                        <input class="form-control" placeholder="email@example.com" type="email">
                                            <small class="form-text text-muted">
                                                We'll never share your email with anyone else.
                                            </small>
                                        </input>
                                    </div>
                                </div>
                            </header>
                            <article class="card-body">
                              <h5 class="title">
                                    Shipping Form
                                    </h5>
                            	<div><?= validation_errors() ?></div>
                            	<?=form_open_multipart('Shipping_User/create', ['class'=>'form-horizontal'])?>
                                  
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label>
                                                Recipient Name*
                                            </label>
                                            <input name="recepient_name" class="form-control" placeholder="" type="text">
                                            </input>
                                        </div>
                                        <!-- form-group end.// -->
                                        <div class="col form-group">
                                            <label>
                                                Phone Number*
                                            </label>
                                            <input name="phone_number" class="form-control" placeholder="" type="text">
                                            </input>
                                        </div>
                                        <!-- form-group end.// -->
                                    </div>
                                    <!-- form-row end.// -->
                                    <div class="form-row">
                                        <div class="col form-group col-md-8">
                                            <label>
                                                Street Address*
                                            </label>
                                            <input name="street_address" class="form-control" type="text">
                                            </input>
                                        </div>
                                       
                                    </div>
                                    <!-- form-group end.// -->
                                    <div class="form-row">
                                        <div class="col form-group col-md-8">
                                            <label>
                                                City/Region*
                                            </label>
                                            <input name="city" class="form-control" type="text">
                                            </input>
                                        </div>
                                        <div class="col form-group col-md-4">
                                            <label>
                                                Postal Code*
                                            </label>
                                            <input name="postal_code" class="form-control" type="text">
                                            </input>
                                        </div>
                                    </div>
                                    <div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										  <button type="submit" class="btn btn-default">Save</button>
										</div>
								    </div>
                                    <!-- form-group// -->
                                  
                               <?= form_close() ?>
                            </article>
                            <!-- card-body end .// -->
                            <div class="border-top card-body text-center">
                                Have an account?
                                <a href="">
                                    Log In
                                </a>
                            </div>
                        </div>
                        <!-- card.// -->
                    </main>
                    <aside class="col-sm-5">
                        <div class="card">
                            <table class="table table-hover shopping-cart-wrap">
                                <thead class="text-muted">
                                    <tr>
                                        <th scope="col">
                                            Product
                                        </th>
                                        <th scope="col" width="120">
                                            Quantity
                                        </th>
                                        <th scope="col" width="120">
                                            Price
                                        </th>
                                        <th class="text-right" scope="col" width="200">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <figure class="media">
                                                <div class="img-wrap">
                                                    <img class="img-thumbnail img-sm" src="images/items/8.jpg"/>
                                                </div>
                                                <figcaption class="media-body">
                                                    <h6 class="title text-truncate">
                                                        A Black Shirt
                                                    </h6>
                                                    <dl class="dlist-inline small">
                                                        <dt>
                                                            Size:
                                                        </dt>
                                                        <dd>
                                                            S
                                                        </dd>
                                                    </dl>
                                                    <dl class="dlist-inline small">
                                                        <dt>
                                                            Color:
                                                        </dt>
                                                        <dd>
                                                            Obviously Black color
                                                        </dd>
                                                    </dl>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option>
                                                    1
                                                </option>
                                                <option>
                                                    2
                                                </option>
                                                <option>
                                                    3
                                                </option>
                                                <option>
                                                    4
                                                </option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="price-wrap">
                                                <var class="price">
                                                    IDR 35000
                                                </var>
                                                <small class="text-muted">
                                                    (IDR 35000 each)
                                                </small>
                                            </div>
                                            <!-- price-wrap .// -->
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-outline-danger" href="">
                                                × Remove
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- card.// -->
                        <p class="alert alert-success">
                            Add IDR 50000 of eligible items to your order to qualify for FREE Shipping.
                        </p>
                        <dl class="dlist-align">
                            <dt>
                                Total price:
                            </dt>
                            <dd class="text-right">
                                IDR 35000
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
                                    IDR 35000
                                </strong>
                            </dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>
                                Donated:
                            </dt>
                            <dd class="text-right">
                                <strong>
                                    IDR 10000
                                </strong>
                            </dd>
                        </dl>
                        <br/>
                        <hr>
                        </hr>
                    </aside>
                </div>
            </div>
        </section>
        <script>
            $(document).ready(function(){
                $('#myTable').DataTable();
            });
        </script>
	</body>
</html>
