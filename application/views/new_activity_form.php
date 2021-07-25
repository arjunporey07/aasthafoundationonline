<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
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
					<form method="POST" action="<?php echo base_url(); ?>index.php/Welcome/save_new_activity"  enctype="multipart/form-data">
					
						<div class="modal-body  w-100" >
							<div class="md-form mb-4">
								<label><strong>New Event Title<b style="color:red">*</b></strong></label>
								<input type="text" name="new_activity_title" placeholder="New Event/Activity Title" class="form-control  validate" required>
							</div>
							<div class="md-form mb-4" >
								<label><strong>New Event Descriptions<b style="color:red">*</b></strong></label>
								<textarea class="md-textarea form-control" name="new_activity_details" placeholder="Within 100 Letters" required></textarea>
							</div>
							<div class="md-form mb-4">
								<label><strong>New Event Thumbnail / Poster<b style="color:red">*</b></strong></label>
								<input type="file" name="new_activity_img"  class="form-control validate " required>	
							</div>
							<div class="md-form mb-4" >
								<label><strong>New Event Locations</strong></label>
								<textarea class="md-textarea form-control" name="new_activity_location" placeholder="Location Link"></textarea>
							</div>
							<div class="md-form mb-4" >
								<label><strong>Route</strong></label>
								<textarea class="md-textarea form-control" name="new_activity_route" placeholder="Route"></textarea>
							</div>
							<div class="md-form mb-4">
								<label><strong>New Event Date And Time<b style="color:red">*</b></strong></label>
								<input placeholder="Date and Time" name="new_activity_dt" type="datetime-local" data-open="picker2" class="form-control date-time picker-opener" required>	
							</div>

						</div>

						<div class="modal-footer d-flex justify-content-center">
							<button id="submit_button" class="btn btn-default" style="background-color: #2ECC71">SUBMIT</button>
						</div>

					</form>
				</div>
			</div>

		</section>
		
	</body>
</html>