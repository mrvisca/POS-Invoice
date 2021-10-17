<a href="<?php echo site_url('admin/profile/index'); ?>" onClick="return confirm('Apa kamu yakin ingin meninggalkan halaman ini?');"
	class="btn btn-info"><i class="arrow_left"></i> Daftar</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Form";}else { echo "Edit Form";} echo " ";?>Profile</h5>
<?php echo form_open_multipart('admin/profile/save/'.$users['id'],array("class"=>"form-horizontal")); ?>
<div class="card">
	<div class="card-body">
		<div class="form-group">
			<label for="Email" class="col-md-4 control-label">Email</label>
			<div class="col-md-8">
				<input type="text" name="email"
					value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $users['email']); ?>"
					class="form-control" id="email" />
			</div>
		</div>
		<div class="form-group">
			<label for="Password" class="col-md-4 control-label">Password</label>
			<div class="col-md-8">
				<input type="password" name="password"
					value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $users['password']); ?>"
					class="form-control" id="password" />
			</div>
		</div>
		<div class="form-group">
			<label for="Title" class="col-md-4 control-label">Gelar</label>
			<div class="col-md-8">
				<input type="text" name="title"
					value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $users['title']); ?>"
					class="form-control" id="title" />
			</div>
		</div>
		<div class="form-group">
			<label for="First Name" class="col-md-4 control-label">Nama Depan</label>
			<div class="col-md-8">
				<input type="text" name="first_name"
					value="<?php echo ($this->input->post('first_name') ? $this->input->post('first_name') : $users['first_name']); ?>"
					class="form-control" id="first_name" />
			</div>
		</div>
		<div class="form-group">
			<label for="Last Name" class="col-md-4 control-label">Nama Belakang</label>
			<div class="col-md-8">
				<input type="text" name="last_name"
					value="<?php echo ($this->input->post('last_name') ? $this->input->post('last_name') : $users['last_name']); ?>"
					class="form-control" id="last_name" />
			</div>
		</div>
		<div class="form-group">
			<label for="File Picture" class="col-md-4 control-label">File Gambar</label>
			<div class="col-md-8">
				<input type="file" name="file_picture" id="file_picture"
					value="<?php echo ($this->input->post('file_picture') ? $this->input->post('file_picture') : $users['file_picture']); ?>"
					class="form-control" />
			</div>
		</div>
		<div class="form-group">
			<label for="Phone No" class="col-md-4 control-label">No.Telepon</label>
			<div class="col-md-8">
				<input type="text" name="phone_no"
					value="<?php echo ($this->input->post('phone_no') ? $this->input->post('phone_no') : $users['phone_no']); ?>"
					class="form-control" id="phone_no" />
			</div>
		</div>
		<div class="form-group">
			<label for="Dob" class="col-md-4 control-label">Dob</label>
			<div class="col-md-8">
				<input type="text" name="dob" id="dob"
					value="<?php echo ($this->input->post('dob') ? $this->input->post('dob') : $users['dob']); ?>"
					class="form-control datepicker" />
			</div>
		</div>
		<div class="form-group">
			<label for="Company" class="col-md-4 control-label">Perusahaan</label>
			<div class="col-md-8">
				<input type="text" name="company"
					value="<?php echo ($this->input->post('company') ? $this->input->post('company') : $users['company']); ?>"
					class="form-control" id="company" />
			</div>
		</div>
		<div class="form-group">
			<label for="Address" class="col-md-4 control-label">Alamat</label>
			<div class="col-md-8">
				<input type="text" name="address"
					value="<?php echo ($this->input->post('address') ? $this->input->post('address') : $users['address']); ?>"
					class="form-control" id="address" />
			</div>
		</div>
		<div class="form-group">
			<label for="City" class="col-md-4 control-label">Kota</label>
			<div class="col-md-8">
				<input type="text" name="city"
					value="<?php echo ($this->input->post('city') ? $this->input->post('city') : $users['city']); ?>"
					class="form-control" id="city" />
			</div>
		</div>
		<div class="form-group">
			<label for="State" class="col-md-4 control-label">Provinsi</label>
			<div class="col-md-8">
				<input type="text" name="state"
					value="<?php echo ($this->input->post('state') ? $this->input->post('state') : $users['state']); ?>"
					class="form-control" id="state" />
			</div>
		</div>
		<div class="form-group">
			<label for="Zip" class="col-md-4 control-label">Kode Pos</label>
			<div class="col-md-8">
				<input type="text" name="zip"
					value="<?php echo ($this->input->post('zip') ? $this->input->post('zip') : $users['zip']); ?>"
					class="form-control" id="zip" />
			</div>
		</div>
		<div class="form-group">
			<label for="country" class="col-md-4 control-label">Negara</label>
			<div class="col-md-8">
				<select name="country_id" id="country_id" class="form-control" />
				<option value="">--Pilih--</option>
                  <?php
                for ($i = 0; $i < count($country); $i ++) {
                    ?>
                  <option value="<?=$country[$i]['id']?>"
					<?php if($users['country_id']==$country[$i]['id']){ echo "selected";} ?>><?=$country[$i]['country']?></option>
                  <?php
                }
                ?>
                </select>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-4 col-sm-8">
		<button type="submit" class="btn btn-success"><?php if(empty($users['id'])){?>Simpan<?php }else{?>Update<?php } ?></button>
	</div>
</div>
<?php echo form_close(); ?>
<script>
	$( ".datepicker" ).datepicker({
		dateFormat: "yy-mm-dd", 
		changeYear: true,
		changeMonth: true,
		showOn: 'button',
		buttonText: 'Show Date',
		buttonImageOnly: true,
		buttonImage: '<?php echo base_url(); ?>public/datepicker/images/calendar.gif',
	});
</script>
