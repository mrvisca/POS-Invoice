<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Invoice'); ?></h5>
<!--Action-->
<div>
	<div class="float_left padding_10">
		<a href="<?php echo site_url('admin/invoice/save'); ?>"
			class="btn btn-success">Tambahkan</a>
	</div>
	<div class="float_left padding_10">
		<i class="fa fa-download"></i> Ekspor <select name="xeport_type" class="select"
			onChange="window.location='<?php echo site_url('admin/invoice/export'); ?>/'+this.value">
			<option>Pilih..</option>
			<option>Pdf</option>
			<option>CSV</option>
		</select>
	</div>
	<div  class="float_right padding_10">
		<ul class="left-side-navbar d-flex align-items-center">
			<li class="hide-phone app-search mr-15">
                <?php echo form_open_multipart('admin/invoice/search/',array("class"=>"form-horizontal")); ?>
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

<!--Data display of invoice-->
<table class="table table-striped table-bordered">
	<tr>
		<th>No.Invoice</th>
		<th>Nama Pelanggan</th>
		<th>Tanggal Invoice</th>
		<th>Items</th>
		<th>Total Harga</th>
		<th>Pembayaran</th>
		<th>Status</th>
		<th>Actions</th>
	</tr>
	<?php foreach($invoice as $c){ ?>
    <tr>
		<td><?php echo html_entity_decode($c['invoice_no']); ?></td>
		<td><?php
				$this->CI = & get_instance();
				$this->CI->load->database();
				$this->CI->load->model('Customers_model');
				$dataArr = $this->CI->Customers_model->get_customers($c['customers_id']);
				echo html_entity_decode($dataArr['customer_name']);
			?>
		</td>
		<td><?php echo html_entity_decode($c['date_of_invoice']); ?></td>
		<td valign="top">
			<table>
				<tr>
					<th>Produk</th>
					<th>Harga/Item</th>
					<th>Jumlah Item</th>
					<th>Total Item</th>
				</tr>
           
           <?php
			$this->CI = & get_instance();
			$this->CI->load->database();
			$result = $this->db->get_where('item_invoice', array('invoice_id' => $c['id']))->result_array();
			for ($i = 0; $i < count($result); $i ++) {
          ?>
                   <tr>
					<td>
						<?php
							$this->CI = & get_instance();
							$this->CI->load->database();
							$this->CI->load->model('Product_model');
							$product = $this->CI->Product_model->get_product($result[$i]['product_id']);
							echo html_entity_decode($product['product_name']);
						?>
                    </td>
					<td><?=html_entity_decode($result[$i]['item_cost'])?></td>
					<td><?=html_entity_decode($result[$i]['item_quantity'])?></td>
					<td><?=html_entity_decode($result[$i]['item_total'])?></td>
				</tr>
                <?php
					}
				?>
            </table>
		</td>
		<td><?php echo html_entity_decode($c['total_cost']); ?></td>
		<td><?php echo html_entity_decode($c['payment']); ?></td>
		<td><?php echo html_entity_decode($c['status']); ?></td>
		<td><a
			href="<?php echo site_url('admin/invoice/details/'.$c['id']); ?>" title="Lihat detail"
			class="action-icon"> <i class="zmdi zmdi-eye"></i></a> <a
			href="<?php echo site_url('admin/invoice/save/'.$c['id']); ?>" title="Edit"
			class="action-icon"> <i class="zmdi zmdi-edit"></i></a> <a
			href="<?php echo site_url('admin/invoice/remove/'.$c['id']); ?>" title="Hapus"
			onClick="return confirm('Apa kamu yakin ingin menghapusnya?');"
			class="action-icon"> <i class="zmdi zmdi-delete"></i></a>
            <a
			href="<?php echo site_url('admin/invoice/download/'.$c['id']); ?>" title="Cetak Invoice"
			class="action-icon"> <i class="zmdi zmdi-print"></i></a>
        </td>
	</tr>
	<?php } ?>
</table>
<!--End of Data display of invoice//-->

<!--No data-->
<?php
if (count($invoice) == 0) {
    ?>
<div align="center">
	<h3>Data is not exists</h3>
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
