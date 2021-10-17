<link rel="stylesheet"
	href="<?php echo base_url(); ?>public/css/custom.css">    
<h3 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Customers'); ?></h3>
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
<!--Data display of customers-->
<table border="1" cellspacing="3" cellpadding="3" class="table" align="center" width="100%">
	<tr>
		<th align="center">Nama Customer</th>
		<th align="center">Email</th>
		<th align="center">Alamat</th>
		<th align="center">Kota</th>
		<th align="center">Provinsi</th>
		<th align="center">Kode Pos</th>
		<th align="center">No.Telepon</th>
		<th align="center">Catatan</th>
	</tr>
	<?php foreach($customers as $c){ ?>
    <tr>
		<td align="center"><?php echo html_entity_decode($c['customer_name']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['email']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['address']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['city']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['state']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['zip']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['phone_no']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['deskripsi']); ?></td>
	</tr>
	<?php } ?>
</table>
<!--End of Data display of customers//-->
