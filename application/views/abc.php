<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
	</head>
	<body>
	<form action="<?php echo base_url(); ?>index.php/Welcome/save_abc" method="POST"  enctype="multipart/form-data">
		<div class="form-group">
			<input type="file" class="form-control" name="abc_img[]" placeholder="abc_img" multiple>
		</div>
		<button type="submit" class="btn btn-primary mb-2">Upload</button>
	
	</form>
	
	<hr>
	
	
	</body>
</html>