<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
		<link href="<?php echo base_url(); ?>public/css/our_works.css" rel="stylesheet" type="text/css"/>
		
		<style>
		.navbar{
			background:#000;
		}
			#background_image{
				padding-top: 75px;
				padding-bottom: 50px;
				text-align: center;
				background:none;
				background-size:100% 100%;
			}
			.banner_content:hover{background: url('<?php echo base_url(); ?>public/img/btn.jpg')  center;}
			
			.responsive {
				max-width: 100%;
				height: auto;
			}
			.modal-lg{
				min-width:80%;
			}
			
		</style>
	</head>
	<body>
		
		<?php $this->load->view('nav') ?>
		<div id="background_image" alt="responsive image">
			<div class="container" style="min-width:100%;">
				<section id="our_works">
			
					<center>
						<h2 class="p-2" style="color:#C708FE; font-family:Times Roman,Time"><strong>OUR WORKS</strong></h2>
					</center>
					
					<div class="" >
				<!--		<div>
							<h3 id="switch" style="font-size:30px; color:#"></h3>
							<hr>
							<p id="demo" style="font-size:30px; font-weight:lighter; color:#000"></p>
						</div>
						
						<div class="row" class="">
						
						
						<?php 
							foreach($new_activity_list as $i=>$row)
							{	
						?>
						
							<div class="col-lg-6 col-md-4 col-sm-6 col-12 p-1">
								<div>
									<img src="<?php echo base_url(); ?>public/upload/new_activity_img/<?php echo (!empty($row['new_event_img'])?$row['new_event_img']:'Aastha_logo.jpg')?>" class="responsive"  alt="responsive" style="max-width:80%">
									
									<p class="p-3"><?php echo $row['new_event_location']?></p>
									<hr>
									<p><?php echo $row['new_event_route']?></p>
									
								</div>
							</div>
							
							<div class="col-lg-6 col-md-4 col-sm-6 col-12 p-1">
								<h4><?php echo $row['new_event_title']?></h4>
								<p style="color:#000"><?php echo substr($row['new_event_details'],0,200)?></p>
								
								<div style="padding-bottom: 50px;">
									<a href="<?php echo base_url('index.php/Welcome/new_activity');?>" class="btn btn-default" style="background:#58D68D65; float:right;"><strong>Know More</strong></a>
								</div>
								
							</div>
							
							
							<?php } ?>
						
						
						</div> -->

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
				</section> 
				
				<!-- End New ACTIVITY Section -->
				
				
				<hr style="background:#E74C3C; height:0.8px">
				
				
				<div class="row justify-content-center">
					<?php 
						foreach($our_works_list as $i=>$row)
						{	
					?>
					<div class="col-lg-3 col-md-4 col-sm-4 col-12 p-1">
						<div class="p-2" >
							<div class="inner">
								<img src="<?php echo base_url(); ?>public/upload/our_works_img/<?php echo (!empty($row['our_works_img'])?$row['our_works_img']:'Aastha.jpg')?>" class="card-img-top" style="height:30rem" alt="card image cap">
							</div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $row['our_works_title']?></h5>
								<a href="<?php echo base_url() ?>index.php/Welcome/our_works_details/<?php echo $row['our_works_id'] ?>" class="btn btn-primary">See More</a>
							</div>
						</div>
					</div>
					<?php } ?>	
				</div>
				
			</div>
		</div>
		
		
		
		
		
		
	</body>
</html>