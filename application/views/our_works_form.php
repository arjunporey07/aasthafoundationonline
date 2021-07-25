<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>

		<style>
		
		</style>
	</head>
	<body>
		<section>
			<div class="container">
				<header class="section-header p-2">
					<center>
						<h2 class="p-2" style="background-color:#E8E8E8; color:#18d26e; font-family:Times Roman,Time"><strong>Event Details Form</strong></h2>
						<p>....... <a href="#"></a>...</p>
					</center>
				</header>
			</div>

			<div class="container justify-content-center">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<form method="POST" action="<?php echo base_url(); ?>index.php/Welcome/save_our"  enctype="multipart/form-data">
					
						<div class="modal-body  w-100" >
							<div class="md-form mb-4">
								<label><strong>Event Title<b style="color:red">*</b></strong></label>
								<input type="text" name="our_works_title" placeholder="Enter Event Name" class="form-control  validate" required>
							</div>
							<div class="md-form mb-4" >
								<label><strong>Event Descriptions<b style="color:red">*</b></strong></label>
								<textarea class="md-textarea form-control" name="our_works_desc" placeholder="Within 100 Characters" required></textarea>
							</div>
							<div class="md-form mb-4">
								<label><strong>Event Thumbnail / Poster<b style="color:red">*</b></strong></label>
								<input type="file" name="our_works_img"  class="form-control validate " required>	
							</div>
							<div class="md-form mb-4">
								<label><strong>Event Date And Time<b style="color:red">*</b></strong></label>
								<input placeholder="Date and Time" name="our_works_dt" type="datetime-local" data-open="picker2" class="form-control date-time picker-opener" required>	
							</div>

							<div class="md-form mb-4">
								<label><strong>Event Details Image<b style="color:red">*</b></strong></label>
								<input type="file" name="our_works_details_img[]" placeholder="Event Details Image" multiple  class="form-control validate" required>	
							</div>
							<div class="md-form mb-4">
								<label><strong>Event Video Link<b style="color:red">*</b></strong></label>
								<input type="text" name="our_works_details_video" placeholder="Enter Video Link" class="form-control  validate">
							</div>
							<div class="md-form mb-4">
								<label><strong>Event Experience<b style="color:red">*</b></strong></label>
								<input type="file" name="our_works_details_exp[]" placeholder="Event Experience" multiple  class="form-control validate">	
							</div>
							<div class="md-form mb-4">
							<select class="form-control" name="our_works_status" class="browser-default custom-select">
									<option value="">Event Status</option>
									<option value="active">Active</option>
									<option value="inactive">Inactive</option>
									<option value="deleted">Deleted</option>
								</select>
							</div>
							

						</div>

						<div class="modal-footer d-flex justify-content-center">
							<button id="submit_button" class="btn btn-default" style="background-color: #2ECC71">SUBMIT</button>
						</div>

					</form>
				</div>
			</div>
				
		</section>


<script>
 </script>

	</body>
</html>