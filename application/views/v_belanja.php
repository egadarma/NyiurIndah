<header id="home" class="welcome-hero">
<!--feature start -->
<section id="feature" class="feature">
			<div class="container">
				<div class="section-header">
					<h2>Keranjang Belanja</h2>
				</div><!--/.section-header-->
				<div class="feature-content">
					<!-- Default box -->
<div class="card card-solid">
    <div class="card-body pb-0">
        <div class="row">
        <div class="col-sm-12">
        <?php echo form_open('belanja/update'); ?>

<table class="table" cellpadding="6" cellspacing="1" style="width:100%">

<tr>
        <th width="100px">Jumlah</th>
        <th class="text-center">Nama Barang</th>
        <th class="text-center">Harga</th>
        <th class="text-center">Berat</th>
        <th class="text-center">Sub-Total</th>
        <th  class="text-center">Action</th>
</tr>

<?php $i = 1; ?>

<?php 
$total_berat = 0;
foreach ($this->cart->contents() as $items) { 
        $barang= $this->m_home->detail_barang($items['id']);
        $berat =  $items['qty'] * $barang->berat;
        $total_berat = $total_berat + $berat;
        ?>

        <tr>
                <td><?php echo form_input(array(
                    'name' => $i.'[qty]', 
                    'value' => $items['qty'], 
                    'maxlength' => '3', 
                    'min' => '0',
                    'size' => '5',
                    'type' => 'number',
                    'class' => 'form-control'
                    )); ?></td>
                <td><?php echo $items['name']; ?></td>
                <td class="text-center">Rp.<?php echo number_format($items['price'], 0); ?></td>
                <td class="text-center"> <?= $berat?> gr</td>
                <td class="text-center">Rp.<?php echo number_format($items['subtotal'], 0); ?></td>
                <td class="text-center">
                    <a href="<?= base_url('belanja/delete/' . $items['rowid'])?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
        </tr>

<?php $i++; ?>

<?php } ?>

<tr>
        <td class="left"><strong>Total</strong></td>
        <td class="left">Rp.<?php echo number_format($this->cart->total(), 0); ?></td>
        <th>Total Berat : <?= $total_berat ?> Gr</th>
</tr>


</table>

        
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Cart</button>
            
                    <a href="<?= base_url('belanja/clear') ?>" class="btn btn-danger"><i class="fa fa-recycle"></i> Clear Cart</a>
                    <a href="#" class="btn btn-success"><i class="fa fa-check-square"></i> Check Out</a>
                    <?php echo form_close(); ?>
                    <br>
        </div>
        </div>
    </div>
</div>