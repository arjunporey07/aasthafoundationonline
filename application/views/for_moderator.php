<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		
		<style>
			#banner_image{
				background:none;
			}
			
		</style>
	</head>
	</body>
		<div id="banner_image" alt="responsive image">
			
			<div class="container" style="max-width:60%">
				<center>
					<h2 class="p-2" style="background-color:#E8E8E8;">Group Moderator</h2>
				</center>
				<div class="row ">
					
					<?php 
					foreach($member_list as $i=>$row)
					{	
					?>
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-6 p-3">
					
						<!-- Card Narrower -->

						<!-- Card Regular -->
						<div class="card card-cascade">
							<!-- Title -->
								<h4 class="card-title"><strong><?php echo $row['member_name']?></strong></h4>
								<p>A Formal Group <?php echo substr($row['member_position'],0,100); ?> Of Aastha</p>
							<!-- Card image -->
							<div class="view view-cascade overlay" >
								<img class="card-img-top" src="<?php echo base_url(); ?>public/upload/memberlist/<?php echo (!empty($row['member_img'])?$row['member_img']:'g1.png')?>" alt="Card image cap">
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
	</body>
</html>