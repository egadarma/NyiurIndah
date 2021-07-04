<header id="home" class="welcome-hero">
<!--feature start -->
<section id="feature" class="feature">
</header><!--/.welcome-hero-->
			<div class="container">
				<div class="section-header">
                                <br>
                                <br>
					<h2>Cekout Belanja</h2>
				</div><!--/.section-header-->
				<div class="feature-content">
					<!-- Default box -->
<div class="card card-solid">
    <div class="card-body pb-0">
        <div class="row">
        <div class="col-sm-12 mr-100 ml-100">

    <div class="card-body pb-0">
        <div class="row">
        <div class="col-sm-12 mr-100 ml-100">

        <!-- Main content -->
        <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="lnr lnr-cart"></i> AdminLTE, Inc.
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Admin, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br>
                    Email: info@almasaeedstudio.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                 
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b><br>
                  <br>
                  <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> 2/22/2014<br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th >Qty</th>
                      <th class="text-center">Harga</th>
                      <th class="text-center">Barang</th>
                      <th class="text-center">Total Harga</th>
                      <th class="text-center">Berat</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $total_berat = 0;
                        foreach ($this->cart->contents() as $items) { 
                            $barang= $this->m_home->detail_barang($items['id']);
                            $berat =  $items['qty'] * $barang->berat;
                            $total_berat = $total_berat + $berat;
                            
                        ?>
                    
                    <tr>
                    <td><?php echo $items['qty']; ?></td>
                <td class="text-center">Rp.<?php echo number_format($items['price'], 0); ?></td>
                    <td class="text-center"><?php echo $items['name']; ?></td>
                <td class="text-center">Rp.<?php echo number_format($items['subtotal'], 0); ?></td>
                <td class="text-center"> <?= $berat?> gr</td>
                    </tr>
                        <?php } ?>

                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-sm-8 invoice-col">
                  Tujuan
                  <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Provinsi</label>
                        <select name="provinsi" class="form-control"></select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kota/Kabupaten</label>
                        <select name="kota" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ekspedisi</label>
                        <select name="expedisi" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Paket</label>
                        <select name="paket" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control">
                        </input>
                    </div>
                </div>
            </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <th>Rp.<?php echo number_format($items['subtotal'], 0); ?></th>
                      </tr>
                      <tr>
                        <th>Berat:</th>
                        <th><?= $berat?> gr</th>
                      </tr>
                      <tr>
                        <th>Ongkir:</th>
                        <th><label id="ongkir"></label></th>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <th><label id="total_bayar"></label></th>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-sm-6">
                <br>
                  <a href="<?= base_url('belanja')?>" class="btn btn-warning"><i class="lnr lnr-arrow-left-circle"></i> Kembali ke Keranjang </a>
                </div>
                <div class="col-sm-16">
                <br>
                  <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                    <i class="lnr lnr-cart"></i> Proses Cekout
                  </button>
                </div>
              </div>
            </div>

        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <script>
    $(document).ready(function(){
        //masukkan data ke select provinsi
        $.ajax({
            type: "POST",
            url: "<?= base_url('rajaongkir/provinsi')?>",
            success: function(hasil_provinsi) {
                // console.log(hasil_provinsi);
                $("select[name=provinsi]").html(hasil_provinsi);
            }
        })

        //masukkan data ke select kota
        $("select[name=provinsi]").on("change", function() {
            var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
            $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/kota')?>", 
                data: 'id_provinsi=' + id_provinsi_terpilih,
                success: function(hasil_kota) {
                    $("select[name=kota]").html(hasil_kota);
                }
            });
        });

        $("select[name=kota]").on("change", function() {
          $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/expedisi')?>", 
                success: function(hasil_expedisi) {
                    $("select[name=expedisi]").html(hasil_expedisi);
                }
            });
        });

        $("select[name=expedisi]").on("change", function() {
           //mendapatkan expedisi terpilih
           var expedisi_terpilih =  $("select[name=expedisi]").val()
              //mendapatkan kota tujuan
              var id_kota_tujuan_terpilih = $("option:selected","select[name=kota]").attr('id_kota')
              //mengambil total berat
              var total_berat = <?= $berat?>;
              
          $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/paket')?>", 
                data: 'expedisi='+ expedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=' + total_berat,
                success: function(hasil_paket) {
                  $("select[name=paket]").html(hasil_paket);
                }
            });
        });

        $("select[name=paket]").on("change", function() {
          //mengambil ongkir
          var data_ongkir = $("option:selected", this).attr('ongkir');
          var reverse = data_ongkir.toString().split('').reverse().join(''),
            ribuan_ongkir = reverse.match(/\d{1,3}/g);
            ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');

          $("#ongkir").html("Rp. " + ribuan_ongkir)
          //menghitung total bayar
          var ongkir = $("option:selected", this).attr('ongkir');
          var data_total_bayar = parseInt(ongkir) + parseInt(<?= $items['subtotal']?>);
          var reverse2 = data_total_bayar.toString().split('').reverse().join(''),
            ribuan_total_bayar = reverse2.match(/\d{1,3}/g);
            ribuan_total_bayar = ribuan_total_bayar.join(',').split('').reverse().join('');
          $("#total_bayar").html("Rp. " + ribuan_total_bayar);
        });

    });
</script>