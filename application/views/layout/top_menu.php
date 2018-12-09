<header class="section-header">
  <section class="header-main">
    <div class="container">
      <div class="row align-items-center ">
        <div class="col-lg-3">
          <div class="brand-wrap">
            <img class="logo" src="<?php echo base_url();?>assets/images/Ai_Logo_noperson.png" />
            <?=anchor(base_url(), 'AI.ID', ['class'=>'h2 logo-text black'])?>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <form action="#" class="search-wrap">
            <div class="input-group">
              <input class="form-control" placeholder="Search" type="text">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </input>
            </div>
          </form>
          <!-- search-wrap .end// -->
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="widgets-wrap d-flex justify-content-end">
            <div class="widget-header">
              <?php
                $text_cart_url  = '<span class="icon-wrap icon-xs bg2 round text-secondary fa fa-shopping-cart" aria-hidden="true"></span>'; 
                $text_cart_url .= '<span class="text-wrap">Inside Cart: '. $this->cart->total_items() .' items </span>'; ?>
              <?=anchor('welcome/cart', $text_cart_url)?>
            </div>
          <!-- widget .// -->
          <?php if($this->session->userdata('username')) { ?>
            <div class="widget-header">
              <?php
                $login_true  = '<span class="icon-wrap icon-xs bg2 round text-secondary fa fa-user" aria-hidden="true"></span>'; 
                $login_true .= '<span class="text-wrap">Hello, '. $this->session->userdata('username') .' </span>'; ?>
              <?=anchor('welcome/cart', $login_true)?>
              <?php echo anchor('logout', 'Logout');?>
            </div>
          <?php } else { ?>
            <div class="widget-header dropdown">
              <?php 
                $login_false  = '<span class="icon-wrap icon-xs bg2 round text-secondary fa fa-user" aria-hidden="true"></span>'; 
                $login_false .= '<span > Login </span>'; ?>
              <?=anchor('login',$login_false)?>
              <?php }?>
              </div>
              <!-- widget  dropdown.// -->
            </div>
          </div>
          <!-- widgets-wrap.// -->
        </div>
        <!-- col.// -->
      </div>
      <!-- row.// -->
    </div>
    <!-- container.// -->
  </section>


<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link pl-0" href="#">
            <strong>
              All category
            </strong>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="category-fashion.html">
            Fashion
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Phone Accessories
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Home Decoration
          </a>
        </li>
      </ul>
    </div> <!-- collapse .// -->
  </div> <!-- container .// -->
</nav>
</header>