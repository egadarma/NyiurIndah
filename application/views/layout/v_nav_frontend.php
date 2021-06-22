			
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
				                	<li class="nav-setting">
				                		<a href="#"><span class="lnr lnr-cog"></span></a>
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
													<a href="<?=base_url('belanja')?>" class="btn-cart pull-left" onclick="window.location.href='#'">view cart</a>
													</div>
													<div class="col-sm-6">
													<button class="btn-cart pull-right" onclick="window.location.href='#'">Check Out</button>
													</div>
													</div>
				                                
				                            </li>
										<?php } ?>									
				                        </ul>
				                    </li><!--/.dropdown-->
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
    