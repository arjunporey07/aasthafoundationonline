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
						<h1>article</h1>
					</div>
					<div class="panel-body">
						<form action="<?php echo base_url(); ?>index.php/Welcome/save_article" method="POST"  enctype="multipart/form-data">
							
							<div class="form-group">
								<input type="text" class="form-control"  name="article_title" placeholder="article_title">
							</div>
							<div class="form-group">
							<textarea class="form-control" id="article_desc" name="article_desc" placeholder="article_desc"></textarea>
							</div>
							
							<div class="form-group">
								<input type="file" class="form-control" name="article_img" placeholder="article_img">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="article_dt" placeholder="yyyy-mm-dd hh:mm:ss">
							</div>
							<div class="form-group">
								<input type="file" class="form-control" name="article_pdf" placeholder="article_pdf">
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect2">article_Status</label>
								<select class="form-control" name="article_status" id="exampleFormControlSelect2">
									<option value="">Select status</option>
									<option value="active">Active</option>
									<option value="inactive">Inactive</option>
									<option value="deleted">Deleted</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary mb-2">Upload</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>