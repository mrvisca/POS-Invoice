<a href="<?php echo site_url('admin/company/index'); ?>"
	class="btn btn-info"><i class="arrow_left"></i> Daftar</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Perusahaan'); ?></h5>
<!--Data display of company with id-->
<?php
 $c = $company;
?> 
<table class="table table-striped table-bordered">        
	<tr>
		<td>Nama Perusahaan</td>
		<td><?php echo html_entity_decode($c['company_name']); ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><?php echo html_entity_decode($c['address']); ?></td>
	</tr>
	<tr>
		<td>Negara</td>
		<td><?php echo html_entity_decode($c['country']); ?></td>
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
		<td>File Logo Perusahaan</td>
		<td><?php
				if (is_file(APPPATH . '../public/' . $c['file_company_logo']) && 
				file_exists(APPPATH . '../public/' . $c['file_company_logo'])) {
            ?>
		       <img src="<?php echo base_url().'public/'.$c['file_company_logo']?>" class="picture_50x50">
			<?php
			} else {
			?>
				<img src="<?php echo base_url()?>public/uploads/no_image.jpg" class="picture_50x50">
			<?php
			}
			?>	
		</td>
	</tr>
	<tr>
		<td>File Logo Laporan</td>
		<td>
		<?php
			if (is_file(APPPATH . '../public/' . $c['file_report_logo']) && 
			file_exists(APPPATH . '../public/' . $c['file_report_logo'])) {
           ?>
			<img src="<?php echo base_url().'public/'.$c['file_report_logo']?>" class="picture_50x50">
		<?php
         } else {
        ?>
			<img src="<?php echo base_url()?>public/uploads/no_image.jpg" class="picture_50x50">
		<?php
		 }
		?>	
		</td>
	</tr>
	<tr>
		<td>File Laporan Background</td>
		<td><?php
          if (is_file(APPPATH . '../public/' . $c['file_report_background']) && file_exists(APPPATH . '../public/' . $c['file_report_background'])) {
            ?>
			  <img src="<?php echo base_url().'public/'.$c['file_report_background']?>" class="picture_50x50">
			<?php
			} else {
			?>
			  <img src="<?php echo base_url()?>public/uploads/no_image.jpg" class="picture_50x50">
			<?php
			}
			?>	
		</td>
	</tr>
	<tr>
		<td>File Stempel</td>
		<td><?php
          if (is_file(APPPATH . '../public/' . $c['file_stampel']) && file_exists(APPPATH . '../public/' . $c['file_stampel'])) {
            ?>
			  <img src="<?php echo base_url().'public/'.$c['file_stampel']?>" class="picture_50x50">
			<?php
			} else {
			?>
			  <img src="<?php echo base_url()?>public/uploads/no_image.jpg" class="picture_50x50">
			<?php
			}
			?>	
		</td>
	</tr>
	<tr>
		<td>Laporan Footer</td>
		<td><?php echo html_entity_decode($c['report_footer']); ?></td>
	</tr>
</table>
<!--End of Data display of company with id//-->
