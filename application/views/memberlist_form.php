<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
		<!-- <link href="<?php echo base_url(); ?>public/css/memberlist.css" rel="stylesheet" type="text/css"/> -->
		
		<style>
			.navbar{
				background:#000;
			}
			#page_head{
				padding-top: 75px;
				padding-bottom: 50px;
				background-image:url('<?php echo base_url(); ?>public/img/handshake.gif');
				background-size:100% 100%;
			}
			.container{
				max-width:90%;
			}
			.form-control{
				box-shadow: 1px 2px #CCD1D1;
				font-family: fontawesome;
			}
			@media (min-width: 576px) {
				#f .container{
					min-width:80%
				}
			}
		</style>
	</head>
	<body>
		
		<?php $this->load->view('nav') ?>
		
			<section id="page_head">
				<div class="container">
					<header class="section-header p-2">
						<center>
							<h2 class="p-2" style="background-color:#E8E8E8; color:#18d26e; font-family:Times Roman,Time"><strong>Member Registration</strong></h2>
							<p>Please Follow Our <a href="#" data-toggle="modal" data-target=".bd-Guideline-modal-lg" >Guidelines</a>.</p>
						</center>
					</header>
				</div>

				<div id="f" class="container" style="max-width:80%"> 
				<div class=" row">

				


					<div class="col-lg-12">
						<form method="POST" action="<?php echo base_url(); ?>index.php/Welcome/save_memberlist"  enctype="multipart/form-data">

							<div class="modal-body  w-100" >
								<div class="md-form mb-4">
									<label><strong>Your Name<b style="color:red">*</b></strong></label>
									<input type="text" name="member_name" placeholder="&#xf007; Your Name" class="form-control  validate" required>
								</div>
				<!--				<div class="md-form mb-4">
									<label><strong>Designation<b style="color:red">*</b></strong></label>
									<input type="varchar" name="member_designation" placeholder="Eg: Student/Employee etc." class="form-control validate" required>
								</div>
								<div class="md-form mb-4">
									<label><strong>Your Photo<b style="color:red">*</b></strong></label>
									<input type="file" name="member_img"  class="form-control validate " required>
									
								</div>     -->
								<div class="md-form mb-4">
									<label><strong>Your Email<b style="color:red">*</b></strong></label>
									<input type="email" name="member_email" placeholder="&#xf0e0;  Your Email" class="form-control validate" required>
								</div>
								<div class="md-form mb-4">
									<label><strong>Moblie Number<b style="color:red">*</b></strong></label>
									<input type="tel" name="member_number" placeholder="&#xf095;  Eg: Contact/WhatsApp" class="form-control validate" required>
								</div>
				<!--				<div class="md-form mb-4">
									<div>
										<label><strong>Select Gender<b style="color:red">*</b></strong></label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" class="custom-control-input" id="defaultInline1" name="gender" required>
										<label class="custom-control-label" for="defaultInline1">Male</label>
									</div>

									
									<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="defaultInline2" name="gender" required>
									<label class="custom-control-label" for="defaultInline2">Female</label>
									</div>

									
									<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="defaultInline3" name="gender" required>
									<label class="custom-control-label" for="defaultInline3">Other</label>
									</div>
								</div>

								<hr>
								<p><strong><center><i class="fas fa-address-card"></i> Mention Your Address</center></strong></P>
								<hr>

								<div class="md-form mb-4">
									<label><strong>Local Address<b style="color:red">*</b></strong></label>
									<input type="varchar" name="local_address" placeholder="Mention Your Local Add." class="form-control  validate" required>
								</div>
								<div class="md-form mb-4">
									<label><strong>City<b style="color:red">*</b></strong></label>
									<input type="text" name="city" placeholder="Mention Your City." class="form-control  validate" required>
								</div>
								<div class="md-form mb-4">
									<label><strong>State<b style="color:red">*</b></strong></label>
									<input type="text" name="state" placeholder="Mention Your Local State."  class="form-control  validate" required>
								</div>
								<div class="md-form mb-4">
									<label><strong>Country<b style="color:red">*</b></strong></label>
									<input type="text" name="country" placeholder="Mention Your Country Name"  class="form-control  validate" required>
								</div>
								<div class="md-form mb-4">
									<label><strong>PIN / ZIP<b style="color:red">*</b></strong></label>
									<input type="varchar" name="zip" placeholder="Mention Your valid PIN/ZIP."  class="form-control  validate" required>
								</div>
								
								<hr>
								<p><strong><center>Website & Social Media Profile Link</center></strong><center><h6>(If You Have, Then Please Fill Any One Or More Places)</h6></center></P>
								<hr>
								
								<div class="md-form mb-4">
									<label><strong>Facebook Link</strong></label>
									<input type="varchar" placeholder="&#xf082; Your Facebook Profile Link" name="facebook_link"  class="form-control  validate">
								</div>

								<div class="md-form mb-4">
									<label><strong>Twitter Link</strong></label>
									<input type="varchar" name="twitter_link"  placeholder="&#xf081; Your Twitter Lrofile Link" class="form-control  validate">
								</div>

								<div class="md-form mb-4">
									<label><strong>Instagram Link</strong></label>
									<input type="varchar" name="instagram_link"  placeholder="&#xf16d; Your Instagram Profile Link"  class="form-control  validate">
								</div>

								<div class="md-form mb-4">
									<label><strong>Website Link</strong></label>
									<input type="varchar" name="website_link"  placeholder="&#xf0ac; Your Website Link" class="form-control  validate">
								</div>
								
								<hr>

								<div class="md-form mb-2">
									<label>Your Fevourite Quote</strong></label>
									<textarea class="md-textarea form-control" name="member_quote" placeholder="&#xf040; Not More Than 100 Letters." maxlength="100"></textarea>
								</div>

								<div class="md-form mb-4" >
									<label><strong>Why Are You Want To Join Aastha?<b style="color:red">*</b></strong></label>
									<textarea class="md-textarea form-control" name="message" placeholder="&#x270E; Briefly Elaborate Your Message..." required></textarea>
								</div>     -->
								
							</div>
							
							<div class="custom-control custom-checkbox  my-1 mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlInline" onclick="terms_changed(this)">
								<label class="custom-control-label" for="customControlInline">I Am Agree With Aastha Foundatin's Guidelines In My Own Sense.<br>Please Follow Our <a href="#" data-toggle="modal" data-target=".bd-Guideline-modal-lg" >Guidelines</a>.</label>
							</div>

							<div class="modal-footer d-flex justify-content-center">
								<button  id="submit_button" onclick="alert_message()" disabled class="btn btn-default" style="background-color: #2ECC71">SUBMIT</button>
							</div>
							
							<hr>
							<h6>(<b style="color:red">*</b>) Marks Are Required Field. <br> Before Submit This Form Please Check Out The Box.<h6>
							
							
						</form>

					</div>

					

					</div>
				</div>


			</section>



			<!--For guidelines Modal-->
			<div class="modal fade bd-Guideline-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Modal Header</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>	
			
			
		
		
		<script>
			//on whether a checkbox has been ticked or not.
			function terms_changed(termsCheckBox){
				//If the checkbox has been checked
				if(termsCheckBox.checked){
					//Set the disabled property to FALSE and enable the button.
					document.getElementById("submit_button").disabled = false;
					
					
				} else{
					//Otherwise, disable the submit button.
					document.getElementById("submit_button").disabled = true;
					
					
				}
			}
			
			
		</script>
		
		<?php $this->load->view('footer') ?>

	</body>
</html>
