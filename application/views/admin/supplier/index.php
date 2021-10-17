<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Vendor'); ?></h5>
<!--Action-->
<div>
	<div class="float_left padding_10">
		<a href="<?php echo site_url('admin/supplier/save'); ?>"
			class="btn btn-success">Tambahkan</a>
	</div>
	<div class="float_left padding_10">
		<i class="fa fa-download"></i> Ekspor <select name="xeport_type" class="select"
			onChange="window.location='<?php echo site_url('admin/supplier/export'); ?>/'+this.value">
			<option>Pilih..</option>
			<option>Pdf</option>
			<option>CSV</option>
		</select>
	</div>
	<div  class="float_right padding_10">
		<ul class="left-side-navbar d-flex align-items-center">
			<li class="hide-phone app-search mr-15">
                <?php echo form_open_multipart('admin/supplier/search/',array("class"=>"form-horizontal")); ?>
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

<!--Data display of supplier-->
<table class="table table-striped table-bordered">
	<tr>
		<th>Perusahaan</th>
		<th>Nama Vendor</th>
		<th>Email</th>
		<th>Alamat</th>
		<th>No.Telepon</th>
		<th>Deskripsi</th>
		<th>Actions</th>
	</tr>
	<?php foreach($supplier as $c){ ?>
    <tr>
		<td><?php echo html_entity_decode($c['company']); ?></td>
		<td><?php echo html_entity_decode($c['supplier_name']); ?></td>
		<td><?php echo html_entity_decode($c['email']); ?></td>
		<td><?php echo html_entity_decode($c['address']); ?></td>
		<td><?php echo html_entity_decode($c['phone_no']); ?></td>
		<td><?php echo html_entity_decode($c['deskripsi']); ?></td>
		<td><a
			href="<?php echo site_url('admin/supplier/details/'.$c['id']); ?>" title="Lihat detail"
			class="action-icon"> <i class="zmdi zmdi-eye"></i></a> <a
			href="<?php echo site_url('admin/supplier/save/'.$c['id']); ?>" title="Edit"
			class="action-icon"> <i class="zmdi zmdi-edit"></i></a> <a
			href="<?php echo site_url('admin/supplier/remove/'.$c['id']); ?>" title="Hapus"
			onClick="return confirm('Apa kamu yakin ingin menghapusnya?');"
			class="action-icon"> <i class="zmdi zmdi-delete"></i></a></td>
	</tr>
	<?php } ?>
</table>
<!--End of Data display of supplier//-->

<!--No data-->
<?php
if (count($supplier) == 0) {
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
