<link rel="stylesheet"
	href="<?php echo base_url(); ?>public/css/custom.css">    
<h3 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Item invoice'); ?></h3>
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
<!--Data display of item_invoice-->
<table border="1" cellspacing="3" cellpadding="3" class="table" align="center" width="100%">
	<tr>
		<th align="center">No.Invoice</th>
		<th align="center">Produk</th>
		<th align="center">Harga/Item</th>
		<th align="center">Jumlah Item</th>
		<th align="center">Total Item</th>

	</tr>
	<?php foreach($item_invoice as $c){ ?>
    <tr>
		<td align="center"><?php
    $this->CI = & get_instance();
    $this->CI->load->database();
    $this->CI->load->model('Invoice_model');
    $dataArr = $this->CI->Invoice_model->get_invoice($c['invoice_id']);
    echo html_entity_decode($dataArr['invoice_no']);
    ?>
									</td>
		<td align="center"><?php
    $this->CI = & get_instance();
    $this->CI->load->database();
    $this->CI->load->model('Product_model');
    $dataArr = $this->CI->Product_model->get_product($c['product_id']);
    echo html_entity_decode($dataArr['product_name']);
    ?>
									</td>
		<td align="center"><?php echo html_entity_decode($c['item_cost']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['item_quantity']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['item_total']); ?></td>

	</tr>
	<?php } ?>
</table>
<!--End of Data display of item_invoice//-->
