<link rel="stylesheet"
	href="<?php echo base_url(); ?>public/css/custom.css">    
<h3 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Invoice'); ?></h3>
Tanggal: <?php echo date("d-m-Y");?>
<hr>
<!--*************************************************
*********mpdf header footer page no******************
****************************************************-->
<htmlpageheader name="firstpage" class="hide">
</htmlpageheader>

<htmlpageheader name="otherpages" class="hide">
    <span class="float_left"></span>
    <span  class="padding_5"> &nbsp; &nbsp; &nbsp;
     &nbsp; &nbsp; &nbsp;</span>
    <span class="float_right"></span>         
</htmlpageheader>      
<sethtmlpageheader name="firstpage" value="on" show-this-page="1" />
<sethtmlpageheader name="otherpages" value="on" /> 
   
<htmlpagefooter name="myfooter"  class="hide">                          
     <div align="center">
               <br><span class="padding_10">Halaman {PAGENO} dari {nbpg}</span> 
     </div>
</htmlpagefooter>    

<sethtmlpagefooter name="myfooter" value="on" />
<!--*************************************************
*********#////mpdf header footer page no******************
****************************************************-->
<!--Data display of invoice-->
<table border="1" cellspacing="3" cellpadding="3" class="table" align="center">
	<tr>
        <th align="center">No</th>
		<th align="center">No.Invoice</th>
		<th align="center">Tanggal Invoice</th>
		<th align="center">Handle By</th>
		<th align="center">Total Harga</th>
		<th align="center">Jumlah Dibayarkan</th>
		<th align="center">Pembayaran</th>
		<th align="center">Status</th>
	</tr>
	<?php 
	   $sl_no=0;
	   foreach($invoice as $c){ 
	   $sl_no = $sl_no+1;
	?>
    <tr>
        <td><?php echo $sl_no; ?>.</td>
		<td><?php echo $c['invoice_no']; ?></td>
		<td><?php echo html_entity_decode($c['date_of_invoice']); ?></td>
		<td><?php
			$this->CI = & get_instance();
			$this->CI->load->database();
			$this->CI->load->model('Users_model');
			$dataArr = $this->CI->Users_model->get_users($c['users_id']);
			echo $dataArr['first_name'];
			?>
		</td>
		<td><?php echo html_entity_decode($c['total_cost']); ?></td>
		<td><?php echo html_entity_decode($c['amount_paid']); ?></td>
		<td><?php echo html_entity_decode($c['payment']); ?></td>
		<td><?php echo html_entity_decode($c['status']); ?></td>
	</tr>
	<tr>
	<td valign="top">Items</td>
	<td colspan="7">
	<table border="1" class="table" align="center" width="100%">
	<tr>
		<td colspan="2" align="center">Produk</td>
		<td colspan="2" align="center">Harga/Item</td>
		<td colspan="2" align="center">Jumlah Item</td>
		<td colspan="2" align="center">Total Item</td>
	</tr>
   	<?php
    	$this->CI = & get_instance();
    	$this->CI->load->database();
    	$result = $this->db->get_where('item_invoice', array(
        'invoice_id' => $c['id']
    	))->result_array();
    	for ($i = 0; $i < count($result); $i ++) {
    ?>
    <tr>
		<td colspan="2" align="center">
        <?php
        	$this->CI = & get_instance();
        	$this->CI->load->database();
        	$this->CI->load->model('Product_model');
        	$product = $this->CI->Product_model->get_product($result[$i]['product_id']);
        	echo html_entity_decode($product['product_name']);
        ?>
        </td>
		<td colspan="2" align="center"><?=html_entity_decode($result[$i]['item_cost'])?></td>
		<td colspan="2" align="center"><?=html_entity_decode($result[$i]['item_quantity'])?></td>
		<td colspan="2" align="center"><?=html_entity_decode($result[$i]['item_total'])?></td>
	</tr>
    <?php
    }
    ?>
</table>
</td>
</tr>
	<?php } ?>
</table>
<!--End of Data display of invoice//-->
