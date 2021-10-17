<a href="<?php echo site_url('admin/company/index'); ?>" onClick="return confirm('Apa kamu yakin ingin meninggalkan halaman ini?');"
	class="btn btn-info"><i class="arrow_left"></i> Daftar</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Form";}else { echo "Edit Form";} echo " "; echo str_replace('_',' ','Perusahaan'); ?></h5>
<!--Form to save data-->
<?php echo form_open_multipart('admin/company/save/'.$company['id'],array("class"=>"form-horizontal")); ?>
<div class="card">
	<div class="card-body">
		<div class="form-group">
			<label for="Company Name" class="col-md-4 control-label">Nama Perusahaan</label>
			<div class="col-md-8">
				<input type="text" name="company_name"
					value="<?php echo ($this->input->post('company_name') ? $this->input->post('company_name') : $company['company_name']); ?>"
					class="form-control" id="company_name" />
			</div>
		</div>
		<div class="form-group">
			<label for="Address" class="col-md-4 control-label">Alamat</label>
			<div class="col-md-8">
				<textarea name="address" id="address" class="form-control" rows="4" /><?php echo ($this->input->post('address') ? $this->input->post('address') : $company['address']); ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="Country" class="col-md-4 control-label">Negara</label>
			<div class="col-md-8">
				<input type="text" name="country"
					value="<?php echo ($this->input->post('country') ? $this->input->post('country') : $company['country']); ?>"
					class="form-control" id="country" />
			</div>
		</div>
		<div class="form-group">
			<label for="City" class="col-md-4 control-label">Kota</label>
			<div class="col-md-8">
				<input type="text" name="city"
					value="<?php echo ($this->input->post('city') ? $this->input->post('city') : $company['city']); ?>"
					class="form-control" id="city" />
			</div>
		</div>
		<div class="form-group">
			<label for="State" class="col-md-4 control-label">Provinsi</label>
			<div class="col-md-8">
				<input type="text" name="state"
					value="<?php echo ($this->input->post('state') ? $this->input->post('state') : $company['state']); ?>"
					class="form-control" id="state" />
			</div>
		</div>
		<div class="form-group">
			<label for="Zip" class="col-md-4 control-label">Kode Pos</label>
			<div class="col-md-8">
				<input type="text" name="zip"
					value="<?php echo ($this->input->post('zip') ? $this->input->post('zip') : $company['zip']); ?>"
					class="form-control" id="zip" />
			</div>
		</div>
		<div class="form-group">
			<label for="File Company Logo" class="col-md-4 control-label">File
				Logo Perusahaan</label>
			<div class="col-md-8">
				<input type="file" name="file_company_logo" id="file_company_logo"
					value="<?php echo ($this->input->post('file_company_logo') ? $this->input->post('file_company_logo') : $company['file_company_logo']); ?>"
					class="form-control-file" />
			</div>
		</div>
		<div class="form-group">
			<label for="File Report Logo" class="col-md-4 control-label">File
				Logo Laporan</label>
			<div class="col-md-8">
				<input type="file" name="file_report_logo" id="file_report_logo"
					value="<?php echo ($this->input->post('file_report_logo') ? $this->input->post('file_report_logo') : $company['file_report_logo']); ?>"
					class="form-control-file" />
			</div>
		</div>
		<div class="form-group">
			<label for="File Report Background" class="col-md-4 control-label">File
				Background Laporan</label>
			<div class="col-md-8">
				<input type="file" name="file_report_background"
					id="file_report_background"
					value="<?php echo ($this->input->post('file_report_background') ? $this->input->post('file_report_background') : $company['file_report_background']); ?>"
					class="form-control-file" />
			</div>
		</div>
		<div class="form-group">
			<label for="File Stempel" class="col-md-4 control-label">File
				Stempel</label>
			<div class="col-md-8">
				<input type="file" name="file_stampel"
					id="file_stampel"
					value="<?php echo ($this->input->post('file_stampel') ? $this->input->post('file_stampel') : $company['file_stampel']); ?>"
					class="form-control-file" />
			</div>
		</div>
		<div class="form-group">
			<label for="Report Footer" class="col-md-4 control-label">Laporan Footer</label>
			<div class="col-md-8">
				<input type="text" name="report_footer"
					value="<?php echo ($this->input->post('report_footer') ? $this->input->post('report_footer') : $company['report_footer']); ?>"
					class="form-control" id="report_footer" />
			</div>
		</div>		
	</div>
</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success"><?php if(empty($company['id'])){?>Simpan<?php }else{?>Update<?php } ?></button>
    </div>
</div>
<?php echo form_close(); ?>
<!--End of Form to save data//-->
