<a href="<?php echo site_url('admin/purchase/index'); ?>"
	class="btn btn-info"><i class="arrow_left"></i> Daftar</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Pembelian'); ?></h5>
<!--Data display of purchase with id-->
<?php
$c = $purchase;
?>
<table class="table table-striped table-bordered">
	<tr>
		<td>No.Pembelian</td>
		<td><?php echo html_entity_decode($c['purchase_no']); ?></td>
	</tr>
	<tr>
		<td>Vendor</td>
		<td>
		<?php
$this->CI = & get_instance();
$this->CI->load->database();
$this->CI->load->model('Supplier_model');
$dataArr = $this->CI->Supplier_model->get_supplier($c['supplier_id']);
echo html_entity_decode($dataArr['company']);
?>
	</td>
	</tr>
	<tr>
		<td valign="top">Item</td>
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
    $result = $this->db->get_where('item_purchase', array(
        'purchase_id' => $c['id']
    ))->result_array();
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
	</tr>
	<tr>
		<td>Tanggal Pembelian</td>
		<td><?php echo html_entity_decode($c['date_of_purchase']); ?></td>
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
		<td>Deskripsi Pemesanan</td>
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
		<td><?php echo html_entity_decode($c['pembayaran']); ?></td>
	</tr>
</table>
<!--End of Data display of purchase with id//-->
