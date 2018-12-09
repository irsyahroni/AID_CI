<header class="section-header">
  <section class="header-main">
    <div class="container">
      <div class="row align-items-center">
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
                $text_cart_url .= '<small class="text-wrap">Inside Cart: '. $this->cart->total_items() .' items </small>'; ?>
              <?=anchor('welcome/cart', $text_cart_url)?>
            </div>
          <!-- widget .// -->
          <?php if($this->session->userdata('username')) { ?>
            <div class="widget-header">
              <?php
                $text_cart_url  = '<span class="icon-wrap icon-xs bg2 round text-secondary fa fa-user" aria-hidden="true"></span>'; 
                $text_cart_url .= '<small class="text-wrap">Hello, '. $this->session->userdata('username') .' </small>'; ?>
              <?=anchor('welcome/cart', $text_cart_url)?>
              
              <?php echo anchor('logout', 'Logout');?>
            </div>
          <?php } else { ?>
            <div class="widget-header dropdown">
              
              <span class="icon-wrap icontext icon-xs bg2 round text-secondary fa fa-user" aria-hidden="true">
              </span>
              <a class="ml-3 icontext" data-offset="20,10" data-toggle="dropdown" href="#">
                <div class="text-wrap">
                  <small>
                    Hello.
                  </small>
                  <span>
                    Login
                    <i class="fa fa-caret-down"></i>
                  </span>
                </div>
              </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <form class="px-4 py-3">
                    <div><?=validation_errors()?></div>
                    <div><?=$this->session->flashdata('error')?></div>
                    <?=form_open('login', ['class'=>'form-horizontal'])?>
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="username">
                      </div>
                    </div>                                      
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                        <label>
                          <input type="checkbox"> Remember me
                        </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </div>
                    </div>  
                  </form>
                  <hr class="dropdown-divider">
                    <a class="dropdown-item" href="#">
                      Dont have account? Sign up
                    </a>
                    <a class="dropdown-item" href="#">
                      Forgot password?
                    </a>
                  </hr>
                </div>
                <!--  dropdown-menu .// -->
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
</header>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <?=anchor(base_url(), 'AI.ID', ['class'=>'h2 logo text black '])?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	  
      <ul class="nav navbar-nav navbar-right">
		<li><?php echo anchor(base_url(), 'Home');?></li>
        <li>
			<?php
				$text_cart_url  = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
				$text_cart_url .= ' Inside Cart: '. $this->cart->total_items() .' items';
			?>
			<?=anchor('welcome/cart', $text_cart_url)?>
		</li>
		<?php if($this->session->userdata('username')) { ?>
			<li><div style="line-height:50px;">You Are : <?=$this->session->userdata('username')?></div></li>
			<li><?php echo anchor('logout', 'Logout');?></li>
		<?php } else { ?>
			<li><?php echo anchor('login', 'Login');?></li>
		<?php } ?>
      </ul>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>