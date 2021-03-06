<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Kategori'); ?></h5>
<!--Action-->
<div>
	<div class="float_left padding_10">
		<a href="<?php echo site_url('admin/category/save'); ?>"
			class="btn btn-success">Tambahkan</a>
	</div>
	<div class="float_left padding_10">
		<i class="fa fa-download"></i> Expor <select name="xeport_type" class="select"
			onChange="window.location='<?php echo site_url('admin/category/export'); ?>/'+this.value">
			<option>Pilih..</option>
			<option>Pdf</option>
			<option>CSV</option>
		</select>
	</div>
	<div  class="float_right padding_10">
		<ul class="left-side-navbar d-flex align-items-center">
			<li class="hide-phone app-search mr-15">
                <?php echo form_open_multipart('admin/category/search/',array("class"=>"form-horizontal")); ?>
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

<!--Data display of category-->
<table class="table table-striped table-bordered">
	<tr>
		<th>Nama</th>
		<th>Deskripsi</th>
		<th>Status</th>
		<th>Actions</th>
	</tr>
	<?php foreach($category as $c){ ?>
    <tr>
		<td><?php echo html_entity_decode($c['name']); ?></td>
		<td><?php echo html_entity_decode($c['description']); ?></td>
		<td><?php echo html_entity_decode($c['status']); ?></td>
		<td><a
			href="<?php echo site_url('admin/category/details/'.$c['id']); ?>" title="Lihat detail"
			class="action-icon"> <i class="zmdi zmdi-eye"></i></a> <a
			href="<?php echo site_url('admin/category/save/'.$c['id']); ?>" title="Edit"
			class="action-icon"> <i class="zmdi zmdi-edit"></i></a> <a
			href="<?php echo site_url('admin/category/remove/'.$c['id']); ?>"
			onClick="return confirm('Apa kamu yakin ingin menghapus item ini?');" title="Hapus"
			class="action-icon"> <i class="zmdi zmdi-delete"></i></a></td>
	</tr>
	<?php } ?>
</table>
<!--End of Data display of category//-->

<!--No data-->
<?php
if (count($category) == 0) {
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
