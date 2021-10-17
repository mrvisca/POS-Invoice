<a href="<?php echo site_url('admin/customers/index'); ?>"
	class="btn btn-info"><i class="arrow_left"></i> Daftar</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Customer'); ?></h5>

<!--Data display of customers with id-->
<?php
 $c = $customers;
?> 
<table class="table table-striped table-bordered">
    <tr>
		<td>Nama Panggilan</td>
		<td><?php echo html_entity_decode($c['nick_name']); ?></td>
	</tr>
	<tr>
		<td>Nama Pelanggan</td>
		<td><?php echo html_entity_decode($c['customer_name']); ?></td>
	</tr>
	<tr>
		<td>No.Telepon Utama</td>
		<td><?php echo html_entity_decode($c['phone_no']); ?></td>
	</tr>
	<tr>
		<td>No.Whatsapp</td>
		<td><?php echo html_entity_decode($c['phone_no1']); ?></td>
	</tr>
	<tr>
		<td>No.Telepon Lainnya</td>
		<td><?php echo html_entity_decode($c['phone_no2']); ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><?php echo html_entity_decode($c['address']); ?></td>
	</tr>
	<tr>
		<td>Kota</td>
		<td><?php echo html_entity_decode($c['city']); ?></td>
	</tr>
	<tr>
		<td>Provinsi</td>
		<td><?php echo html_entity_decode($c['state']); ?></td>
	</tr>
	<tr>
		<td>Kode Pos</td>
		<td><?php echo html_entity_decode($c['zip']); ?></td>
	</tr>
	<tr>
		<td>Website</td>
		<td><?php echo html_entity_decode($c['website']); ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo html_entity_decode($c['email']); ?></td>
	</tr>
	<tr>
		<td>Maps Coordinate</td>
		<td><?php echo html_entity_decode($c['maps']); ?></td>
	</tr>
	<tr>
		<td>Catatan</td>
		<td><?php echo html_entity_decode($c['deskripsi']); ?></td>
	</tr>
</table>
<!--End of Data display of customers with id//-->

<!--Data display of invoice-->
<table class="table table-striped table-bordered">
	<tr>
		<th>No.Invoice</th>
		<th>Tanggal</th>
		<th>Handle By</th>
		<th>Items</th>
		<th>Total Harga</th>
		<th>Pembayaran</th>
		<th>Status</th>
	</tr>
	<?php foreach($invoice as $c){ ?>
    <tr>
		<td><?php echo html_entity_decode($c['invoice_no']); ?></td>
		<td><?php echo html_entity_decode($c['date_of_invoice']); ?></td>
		<td><?php
			$this->CI = & get_instance();
			$this->CI->load->database();
			$this->CI->load->model('Users_model');
			$dataArr = $this->CI->Users_model->get_users($c['users_id']);
			echo $dataArr['first_name'];
			?>
		</td>
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
	</tr>
	<?php } ?>
</table>
<!--End of Data display of invoice//-->
