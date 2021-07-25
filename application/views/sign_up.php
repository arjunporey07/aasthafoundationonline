<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
  <head>
	<?php $this->load->view('head') ?>
  </head>
  <body>
	<div class="container">
            <div class="row row_style">
                <div class="col-sm-4 col-sm-offset-4">
					<div class="panel-heading">
						<h1>Sign Up</h1>
					</div>
					<div class="panel-body">
						<form action="<?php echo base_url(); ?>index.php/Welcome/save_sign_up" method="POST"  enctype="multipart/form-data">
							<div class="form-group">
								<input type="text" class="form-control"  name="email" placeholder="Email">
							</div>
							<div class="form-group">
							<textarea class="form-control" id="member_designation" name="password" placeholder="Password"></textarea>
							</div>
							
							<button type="submit" class="btn btn-primary mb-2">Submit</button>
						</form>
					</div>
            </div>
        </div>
	</body>
</html>
