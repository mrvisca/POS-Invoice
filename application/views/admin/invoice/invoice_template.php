<link rel="stylesheet"
	href="<?php echo base_url(); ?>public/css/custom.css">  
<table class="table" align="center" width="100%">    
    <tr>
        <td width="30%">
            <?php
    		 if (is_file(APPPATH . '../public/' . $company[0]['file_company_logo']) && file_exists(APPPATH . '../public/' . $company[0]['file_company_logo'])) {
            ?>
			  <img src="<?php echo base_url().'public/'.$company[0]['file_company_logo']?>" class="picture_100x100">
			  <?php
             } else {
             ?>
            <img src="<?php echo base_url()?>public/uploads/no_image.jpg" class="picture_100x100">
            <?php
			}
			?>	
        </td>
        <td align="left">      
          <h3><?=html_entity_decode($company[0]['company_name'])?></h3>
          <?=html_entity_decode($company[0]['address'])?><br>
          <?=html_entity_decode($company[0]['city'])?>,<?=html_entity_decode($company[0]['state'])?>,<?=html_entity_decode($company[0]['zip'])?>,<?=html_entity_decode($company[0]['country'])?><br>
        </td>
        <td  width="10%">
        </td>
    </tr>
</table>

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
<div class="panel-heading">
   <h3 class="invoice"><strong>Invoice</strong></h3>
</div>  
<b>PEMBAYARAN KEPADA : </b>
<table border='1' class="table" align="left" width='100%'>
    <tr>
        <td>No.Invoice :</td>
        <td><?=html_entity_decode($invoice['invoice_no'])?></td>
        <td>Ekspedisi :</td>
        <td><?=html_entity_decode($invoice['expedisi'])?></td>
    </tr>
    <tr>
        <td>Nama :</td>
        <td><?=html_entity_decode($customers['customer_name'])?></td>
        <td>Tanggal Invoice :</td>
        <td><?=html_entity_decode($invoice['date_of_invoice'])?></td></tr>
    </tr>
    <tr>
        <td>Telepon :</td>
        <td><?=html_entity_decode($customers['phone_no'])?></td>
        <td>Jumlah dibayar :</td>
        <td><?=html_entity_decode($invoice['amount_paid'])?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><?=html_entity_decode($customers['address'])?>,<?=html_entity_decode($customers['city'])?></td>
        <td>Pembayaran</td>
        <td><?=html_entity_decode($invoice['payment'])?></td>
    </tr>
</table>       
<br>                          
<b>PRODUK</b>                
<!--Data display of invoice-->
<table border='1' class="table" align="center" width="100%">    
    <tr>
        <th>Nama Produk</th>
        <th>Harga/Item</th>
        <th>Jumlah Item</th>
        <th>Total Barang</th>
    </tr>
   <?php
    $this->CI = & get_instance();
    $this->CI->load->database();
    $result = $this->db->get_where('item_invoice', array('invoice_id' => $invoice['id']))->result_array();
    for ($i = 0; $i < count($result); $i ++) {
    ?>
    <tr>
        <td align="center">
            <?php
                $this->CI = & get_instance();
                $this->CI->load->database();
                $this->CI->load->model('Product_model');
                $product = $this->CI->Product_model->get_product($result[$i]['product_id']);
                echo html_entity_decode($product['product_name']);
            ?>
        </td>
        <td align="center"><?=html_entity_decode($result[$i]['item_cost'])?></td>
        <td align="center"><?=html_entity_decode($result[$i]['item_quantity'])?></td>
        <td align="center"><?=html_entity_decode($result[$i]['item_total'])?></td>
    </tr>
    <?php
    }
    ?>
        <tr>
        <td colspan="3" align='right'>Total :</td>
        <td align='center'><?=html_entity_decode($invoice['total_cost'])?></td>
    </tr>
