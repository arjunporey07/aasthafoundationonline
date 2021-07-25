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
						<h1>our_works</h1>
					</div>
					<div class="panel-body">
						<form action="<?php echo base_url(); ?>index.php/Welcome/save_our_works" method="POST"  enctype="multipart/form-data">
							
							<div class="form-group">
								<input type="text" class="form-control"  name="our_works_title" placeholder="our_works_title">
							</div>
							<div class="form-group">
							<textarea class="form-control" id="our_works_desc" name="our_works_desc" placeholder="our_works_desc"></textarea>
							</div>
							
							<div class="form-group">
								<input type="file" class="form-control" name="our_works_img" placeholder="our_works_img">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="our_works_dt" placeholder="yyyy-mm-dd hh:mm:ss">
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect2">our_works_Status</label>
								<select class="form-control" name="our_works_status" id="exampleFormControlSelect2">
									<option value="">Select status</option>
									<option value="active">Active</option>
									<option value="inactive">Inactive</option>
									<option value="deleted">Deleted</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
						</form>
					</div>
            </div>
        </div></form>
<br><br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">our_works_id</th>
      <th scope="col">our_works_title</th>
      <th scope="col">our_works-desc</th>
      <th scope="col">our_works_img</th>
	  <th scope="col">our_works_dt</th>
	  <th scope="col">our_works_status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
      <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
    </tr>
  </tbody>
</table>
  </body>
 </html>