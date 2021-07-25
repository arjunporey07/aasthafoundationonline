<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
		<link href="<?php echo base_url(); ?>public/css/contact_us.css" rel="stylesheet" type="text/css"/>
		
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
			
			
			.contact-section .container{
				width:90%
				margin:auto;
				overflow:hidden;
			}

			.contact-section .container h2{
				text-align:Center;
				text-decoration:Underline;
				text-underline-position:under;
				color: rgb(238,235,235);
				letter-spacing: 2px;
				
			}
			.contact-section .container p{
				text-align:center;
				width:70%;
				margin-left: auto;
				margin-right: auto;
				padding-bottom: 3%;
				color:#fff;
				letter-spacing:2px;
				
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

			
			
			
	</style>
	</head>
	<body>
		
	
		
		<div id="banner_image" alt="responsive image">
			<!--
			<div class="container">
				<center>
					<div class="banner_content w-100" style="margin-top:5%">
						<div>
							<p id="text"><strong><em>Welcome To | AASTHA.....</em></strong></p>
						</div>
					</div>
				</center>
			</div>
			-->
				<section class="contact-section">
					<div class="container">
						<h2>Contact Us</h2>
						<p>Email Us And Keep Up To Date With Us</p>
						<div class="contact-form">
							<div class="">
								<a href="https://www.facebook.com/groups/863723317347552/?ref=br_tf&epa=SEARCH_BOX"><i class="fa fa-facebook" aria-hidden="true"></i><span class="form-info">Aastha_Facebook</span></a><br>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span class="form-info">Aastha_Twitter</span></a><br>
								<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span class="form-info">Aastha_Google+</span></a><br>
								<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i><span class="form-info">Aastha_Instagram</span></a>
							</div>
							
							<div>
								<form>
									<input type="text" placeholder="First Name" required>
									<input type="text" placeholder="Last Name" required>
									<input type="Email" placeholder="Email" required>
									<input type="text" placeholder="Subject Of This Message" required>
									<textarea type="message" placeholder="Message" required></textarea>
									<button class="submit">Let's Talk</button>
								</form>
							</div>
						</div>
					</div>
				</section>
			
			<div id="set">
				<h3>Know Me More:<h3>
				<div class="link">
					<ul>
						<li><a href="https://www.facebook.com/groups/863723317347552/?ref=br_tf&epa=SEARCH_BOX"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		
	</body>
</html>
