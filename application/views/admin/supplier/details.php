<a href="<?php echo site_url('admin/supplier/index'); ?>"
	class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Vendor'); ?></h5>
<!--Data display of supplier with id--> 
<?php
 $c = $supplier;
?> 
<table class="table table-striped table-bordered">
     <tr>
		<td>Perusahaan</td>
		<td><?php echo html_entity_decode($c['company']); ?></td>
	</tr>
	<tr>
		<td>Nama Vendor</td>
		<td><?php echo html_entity_decode($c['supplier_name']); ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo html_entity_decode($c['email']); ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><?php echo html_entity_decode($c['address']); ?></td>
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
		<td>No.Telepon</td>
		<td><?php echo html_entity_decode($c['phone_no']); ?></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td><?php echo html_entity_decode($c['phone_no']); ?></td>
	</tr>
</table>
<!--End of Data display of supplier with id//-->
