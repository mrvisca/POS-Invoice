<link rel="stylesheet"
	href="<?php echo base_url(); ?>public/css/custom.css">    
<h3 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Pengguna'); ?></h3>
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

<!--Data display of users-->
<table border="1" cellspacing="3" cellpadding="3" class="table" align="center" width="100%">
	<tr>
		<th align="center">Email</th>
		<th align="center">Nama Depan</th>
		<th align="center">Nama Belakang</th>
		<th align="center">File Gambar</th>
		<th align="center">No.Telepon</th>
		<th align="center">Dob</th>
		<th align="center">Perusahaan</th>
		<th align="center">Alamat</th>		
		<th align="center">Status</th>
	</tr>
	<?php foreach($users as $c){ ?>
    <tr>
		<td align="center"><?php echo html_entity_decode($c['email']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['first_name']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['last_name']); ?></td>
		<td align="center"><?php
    if (is_file(APPPATH . '../public/' . $c['file_picture']) && file_exists(APPPATH . '../public/' . $c['file_picture'])) {
        ?>
										  <img
			src="<?php echo base_url().'public/'.$c['file_picture']?>" class="picture_50x50">
										  <?php
    } else {
        ?>
										<img src="<?php echo base_url()?>public/uploads/no_image.jpg" class="picture_50x50">
										<?php
    }
    ?>	
										</td>
		<td align="center"><?php echo html_entity_decode($c['phone_no']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['dob']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['company']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['address']); ?></td>		
		<td align="center"><?php echo html_entity_decode($c['status']); ?></td>
	</tr>
	<?php } ?>
</table>
<!--End of Data display of users//-->
