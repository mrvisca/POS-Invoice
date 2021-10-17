<a href="<?php echo site_url('admin/country/index'); ?>" onClick="return confirm('Apa kami ingin meninggalkan halaman ini?');"
	class="btn btn-info"><i class="arrow_left"></i> Daftar</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Form";}else { echo "Edit Form";} echo " "; echo str_replace('_',' ','Negara'); ?></h5>
<!--Form to save data-->
<?php echo form_open_multipart('admin/country/save/'.$country['id'],array("class"=>"form-horizontal")); ?>
<div class="card">
	<div class="card-body">
		<div class="form-group">
			<label for="Country" class="col-md-4 control-label">Negara</label>
			<div class="col-md-8">
				<input type="text" name="country"
					value="<?php echo ($this->input->post('country') ? $this->input->post('country') : $country['country']); ?>"
					class="form-control" id="country" />
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-4 col-sm-8">
				<button type="submit" class="btn btn-success"><?php if(empty($country['id'])){?>Simpan<?php }else{?>Update<?php } ?></button>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>
<!--End of Form to save data//-->
