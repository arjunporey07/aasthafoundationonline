<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
		<link href="<?php echo base_url(); ?>public/css/memberlist.css" rel="stylesheet" type="text/css"/>
		
		<style>
		.navbar{
			background:#000;
		}
			#banner_image{
				padding-top: 75px;
				padding-bottom: 50px;
				background:none;
				background-size:100% 100%;
			}
			
			
	</style>
	</head>
	<body>
		
		<?php $this->load->view('nav') ?>
		<div id="banner_image" alt="responsive image">
			
			<div class="container" style="max-width:90%">
				<center>
					<h2 class="p-2" style="background-color:#F4D03F; color:#58D68D; font-family:Comic Sans MS"><strong>MEMBER LIST</strong></h2>
				</center>
				
				<div>
					<center>
						<h2 class="p-2" style="background-color:#E8E8E8; max-width:70%; color:#E74C3C; font-family:Courier New, Courier, monospace">ADMIN</h2>
					</center>
					<div class="row justify-content-center">
						
						<?php 
						foreach($member_list_admin as $i=>$row)
						{	
						?>
					
						<div class="col-lg-4 col-md-4 col-sm-4 col-12 p-3">
						
							<!-- Card Narrower -->

							<!-- Card Regular -->
							<div class="card card-cascade" style="background-color:#F1C40F80" >
								<!-- Title -->
									<h4 class="card-title"><strong><?php echo $row['member_name']?></strong></h4>
									<p>A Formal Group <?php echo substr($row['member_position'],0,100); ?> Of Aastha</p>
								<!-- Card image -->
								<div class="view view-cascade overlay" >
									<img class="card-img-top" src="<?php echo base_url(); ?>public/upload/memberlist/<?php echo (!empty($row['member_img'])?$row['member_img']:'g1.png')?>" style="max-height:20rem" alt="Card image cap">
								</div>

								<!-- Card content -->
								<div class="card-body card-body-cascade text-center">

									<!-- Subtitle -->
									<h6 class="font-weight-bold indigo-text py-2"><?php echo substr($row['member_designation'],0,100); ?></h6>
									<!-- Text -->
									<p class="card-text" style="font-family:'poppins'"><strong><em><?php echo substr($row['member_quote'],0,100); ?></strong></em></p>

									<!-- Twitter -->
									<a href="<?php echo $row['facebook_link']?>" class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>
									<!-- Facebook -->
									<a href="<?php echo $row['twitter_link']?>" class="px-2 fa-lg tw-ic "><i class="fab fa-twitter"></i></a>
									<!-- Instagram -->
									<a href="<?php echo $row['instagram_link']?>" class="px-2 fa-lg ig-ic"><i class="fab fa-instagram"></i></a>

								</div>
							</div>
						</div>
						
						<?php } ?>
						
					</div>
				</div>
				
				<div>
					<center>
						<h2 class="p-2" style="background-color:#E8E8E8; color:#3498DB; max-width:70%;font-family:Courier New, Courier, monospace">MODERATORs</h2>
					</center>
					<div class="row justify-content-center">
						
						<?php 
						foreach($member_list_moderator as $i=>$row)
						{	
						?>
					
						<div class="col-lg-4 col-md-4 col-sm-4 col-12 p-3">
						
							<!-- Card Narrower -->

							<!-- Card Regular -->
							<div class="card card-cascade" style="background-color:#3498DB80">
								<!-- Title -->
									<h4 class="card-title"><strong><?php echo $row['member_name']?></strong></h4>
									<p>A Formal Group <?php echo substr($row['member_position'],0,100); ?> Of Aastha</p>
								<!-- Card image -->
								<div class="view view-cascade overlay" >
									<img class="card-img-top" src="<?php echo base_url(); ?>public/upload/memberlist/<?php echo (!empty($row['member_img'])?$row['member_img']:'g1.png')?>" style="max-height:20rem" alt="Card image cap">
								</div>

								<!-- Card content -->
								<div class="card-body card-body-cascade text-center">

									<!-- Subtitle -->
									<h6 class="font-weight-bold indigo-text py-2"><?php echo substr($row['member_designation'],0,100); ?></h6>
									<!-- Text -->
									<p class="card-text" style="font-family:'poppins'"><strong><em><?php echo substr($row['member_quote'],0,100); ?></strong></em></p>

									<!-- Twitter -->
									<a href="<?php echo $row['facebook_link']?>" class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>
									<!-- Facebook -->
									<a href="<?php echo $row['twitter_link']?>" class="px-2 fa-lg tw-ic "><i class="fab fa-twitter"></i></a>
									<!-- Instagram -->
									<a href="<?php echo $row['instagram_link']?>" class="px-2 fa-lg ig-ic"><i class="fab fa-instagram"></i></a>

								</div>
							</div>
						</div>
						
						<?php } ?>
						
					</div>
				</div>
				
				
				<div>
					<center>
						<h2 class="p-2" style="background-color:#E8E8E8; color:#F4D03F; max-width:60%;font-family:Courier New, Courier, monospace">MEMBERs</h2>
					</center>
					<div class="row justify-content-center">
						
						<?php 
						foreach($member_list_member as $i=>$row)
						{	
						?>
						<div class="col-lg-4 col-md-4 col-sm-4 col-12 p-3">
						
							<!-- Card Narrower -->

							<!-- Card Regular -->
							<div class="card card-cascade" style="background-color:#E74C3C80">
								<!-- Title -->
									<h4 class="card-title"><strong><?php echo $row['member_name']?></strong></h4>
									<p>A Formal Group <?php echo substr($row['member_position'],0,100); ?> Of Aastha</p>
								<!-- Card image -->
								<div class="view view-cascade overlay" >
									<img class="card-img-top" src="<?php echo base_url(); ?>public/upload/memberlist/<?php echo (!empty($row['member_img'])?$row['member_img']:'g1.png')?>" style="max-height:20rem" alt="Card image cap">
								</div>

								<!-- Card content -->
								<div class="card-body card-body-cascade text-center">

									<!-- Subtitle -->
									<h6 class="font-weight-bold indigo-text py-2"><?php echo substr($row['member_designation'],0,100); ?></h6>
									<!-- Text -->
									<p class="card-text" style="font-family:'poppins'"><strong><em><?php echo substr($row['member_quote'],0,100); ?></strong></em></p>

									<!-- Twitter -->
									<a href="<?php echo $row['facebook_link']?>" class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>
									<!-- Facebook -->
									<a href="<?php echo $row['twitter_link']?>" class="px-2 fa-lg tw-ic "><i class="fab fa-twitter"></i></a>
									<!-- Instagram -->
									<a href="<?php echo $row['instagram_link']?>" class="px-2 fa-lg ig-ic"><i class="fab fa-instagram"></i></a>

								</div>
							</div>
						</div>
						
						<?php } ?>
						
					</div>
				</div>
				
			</div>

		</div>
	</body>
</html>


						