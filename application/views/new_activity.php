<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
		<link href="<?php echo base_url(); ?>public/css/" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<style>
			#banner_image{
				padding-top: 60px;
				padding-bottom: 50px;
				text-align: center;
				background-image: center;
				background-size:100% 100%;
				height:100%;
			}
			
			.responsive {
				max-width: 100%;
				height: auto;
			}
		
			.feedback-section .container{
				width:90%
				margin:auto;
				overflow:hidden;
			}
			
			.navbar-nav a{
				font-family:poppins;
				font-size:18px;
				text-transform:uppercase;
				font-weight:bold;
			}
			
			.navbar-light .navbar-brand{
				color:#fff;
				font-size:25px;
				text-transform:uppercase;
				font-weight:bold;
				letter-spacing:2px;
			}
			.map{
				border:2px solid #2196F3;
				color: dodgerblue;
				font-size:24px;
			}
			.map:hover {
				background: #2196F3;
				color: white;
			}

		</style>
	</head>
	<body>
		
		<?php $this->load->view('nav') ?>
		
		<div id="banner_image" alt="responsive image">
			
			<center>
				<h2 class="p-2" style="background-color:#E8E8E8;">New Activity</h2>
			</center>
			
			<div class="feedback-section">
				<div class="container" style="min-width:90%" >
					<div>
						<h3 id="switch"  style="color:#58D68D; letter-spacing:2px;"></h3>
						<hr>
						<p id="demo" style="font-size:30px; font-weight:lighter; color:#2E86C1"></p>
						
					</div>
					
					<div class="row" class="container">
						<?php 
							foreach($new_activity_list as $i=>$row)
							{	
						?>
							<div class="col-lg-6 col-md-4 col-sm-6 col-6 p-1">
								<div>
									<img src="<?php echo base_url(); ?>public/upload/new_activity_img/<?php echo (!empty($row['new_event_img'])?$row['new_event_img']:'Aastha_logo.jpg')?>" class="responsive"  alt="responsive">
									
								</div>
							</div>
							
							<div class="col-lg-6 col-md-4 col-sm-6 col-6 p-2">
								<h4><?php echo $row['new_event_title']?></h4>
								<p style="color:#000"><?php echo $row['new_event_details']?></p>
								<hr>
								<strong>Find Location By Clicking Here:  </strong><a style="" href="<?php echo $row['new_event_location']?>"><button class="btn map" style=""><i class="fas fa-search-location"></i></button></a>
								<hr>
								<p><?php echo $row['new_event_route']?></p>
							</div>

						<?php } ?>

					</div>

				
					
					
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-3 p-2">
							<a class="btn" style="background:#F0F0F0" ><i class="fa fa-youtube-play" style="font-size:24px;color:red"></i> <strong>YouTube</strong></a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-3 p-2">
							<a href="https://www.facebook.com/%E0%A6%86%E0%A6%B8%E0%A7%8D%E0%A6%A5%E0%A6%BE-FoundationHooghly-113141890041812/?epa=SEARCH_BOX" class="btn btn-primary" style="color:#EEE"><i class="fab fa-facebook-square"></i> <strong>Facebook</strong></a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-3 p-2">
							<a href="<?php echo base_url('index.php/Welcome/our_works'); ?>" class="btn btn-warning" style="color:#"><strong>More Events</strong></a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-3 p-2">
							<a href="<?php echo base_url('index.php/Welcome/article'); ?>" class="btn btn-success" style="color:#"><strong>More Article</strong></a>
						</div>
					</div>
					
					
				</div>
			</div>
		
			<script>
				// Set the date we're counting down to
				var countDownDate = new Date("<?php echo $row['new_event_dt']; ?>").getTime();
				
				
				
				// Update the count down every 1 second
				var x = setInterval(function() {

				// Get today's date and time
				var now = new Date().getTime();

				// Find the distance between now and the count down date
				var distance = countDownDate - now;

				// Time calculations for days, hours, minutes and seconds
				var days = Math.floor(distance / (1000 * 60 * 60 * 24));
				var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				var seconds = Math.floor((distance % (1000 * 60)) / 1000);

				// Display the result in the element with id="demo"
				document.getElementById("demo").innerHTML = days + "d " + hours + "h "
				+ minutes + "m " + seconds + "s ";
				
				// If the count down is finished, write some text
				if (distance < 0) {
					clearInterval(x);
					document.getElementById("demo").innerHTML = "BEING";
					}
					else{
						document.getElementById("switch").innerHTML = "COMING SOON";
						document.getElementById("switch").style.letterSpacing = "10px";
					}
				}, 1000);
			</script>

		</div>

		<?php $this->load->view('footer') ?>
		
		
	</body>
</html>
