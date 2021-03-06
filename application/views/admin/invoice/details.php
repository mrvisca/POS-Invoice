<a href="<?php echo site_url('admin/invoice/index'); ?>"
	class="btn btn-info"><i class="arrow_left"></i> Daftar</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Invoice'); ?></h5>
<!--Data display of invoice with id-->
<?php
 $c = $invoice;
?> 
<table class="table table-striped table-bordered">        
    <tr>
        <td>No.Invoice</td>
        <td><?php echo $c['invoice_no']; ?></td>
    </tr>
	<tr>
		<td>Nama Pelanggan</td>
		<td><?php
				$this->CI = & get_instance();
				$this->CI->load->database();
				$this->CI->load->model('Customers_model');
				$dataArr = $this->CI->Customers_model->get_customers($c['customers_id']);
				echo $dataArr['customer_name'];
			?>
	    </td>
	</tr>
	<tr>
		<td>Nama Panggilan</td>
		<td><?php
				$this->CI = & get_instance();
				$this->CI->load->database();
				$this->CI->load->model('Customers_model');
				$dataArr = $this->CI->Customers_model->get_customers($c['customers_id']);
				echo $dataArr['customer_name'];
			?>
	    </td>
	</tr>
	<tr>
        <td>Ekspedisi</td>
        <td><?php echo $c['expedisi']; ?></td>
    </tr>
	<tr>
		<td valign="top">Items</td>
		<td valign="top">
			<table>
				<tr>
					<th>Product</th>
					<th>Item Cost</th>
					<th>Item Quantity</th>
					<th>Item Total</th>
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
							echo $product['product_name'];
						?>
                    </td>
					<td><?=$result[$i]['item_cost']?></td>
					<td><?=$result[$i]['item_quantity']?></td>
					<td><?=$result[$i]['item_total']?></td>
				</tr>
                <?php
				  }
				?>
            </table>
		</td>
	</tr>
	<tr>
		<td>Tanggal Invoice</td>
		<td><?php echo html_entity_decode($c['date_of_invoice']); ?></td>
	</tr>
	<tr>
		<td>Handle By</td>
		<td><?php
			$this->CI = & get_instance();
			$this->CI->load->database();
			$this->CI->load->model('Users_model');
			$dataArr = $this->CI->Users_model->get_users($c['users_id']);
			echo $dataArr['email'];
			?>
		</td>
	</tr>
	<tr>
		<td>Deskripsi Pesanan</td>
		<td><?php echo html_entity_decode($c['description']); ?></td>
	</tr>
	<tr>
		<td>Catatan Internal</td>
		<td><?php echo html_entity_decode($c['internal_notes']); ?></td>
	</tr>
	<tr>
		<td>Total Harga</td>
		<td><?php echo html_entity_decode($c['total_cost']); ?></td>
	</tr>
	<tr>
		<td>Jumlah yang dibayarkan</td>
		<td><?php echo html_entity_decode($c['amount_paid']); ?></td>
	</tr>
	<tr>
		<td>Pembayaran</td>
		<td><?php echo html_entity_decode($c['payment']); ?></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><?php echo html_entity_decode($c['status']); ?></td>
	</tr>
</table>
<!--End of Data display of invoice with id//-->
