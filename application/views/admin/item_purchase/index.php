<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Item Pembelian'); ?></h5>
<!--Action-->
<div>
	<div class="float_left padding_10">
		<a href="<?php echo site_url('admin/item_purchase/save'); ?>"
			class="btn btn-success">Tambahkan</a>
	</div>
	<div class="float_left padding_10">
		<i class="fa fa-download"></i> Eksport <select name="xeport_type" class="select"
			onChange="window.location='<?php echo site_url('admin/item_purchase/export'); ?>/'+this.value">
			<option>Pilih..</option>
			<option>Pdf</option>
			<option>CSV</option>
		</select>
	</div>
	<div  class="float_right padding_10">
		<ul class="left-side-navbar d-flex align-items-center">
			<li class="hide-phone app-search mr-15">
                <?php echo form_open_multipart('admin/item_purchase/search/',array("class"=>"form-horizontal")); ?>
                    <input name="key" type="text"
				value="<?php echo isset($key)?$key:'';?>" placeholder="Cari..."
				class="form-control">
				<button type="submit" class="mr-0">
					<i class="fa fa-search"></i>
				</button>
                <?php echo form_close(); ?>
            </li>
		</ul>
	</div>
</div>
<!--End of Action//-->

<!--Data display of item_purchase-->
<table class="table table-striped table-bordered">
	<tr>
		<th>No.Pembelian</th>
		<th>Produk</th>
		<th>Harga/Item</th>
		<th>Jumlah Item</th>
		<th>Total Item</th>
		<th>Actions</th>
	</tr>
	<?php foreach($item_purchase as $c){ ?>
    <tr>
		<td><?php
				$this->CI = & get_instance();
				$this->CI->load->database();
				$this->CI->load->model('Purchase_model');
				$dataArr = $this->CI->Purchase_model->get_purchase($c['purchase_id']);
				echo html_entity_decode($dataArr['purchase_no']);
			?>
		</td>
		<td><?php
				$this->CI = & get_instance();
				$this->CI->load->database();
				$this->CI->load->model('Product_model');
				$dataArr = $this->CI->Product_model->get_product($c['product_id']);
				echo html_entity_decode($dataArr['product_name']);
			?>
		</td>
		<td><?php echo html_entity_decode($c['item_cost']); ?></td>
		<td><?php echo html_entity_decode($c['item_quantity']); ?></td>
		<td><?php echo html_entity_decode($c['item_total']); ?></td>
		<td><a
			href="<?php echo site_url('admin/item_purchase/details/'.$c['id']); ?>" title="Lihat Detail"
			class="action-icon"> <i class="zmdi zmdi-eye"></i></a> <a
			href="<?php echo site_url('admin/item_purchase/save/'.$c['id']); ?>" title="Edit"
			class="action-icon"> <i class="zmdi zmdi-edit"></i></a> <a
			href="<?php echo site_url('admin/item_purchase/remove/'.$c['id']); ?>" title="Hapus"
			onClick="return confirm('Apa kamu yakin ingin menghapusnya?');"
			class="action-icon"> <i class="zmdi zmdi-delete"></i></a></td>
	</tr>
	<?php } ?>
</table>
<!--End of Data display of item_purchase//-->

<!--No data-->
<?php
if (count($item_purchase) == 0) {
    ?>
<div align="center">
	<h3>Data tidak ditemukan</h3>
</div>
<?php
}
?>
<!--End of No data//-->

<!--Pagination-->
<?php
echo $link;
?>
<!--End of Pagination//-->
