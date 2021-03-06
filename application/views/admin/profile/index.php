<h5 class="font-20 mt-15 mb-1">Profil</h5>
<table class="table table-striped table-bordered">
	<tr>
		<td>Email</td>
		<td><?php echo html_entity_decode($users['email']); ?></td>
	</tr>
	<tr>
		<td>Gelar</td>
		<td><?php echo html_entity_decode($users['title']); ?></td>
	</tr>
	<tr>
		<td>Nama depan</td>
		<td><?php echo html_entity_decode($users['first_name']); ?></td>
	</tr>
	<tr>
		<td>Nama Belakang</td>
		<td><?php echo html_entity_decode($users['last_name']); ?></td>
	</tr>
	<tr>
		<td>File Gambar</td>
		<td>
		     <?php
    			if (is_file(APPPATH . '../public/' . $users['file_picture']) && file_exists(APPPATH . '../public/' . $users['file_picture'])) {
        	?>
			<img src="<?php echo base_url().'public/'.$users['file_picture']?>" class="picture_100x100">
			<?php
    			} else {
        	?>
            <img
				src="<?php echo base_url()?>public/uploads/no_image.jpg" class="picture_100x100">
            	<?php
    				}
    			?>	
        </td>
	</tr>
	<tr>
		<td>No.Telepon</td>
		<td><?php echo html_entity_decode($users['phone_no']); ?></td>
	</tr>
	<tr>
		<td>Dob</td>
		<td><?php echo html_entity_decode($users['dob']); ?></td>
	</tr>
	<tr>
		<td>Perusahaan</td>
		<td><?php echo html_entity_decode($users['company']); ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><?php echo html_entity_decode($users['address']); ?></td>
	</tr>
	<tr>
		<td>Kota</td>
		<td><?php echo html_entity_decode($users['city']); ?></td>
	</tr>
	<tr>
		<td>Provinsi</td>
		<td><?php echo html_entity_decode($users['state']); ?></td>
	</tr>
	<tr>
		<td>Kode Pos</td>
		<td><?php echo html_entity_decode($users['zip']); ?></td>
	</tr>
	<tr>
		<td>Negara</td>
		<td><?php echo html_entity_decode($users['country_id']); ?></td>
	</tr>
	<tr>
		<td>Dibuat Pada</td>
		<td><?php echo html_entity_decode($users['created_at']); ?></td>
	</tr>
	<tr>
		<td>Diupdate Pada</td>
		<td><?php echo html_entity_decode($users['updated_at']); ?></td>
	</tr>
	<tr>
		<td>Type Pengguna</td>
		<td><?php echo html_entity_decode($users['user_type']); ?></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><?php echo html_entity_decode($users['status']); ?></td>
	</tr>
	<tr>
		<td>Action</td>
		<td><a
			href="<?php echo site_url('admin/profile/save/'.$users['id']); ?>"
			class="btn btn-info btn-xs">Edit</a></td>
	</tr>
</table>