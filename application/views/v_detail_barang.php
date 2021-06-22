<!-- Font Awesome -->
<link rel="stylesheet" href="<?= base_url() ?>template/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  
<header id="home" class="welcome-hero">
<!--feature start -->
<section id="feature" class="feature">
			<div class="container">
				<div class="section-header">
					<h2>Detail Barang</h2>
				</div><!--/.section-header-->
				<div class="feature-content">
					<!-- Default box -->
<div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12">
                <img src="<?= base_url('asset/images/' . $barang->gambar)?>" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="<?= base_url('asset/images/' . $barang->gambar)?>" alt="Product Image"></div>
                <?php foreach ($gambar as $key => $value) { ?>
                    <div class="product-image-thumb" ><img src="<?= base_url('asset/images_barang/' . $value->gambar)?>" alt="Product Image"></div>
                <?php } ?>
                
              </div>
            </div>
            <div class="col-12 col-sm-6"><br>
              <h3 class=><?= $barang->nama_barang?></h3><hr>
              <h5><?= $barang->nama_kategori?></h5><hr>
              <p><?= $barang->deskripsi ?></p>

              <hr>
              
              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  RP. <?= number_format($barang->harga, 0)?>.00
                </h2>
              </div>
              <hr>

              <?php
                echo form_open('belanja/add');
                echo form_hidden('id', $barang->id_barang);
                echo form_hidden('price', $barang->harga);
                echo form_hidden('name', $barang->nama_barang);
                echo form_hidden('redirect_page', str_replace('index.php', '', current_url()));
              ?>
              <div class="mt-4">
                <div class="row">
                  <div class="col-sm-2">
                    <input type="number" name="qty" class="form-control" value="1" min="1">
                  </div>
                <div class="col-sm-8">
                <button type="submit" class="btn btn-primary btn-flat swalDefaultSuccess">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i> 
                  Add to Cart
                </button>
                </div>
                </div>
                </div>
                <?php echo form_close(); ?>


            </div>
				</div>
			</div><!--/.container-->

		</section><!--/.feature-->
		<!--feature end -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url() ?>template/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>template/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>template/dist/js/demo.js"></script>