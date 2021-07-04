			
			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->

				        <div class="container">            
				            <!-- Start Atribute Navigation -->
				            <div class="attr-nav">
				                <ul>

									<li class="search">
				                		<a href="#"><span class="lnr lnr-magnifier"></span></a>
				                	</li><!--/.search-->

									<?php 
          $keranjang = $this->cart->contents();
          $jml_item = 0;
          foreach ($keranjang as $key => $value) {
            $jml_item = $jml_item + $value['qty'];
          } 
        ?>
				                    <li class="dropdown">
				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
				                            <span class="lnr lnr-cart"></span>
											<span class="badge badge-bg-1"><?= $jml_item ?></span>
				                        </a>
										
				                        <ul class="dropdown-menu cart-list s-cate">
										<?php if (empty($keranjang)) { ?>
											<li class="single-cart-list">
												<p>Keranjang Belanja Kosong</p>
											</li>
										<?php } else {
										 foreach ($keranjang as $key => $value) { 
            $barang = $this->m_home->detail_barang($value['id']);  
          ?>
				                            <li class="single-cart-list">
				                                <a href="#" class="photo"><img src="<?=base_url('asset/images/' . $barang->gambar) ?>" class="cart-thumb" alt="image" /></a>
				                                <div class="cart-list-txt">
				                                	<h5><a href="#"><?= $value['name'] ?></a></h5>
				                                	<p><?= $value['qty'] ?> x <span class="price">Rp.<?= number_format($value['price'], 0) ?></span></p>
													<h6><a href="#">Rp.<?= $this->cart->format_number($value['subtotal']);?></a></h6>
				                                </div><!--/.cart-list-txt-->
				                            </li><!--/.single-cart-list -->
											<?php } ?>
											<!-- Barang End -->

				                            <li class="total">
				                                <span>Total: Rp.<?= $this->cart->format_number($this->cart->total()); ?></span><br><br>
												<div class="row">
													<div class="col-sm-6">
													<a href="<?=base_url('belanja')?>" class="btn-cart pull-left">view cart</a>
													</div>
													<div class="col-sm-6">
													<a href="<?=base_url('belanja/che')?>" class="btn-cart pull-right" onclick="window.location.href='#'">Check Out</a>
													</div>
													</div>
				                                
				                            </li>
										<?php } ?>									
				                        </ul>
				                    </li><!--/.dropdown-->
											
									<li>
								<?php if ($this->session->userdata('email') == "") { ?>
									<a class="nav-link" href="<?=base_url('pelanggan/register')?>">
          <span class="brand-text font-weight-light">Login/Register</span>
		  <img src="<?= base_url()?>template/dist/img/user1-128x128.jpg" alt="logo admin lte" class="brand-image img-circle elevation-3" style="opacity .8"  width="30px">
        </a>
								<?php }else{ ?>
									<a class="nav-link" data-toggle="dropdown" href="#">
          <span class="brand-text font-weight-light"><?= $this->session->userdata('username') ?></span>
		  <img src="<?= base_url()?>asset/foto_pelanggan/user1-128x128.jpg" alt="logo admin lte" class="brand-image img-circle elevation-3" style="opacity .8"  width="30px">
        </a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
          <li>
          <a href="<?=base_url('pelanggan/akun')?>" class="dropdown-item">
            <i class="lnr lnr-user mr-2"></i> Akun Saya
          </a>
		  </li>
          
          <li>
          <a href="#" class="dropdown-item">
            <i class="lnr lnr-cart mr-2"></i> Pesanan Saya
          </a>
          </li>
		  <br>
          <a href="<?=base_url('pelanggan/logout')?>" class="btn-danger text-center" style="float: center;min-width: 160px;">Logout</a>
        </ul>
		<?php } ?>
      </li>
				                </ul>
				            </div><!--/.attr-nav-->
				            <!-- End Atribute Navigation -->

				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="index.html">Nyiur Indah</a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li><a href="<?= base_url() ?>">Home</a></li>
									<?php $kategori = $this->m_home->get_all_data_kategori(); ?>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Kategori</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              
              <?php foreach ($kategori as $key => $value) { ?>
                <li><a href="<?= base_url('home/kategori/'. $value->id_kategori)?>" class="dropdown-item"><?= $value->nama_kategori?> </a></li>
              <?php }?>
              
            
            </ul>
          </li>
				                    <li class="scroll"><a href="#blog">blog</a></li>
				                    <li class="scroll"><a href="#newsletter">contact</a></li>
				                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->
    