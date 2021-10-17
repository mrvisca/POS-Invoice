<link rel="stylesheet"
	href="<?php echo base_url(); ?>public/css/custom.css">    
<h3 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Perusahaan'); ?></h3>
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
               <br><span class="padding_10">Halaman {PAGENO} Dari {nbpg}</span> 
     </div>
</htmlpagefooter>    

<sethtmlpagefooter name="myfooter" value="on" />
<!--*************************************************
*********#////mpdf header footer page no******************
****************************************************-->
<!--Data display of company-->
<table border="1" cellspacing="3" cellpadding="3" class="table" align="center" width="100%">
	<tr>
		<th align="center">Nama Perusahaan</th>
		<th align="center">Alamat</th>
		<th align="center">Negara</th>
		<th align="center">Kota</th>
		<th align="center">Provonsi</th>
		<th align="center">Kode Pos</th>
		<th align="center">File Logo Perusahaan</th>
		<th align="center">File Logo Laporan</th>
		<th align="center">File Background Laporan</th>
		<th align="center">Footer Laporan</th>
	</tr>
	<?php foreach($company as $c){ ?>
    <tr>
		<td align="center"><?php echo html_entity_decode($c['company_name']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['address']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['country']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['city']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['state']); ?></td>
		<td align="center"><?php echo html_entity_decode($c['zip']); ?></td>
		<td align="center"><?php
    							if (is_file(APPPATH . '../public/' . $c['file_company_logo']) && file_exists(APPPATH . '../public/' . $c['file_company_logo'])) {
        					?>
							<img
								src="<?php echo base_url().'public/'.$c['file_company_logo']?>"
								style="width: 50px; height: 50px;">
								<?php
    								} else {
        						?>
								<img src="<?php echo base_url()?>public/uploads/no_image.jpg"
									style="width: 50px; height: 50px;">
									<?php
    								}
    								?>	
		</td>
		<td align="center"><?php
    							if (is_file(APPPATH . '../public/' . $c['file_report_logo']) && file_exists(APPPATH . '../public/' . $c['file_report_logo'])) {
        					?>
							<img
								src="<?php echo base_url().'public/'.$c['file_report_logo']?>"
								style="width: 50px; height: 50px;">
								<?php
    								} else {
        						?>
								<img src="<?php echo base_url()?>public/uploads/no_image.jpg"
									style="width: 50px; height: 50px;">
									<?php
    									}
    								?>	
		</td>
		<td align="center"><?php
    							if (is_file(APPPATH . '../public/' . $c['file_report_background']) && file_exists(APPPATH . '../public/' . $c['file_report_background'])) {
        					?>
							<img
								src="<?php echo base_url().'public/'.$c['file_report_background']?>"
								style="width: 50px; height: 50px;">
								<?php
    								} else {
        						?>
								<img src="<?php echo base_url()?>public/uploads/no_image.jpg"
									style="width: 50px; height: 50px;">
								<?php
    								}
    							?>	
		</td>
		<td align="center"><?php echo $c['report_footer']; ?></td>

	</tr>
	<?php } ?>
</table>
<!--End of Data display of company//-->
