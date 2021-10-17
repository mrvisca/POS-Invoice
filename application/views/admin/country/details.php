<a href="<?php echo site_url('admin/country/index'); ?>"
	class="btn btn-info"><i class="arrow_left"></i> Daftar</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Negara'); ?></h5>
<!--Data display of country with id-->
<?php
 $c = $country;
?> 
<table class="table table-striped table-bordered">        
	<tr>
		<td>Negara</td>
		<td><?php echo html_entity_decode($c['country']); ?></td>
	</tr>
</table>
<!--End of Data display of country with id//-->
