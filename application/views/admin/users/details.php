<a href="<?php echo site_url('admin/users/index'); ?>"
	class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Pengguna'); ?></h5>
<!--Data display of users with id-->
<?php
$c = $users;
?>
<table class="table table-striped table-bordered">
	<tr>
		<td>Email</td>
		<td><?php echo html_entity_decode($c['email']); ?></td>
	</tr>

	<tr>
		<td>Password</td>
		<td><?php echo html_entity_decode($c['password']); ?></td>
	</tr>

	<tr>
		<td>Gelar</td>
		<td><?php echo html_entity_decode($c['title']); ?></td>
	</tr>

	<tr>
		<td>Nama Depan</td>
		<td><?php echo html_entity_decode($c['first_name']); ?></td>
	</tr>

	<tr>
		<td>Nama Belakang</td>
		<td><?php echo html_entity_decode($c['last_name']); ?></td>
	</tr>

	<tr>
		<td>File Gambar</td>
		<td><?php
if (is_file(APPPATH . '../public/' . $c['file_picture']) && file_exists(APPPATH . '../public/' . $c['file_picture'])) {
    ?>
										  <img
			src="<?php echo base_url().'public/'.$c['file_picture']?>"
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
	</tr>

	<tr>
		<td>No.Telepon</td>
		<td><?php echo html_entity_decode($c['phone_no']); ?></td>
	</tr>

	<tr>
		<td>Dob</td>
		<td><?php echo html_entity_decode($c['dob']); ?></td>
	</tr>

	<tr>
		<td>Perusahaan</td>
		<td><?php echo html_entity_decode($c['company']); ?></td>
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
		<td>Negara</td>
		<td><?php
$this->CI = & get_instance();
$this->CI->load->database();
$this->CI->load->model('Country_model');
$dataArr = $this->CI->Country_model->get_country($c['country_id']);
echo html_entity_decode($dataArr['country']);
?>
									</td>
	</tr>

	<tr>
		<td>Dibuat Pada</td>
		<td><?php echo html_entity_decode($c['created_at']); ?></td>
	</tr>

	<tr>
		<td>Diupdate Pada</td>
		<td><?php echo html_entity_decode($c['updated_at']); ?></td>
	</tr>

	<tr>
		<td>Type Pengguna</td>
		<td><?php echo html_entity_decode($c['user_type']); ?></td>
	</tr>

	<tr>
		<td>Status</td>
		<td><?php echo html_entity_decode($c['status']); ?></td>
	</tr>
</table>
<!--End of Data display of users with id//-->
