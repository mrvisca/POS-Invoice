<a href="<?php echo site_url('admin/supplier/index'); ?>" onClick="return confirm('Apa kamu yakin ingin menghapusnya?');"
	class="btn btn-info"><i class="arrow_left"></i> Daftar</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Form";}else { echo "Edit Form";} echo " ";echo str_replace('_',' ','Vendor'); ?></h5>
<!--Form to save data-->
<?php echo form_open_multipart('admin/supplier/save/'.$supplier['id'],array("class"=>"form-horizontal")); ?>
<div class="card">
	<div class="card-body">
		<div class="form-group">
			<label for="Company" class="col-md-4 control-label">Perusahaan</label>
			<div class="col-md-8">
				<input type="text" name="company"
					value="<?php echo ($this->input->post('company') ? $this->input->post('company') : $supplier['company']); ?>"
					class="form-control" id="company" />
			</div>
		</div>
		<div class="form-group">
			<label for="Supplier Name" class="col-md-4 control-label">Nama Vendor</label>
			<div class="col-md-8">
				<input type="text" name="supplier_name"
					value="<?php echo ($this->input->post('supplier_name') ? $this->input->post('supplier_name') : $supplier['supplier_name']); ?>"
					class="form-control" id="supplier_name" />
			</div>
		</div>
		<div class="form-group">
			<label for="Email" class="col-md-4 control-label">Email</label>
			<div class="col-md-8">
				<input type="text" name="email"
					value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $supplier['email']); ?>"
					class="form-control" id="email" />
			</div>
		</div>
		<div class="form-group">
			<label for="Address" class="col-md-4 control-label">Alamat</label>
			<div class="col-md-8">
				<textarea name="address" id="address" class="form-control" rows="4" /><?php echo ($this->input->post('address') ? $this->input->post('address') : $supplier['address']); ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="City" class="col-md-4 control-label">Kota</label>
			<div class="col-md-8">
				<input type="text" name="city"
					value="<?php echo ($this->input->post('city') ? $this->input->post('city') : $supplier['city']); ?>"
					class="form-control" id="city" />
			</div>
		</div>
		<div class="form-group">
			<label for="State" class="col-md-4 control-label">Provinsi</label>
			<div class="col-md-8">
				<input type="text" name="state"
					value="<?php echo ($this->input->post('state') ? $this->input->post('state') : $supplier['state']); ?>"
					class="form-control" id="state" />
			</div>
		</div>
		<div class="form-group">
			<label for="Zip" class="col-md-4 control-label">Kode Pos</label>
			<div class="col-md-8">
				<input type="text" name="zip"
					value="<?php echo ($this->input->post('zip') ? $this->input->post('zip') : $supplier['zip']); ?>"
					class="form-control" id="zip" />
			</div>
		</div>
		<div class="form-group">
			<label for="Phone No" class="col-md-4 control-label">No.Telepon</label>
			<div class="col-md-8">
				<input type="text" name="phone_no"
					value="<?php echo ($this->input->post('phone_no') ? $this->input->post('phone_no') : $supplier['phone_no']); ?>"
					class="form-control" id="phone_no" />
			</div>
		</div>
		<div class="form-group">
			<label for="Deskripsi" class="col-md-4 control-label">Deskripsi</label>
			<div class="col-md-8">
				<textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" /><?php echo ($this->input->post('deskripsi') ? $this->input->post('deskripsi') : $supplier['deskripsi']); ?></textarea>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-4 col-sm-8">
		<button type="submit" class="btn btn-success"><?php if(empty($supplier['id'])){?>Simpan<?php }else{?>Update<?php } ?></button>
	</div>
</div>

<?php echo form_close(); ?>
<!--End of Form to save data//-->