</table>		
<!--End of Data display of invoice//-->
<hr>
<table  cellspacing="3" cellpadding="3" class="table" align="left">
<ol>
    <tr><td><li>Barang pemesanan akan disiapkan setelah ada tanda bukti pembayaran</li></td></tr>
    <tr><td><li>Konfirmasi ini dibuat untuk menghindari kesalahan yang dibuat dari negoisasi awal dan disimpan pada server PT. SMBC</li></td></tr>
    <tr><td><li>Pembayaran dengan PPn 10% ditujukan ke Rekening Bank Mandiri 141-001-837-2524 a/n PT.Spectra Media Persada</li></td></tr>
    <tr><td><li>Pembayaran dengan PPn 10% ditujukan ke Rekening BNI 190979-5555 a/n PT.Spectra Media Persada</li></td></tr>
    <tr><td><li>Pembayaran Non-PPn 10 % ditujukan ke Rekening BCA 01831-777-85 a/n Faisal Setiawan NPWP : 24.743.904.5-617.000</li></td></tr>
    <tr><td><li>Pembayaran Non-PPn 10 % ditujukan ke Rekening Bank Mandiri 141-001-827-8093 a/n Nurul Faizah</li></td></tr>
    <tr><td><li>Barang yang sudah dibeli tidak bisa dikembalikan dengan alasan apapun, kecuali ada perjanjian bermaterai</li></td></tr>
    <tr><td><li>DP komitmen order yang sudah masuk tidak bisa refund dengan alasan apapun.</li></td></tr>
</ol>		
</table>
<br>
<br>
<div style="width:250px;float:left">
		<br/>
		<br/>
        <br/><br/><br/><br/><br/><br/>
		<p align="center">   Intan    <br/>Admin Keuangan</p>
	</div>
	<div style="width:225px;float:right">
		Gresik, <?php echo date('d F Y', strtotime($invoice['date_of_invoice'])); ?>
		<br/>
        <br/><br/>&#160; &#160; &#160; &#160; &#160;<?php
    		 if (is_file(APPPATH . '../public/' . $company[0]['file_stampel']) && file_exists(APPPATH . '../public/' . $company[0]['file_stampel'])) {
            ?>
			  <img src="<?php echo base_url().'public/'.$company[0]['file_stampel']?>" class="picture_50x50">
			  <?php
             } else {
             ?>
            <img src="<?php echo base_url()?>public/uploads/no_image.jpg" class="picture_50x50">
            <?php
			}
			?><br/><br/><br/>
		<p align="left">&#160; &#160; &#160; &#160; &#160; Nurul Faizah<br/> &#160; &#160; &#160;Manajer Keuangan</p>
	</div>
	<div style="clear:both"></div>
	
</div>
	
<!-- konten selanjutnya -->




<!--Halaman 2 Pdf-->
<br><br><br><br><br><br><br><br><br><br>
<table class="table" align="center" width="100%">    
    <tr>
        <td width="30%">
            <?php
    		 if (is_file(APPPATH . '../public/' . $company[0]['file_company_logo']) && file_exists(APPPATH . '../public/' . $company[0]['file_company_logo'])) {
            ?>
			  <img src="<?php echo base_url().'public/'.$company[0]['file_company_logo']?>" class="picture_100x100">
			  <?php
             } else {
             ?>
            <img src="<?php echo base_url()?>public/uploads/no_image.jpg" class="picture_100x100">
            <?php
			}
			?>	
        </td>
        <td align="left">      
          <h3><?=html_entity_decode($company[0]['company_name'])?></h3>
          <?=html_entity_decode($company[0]['address'])?><br>
          <?=html_entity_decode($company[0]['city'])?>,<?=html_entity_decode($company[0]['state'])?>,<?=html_entity_decode($company[0]['zip'])?>,<?=html_entity_decode($company[0]['country'])?><br>
        </td>
        <td  width="10%">
        </td>
    </tr>
</table>

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
               <br><span class="padding_10">Halaman {PAGENO} of {nbpg}</span> 
     </div>
</htmlpagefooter>    

<sethtmlpagefooter name="myfooter" value="on" />
<!--*************************************************
*********#////mpdf header footer page no******************
****************************************************-->
<div class="panel-heading">
   <h4 class="invoice"><strong>Invoice</strong></h4>
