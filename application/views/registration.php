<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
		<link href="<?php echo base_url(); ?>public/css/all_form.css" rel="stylesheet" type="text/css"/>
		
		<style>
		
			
			#banner_image{
				padding-top: 75px;
				padding-bottom: 50px;
				text-align: center;
				background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('<?php echo base_url(); ?>public/img/15(1).jpg') center;
				background-size:100% 100%;
				height:100%;
			}
			.banner_content:hover{background: url('<?php echo base_url(); ?>public/img/btn.jpg')  center;}
			
			
			.registration-section .container{
				width:100%;
				margin:auto;
				overflow:hidden;
			}

			.registration-section .container h2{
				text-align:Center;
				text-decoration:Underline;
				text-underline-position:under;
				color: rgb(238,235,235);
				letter-spacing: 2px;
				
			}
			.registration-section .container p{
				text-align:center;
				width:70%;
				margin-left: auto;
				margin-right: auto;
				padding-bottom:%;
				color:#fff;
				letter-spacing:2px;
				
			}

			.registration-form{
				display:grid;
				grid-template-columns: auto auto;
				grid-gap: 5px;
			}

			#set{
				padding-top: 5%;
				
			}
			h3{
				padding-top:5%
				text-align:Center;
				
				color: rgb(238,235,235);
				letter-spacing: 2px;
				
			}
			.registration-section .container .registration-form .conditions{
				padding-top:5%;
				width:80%;
			}

			.list-group{
				padding-top:2%;
				color:#fff;
			}
			
			.space{
				padding-top:3%;
			}
			
			
			.custom-control{
				padding-top:3%;
				color:#fff;
			}
		</style>
	</head>
	<body>
		
		
		
		<div id="banner_image" alt="responsive image">
			
				<section class="registration-section">
					<div class="container">
						<h2>Member Registration</h2>
						<p>Put Your Hand Forward | বাড়িয়ে দাও তোমার হাত  |  अपना हाथ बढ़ाएं </p>
						<div class="registration-form" class="panel-body">
						
							<form>
							
								<center>
									<div class="conditions">
										<h2>Guideline For Membership</h2>
										<ol class="list-group">
											<li>First item First item First item First item First item  First item First item First item First item First item </li>
											<li>Second item</li>
											<li>Third item</li>
											<li>Third item</li>
											<li>Third item</li>
											<li>Third item</li>
											<li>Third item</li>
											<li>Third item</li>
											<li>Third item</li>
											<li>Third item</li>
											<li>Third item</li>
											<li>Third item</li>
											<li>Third item</li>
										</ol>
									</div>
								</center>
								<br>
							
							
								<input type="text" placeholder="Name" required>
								<input type="text" placeholder="Designation Or Profession (Eg: Student/Working/others.)" required>
								<input type="Email" placeholder="Email" required>
								<input type="number" placeholder="Moblie Number (Eg: Contact/WhatsApp)" required>
								
								<p><strong>Address</strong></P>
								<input type="varchar" placeholder="Local Address" required>
								<input type="text" placeholder="City" required>
								<input type="text" placeholder="State" required>
								<input type="text" placeholder="Country" required>
								<input type="number" placeholder="Zip" required>
								
								<textarea type="message" placeholder="Why Are You Want To Join Aastha?" required></textarea>
								
						
					
								
								
								<div class="custom-control custom-checkbox my-1 mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlInline" onclick="terms_changed(this)">
								<label class="custom-control-label" for="customControlInline">I Am Agree With All Terms And Conditions In My Own Sense. Let's Check Me Out.</label>
								 </div>
								<div class="space">
								<button class="submit" id="submit_button" onclick="alert_message()" disabled>Submit</button>
								</div>
							</form>
						</div>
					</div>
				</section>
			
			
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
		
	</body>
</html>
