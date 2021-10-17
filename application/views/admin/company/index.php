<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Perusahaan'); ?></h5>
<!--Action-->
<div>
	<div class="float_left padding_10">
		<a href="<?php echo site_url('admin/company/save'); ?>"
			class="btn btn-success">Tambahkan</a>
	</div>
	<div class="float_left padding_10">
		<i class="fa fa-download"></i> Ekspor <select name="xeport_type" class="select"
			onChange="window.location='<?php echo site_url('admin/company/export'); ?>/'+this.value">
			<option>Pilih..</option>
			<option>Pdf</option>
			<option>CSV</option>
		</select>
	</div>
	<div  class="float_right padding_10">
		<ul class="left-side-navbar d-flex align-items-center">
			<li class="hide-phone app-search mr-15">
                <?php echo form_open_multipart('admin/company/search/',array("class"=>"form-horizontal")); ?>
                    <input name="key" type="text"
				value="<?php echo isset($key)?$key:'';?>" placeholder="Cari..."
				class="form-control">
				<button type="submit" class="mr-0">
					<i class="fa fa-search"></i>
				</button>
                <?php echo form_close(); ?>
            </li>
		</ul>
	</div>
</div>
<!--End of Action//-->

<!--Data display of company-->
<table class="table table-striped table-bordered">
	<tr>
		<th>Nama Perusahaan</th>
		<th>Alamat</th>
		<th>File Logo Perusahaan</th>
		<th>File Logo Laporan</th>
		<th>File Background Laporan</th>
		<th>Laporan Footer</th>
		<th>Actions</th>
	</tr>
	<?php foreach($company as $c){ ?>
    <tr>
		<td><?php echo html_entity_decode($c['company_name']); ?></td>
		<td><?php echo html_entity_decode($c['address']); ?></td>
		<td><?php
    if (is_file(APPPATH . '../public/' . $c['file_company_logo']) && file_exists(APPPATH . '../public/' . $c['file_company_logo'])) {
        ?>
										  <img
			src="<?php echo base_url().'public/'.$c['file_company_logo']?>"
			class="picture_50x50">
										  <?php
    } else {
        ?>
										<img src="<?php echo base_url()?>public/uploads/no_image.jpg"
			class="picture_50x50">
										<?php
    }
    ?>	
										</td>
		<td><?php
    if (is_file(APPPATH . '../public/' . $c['file_report_logo']) && file_exists(APPPATH . '../public/' . $c['file_report_logo'])) {
        ?>
										  <img
			src="<?php echo base_url().'public/'.$c['file_report_logo']?>"
			class="picture_50x50">
										  <?php
    } else {
        ?>
										<img src="<?php echo base_url()?>public/uploads/no_image.jpg"
			class="picture_50x50">
										<?php
    }
    ?>	
										</td>
		<td><?php
    if (is_file(APPPATH . '../public/' . $c['file_report_background']) && file_exists(APPPATH . '../public/' . $c['file_report_background'])) {
        ?>
										  <img
			src="<?php echo base_url().'public/'.$c['file_report_background']?>"
			class="picture_50x50">
										  <?php
    } else {
        ?>
										<img src="<?php echo base_url()?>public/uploads/no_image.jpg"
			class="picture_50x50">
										<?php
    }
    ?>	
										</td>
		<td><?php echo html_entity_decode($c['report_footer']); ?></td>

		<td><a
			href="<?php echo site_url('admin/company/details/'.$c['id']); ?>" title="Lihat detail"
			class="action-icon"> <i class="zmdi zmdi-eye"></i></a> <a
			href="<?php echo site_url('admin/company/save/'.$c['id']); ?>" title="Edit"
			class="action-icon"> <i class="zmdi zmdi-edit"></i></a> <a
			href="<?php echo site_url('admin/company/remove/'.$c['id']); ?>" title="Hapus"
			onClick="return confirm('Apa kamu yakin ingin menghapusnya?');"
			class="action-icon"> <i class="zmdi zmdi-delete"></i></a></td>
	</tr>
	<?php } ?>
</table>
<!--End of Data display of company//-->

<!--No data-->
<?php
if (count($company) == 0) {
    ?>
<div align="center">
	<h3>Data tidak ditemukan</h3>
</div>
<?php
}
?>
<!--End of No data//-->

<!--Pagination-->
<?php
echo $link;
?>
<!--End of Pagination//-->