</div>  
<b>PEMBAYARAN KEPADA : </b>
<table border='1' class="table" align="left" width='100%'>
    <tr>
        <td>No.Invoice :</td>
        <td><?=html_entity_decode($invoice['invoice_no'])?></td>
        <td>Ekspedisi :</td>
        <td><?=html_entity_decode($invoice['expedisi'])?></td>
    </tr>
    <tr>
        <td>Nama :</td>
        <td><?=html_entity_decode($customers['customer_name'])?></td>
        <td>Tanggal Invoice :</td>
        <td><?=html_entity_decode($invoice['date_of_invoice'])?></td></tr>
    </tr>
    <tr>
        <td>Telepon :</td>
        <td><?=html_entity_decode($customers['phone_no'])?></td>
        <td>Jumlah dibayar :</td>
        <td><?=html_entity_decode($invoice['amount_paid'])?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><?=html_entity_decode($customers['address'])?>,<?=html_entity_decode($customers['city'])?></td>
        <td>Pembayaran</td>
        <td><?=html_entity_decode($invoice['payment'])?></td>
    </tr>
</table>       
<br>                          
<b>PRODUK</b>                 
<!--Data display of invoice-->
<table border='1' class="table" align="center" width="100%">    
    <tr>
        <th>Nama Produk</th>
        <th>Harga/Item</th>
        <th>Jumlah Item</th>
        <th>Total Barang</th>
    </tr>
   <?php
    $this->CI = & get_instance();
    $this->CI->load->database();
    $result = $this->db->get_where('item_invoice', array('invoice_id' => $invoice['id']))->result_array();
    for ($i = 0; $i < count($result); $i ++) {
    ?>
    <tr>
        <td align="center">
            <?php
                $this->CI = & get_instance();
                $this->CI->load->database();
                $this->CI->load->model('Product_model');
                $product = $this->CI->Product_model->get_product($result[$i]['product_id']);
                echo html_entity_decode($product['product_name']);
            ?>
        </td>
        <td align="center"><?=html_entity_decode($result[$i]['item_cost'])?></td>
        <td align="center"><?=html_entity_decode($result[$i]['item_quantity'])?></td>
        <td align="center"><?=html_entity_decode($result[$i]['item_total'])?></td>
    </tr>
    <?php
    }
    ?>
        <tr>
        <td colspan="3" align='right'>Total :</td>
        <td align='center'><?=html_entity_decode($invoice['total_cost'])?></td>
    </tr>
</table>		
<!--End of Data display of invoice//-->
<hr>
<table  cellspacing="3" cellpadding="3" class="table" align="left">
<ol>
    <tr><td><li>Barang pemesanan akan disiapkan setelah ada tanda bukti pembayaran</li></td></tr>
    <tr><td><li>Konfirmasi ini dibuat untuk menghindari kesalahan yang dibuat dari negoisasi awal dan disimpan pada server <?=html_entity_decode($company[0]['company_name'])?></li></td></tr>
    <tr><td><li>Pembayaran dengan PPn 10% ditujukan ke Rekening Bank Mandiri 141-001-837-2524 a/n <?=html_entity_decode($company[0]['company_name'])?></li></td></tr>
    <tr><td><li>Pembayaran dengan PPn 10% ditujukan ke Rekening BNI 190979-5555 a/n PT.Spectra Media Persada</li></td></tr>
    <tr><td><li>Pembayaran Non-PPn 10 % ditujukan ke Rekening BCA 01831-777-85 a/n Faisal Setiawan NPWP : 24.743.904.5-617.000</li></td></tr>
    <tr><td><li>Pembayaran Non-PPn 10 % ditujukan ke Rekening Bank Mandiri 141-001-827-8093 a/n Nurul Faizah</li></td></tr>
    <tr><td><li>Barang yang sudah dibeli tidak bisa dikembalikan dengan alasan apapun, kecuali ada perjanjian bermaterai</li></td></tr>
    <tr><td><li>DP komitmen order yang sudah masuk tidak bisa refund dengan alasan apapun.</li></td></tr>
</ol>		
</table>
