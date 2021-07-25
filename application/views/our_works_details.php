<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
		<link href="<?php echo base_url(); ?>public/css/videos_details.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
		
		<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
		<!-- or -->
		<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
		
		<style>
		
			#banner_image{
				padding-top: 75px;
				padding-bottom: 50px;
				text-align: center;
				background: linear-gradient( 138deg,  rgba(32,201,255,1) 36.7%, rgba(0,8,187,1) 84.4%, rgba(255,255,255,1) 119.7% ); center;
				background-size:100% 100%;
			}
			.banner_content:hover{background: url('<?php echo base_url(); ?>public/img/btn.jpg')  center;}
			
			
			.grid-item { width: 200px; }
			.grid-item--width2 { width: 400px; }
			
			.container{
				max-width:80%;
			}
	</style>
	</head>
	<body>
				
		<?php $this->load->view('nav') ?>
		<div id="banner_image" alt="responsive image">
		
		
		
			<div class="row container" style="max-width:90%;">
			
				<div class="col-lg-2 col-3">
					<!-- Nav tabs -->
					<ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<li class="nav-item">
							<a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About Event</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="photos-tab" data-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="false">Photos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos" aria-selected="false">Videos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="blogs-tab" data-toggle="tab" href="#blogs" role="tab" aria-controls="blogs" aria-selected="false">Blogs</a>
						</li>
					</ul>
				</div>

				<div class="col-lg-10 col-9">
					<!-- Tab panes -->
					<div class="tab-content">
						<!-- For Home-->
						<div class="tab-pane active" id="about" role="tabpanel" aria-labelledby="home-tab">
							<center>
								<h2 class="p-2" style="background-color:#E8E8E8;">Event Title</h2>
							</center>
								
							<div class="media p-1" style="background-color:#E8E8E899;">
								<div class="media-body">
									<?php 	
										$descs=explode('`',$details['our_works_desc']);
										foreach($descs as $desc){			
									?>
									<p class="card-text"><?php echo $desc ?></p>
								<?php } ?>
								</div>
							</div>
						</div>
						
						<!-- For Photos Panel-->
						<div class="tab-pane" id="photos" role="tabpanel" aria-labelledby="photos-tab">
							<div class="tz-videos">							
								<div class="row">
									<?php 	
										$imgs=explode(',',$details['our_works_details_img']);
										foreach($imgs as $img){			
									?>
										<div class="col-lg-2 col-md-4 col-sm-4 col-4 p-1" style="box-shadow: 0px 0px 50px #000;">
											
												<a href="<?php echo base_url(); ?>public/upload/our_works_img/<?php echo (!empty($img)?$img:'Aastha.jpg')?>">
													<img src="<?php echo base_url(); ?>public/upload/our_works_img/<?php echo (!empty($img)?$img:'Aastha.jpg')?>" class="img-fluid"  alt="card image cap" style="max-height:12rem; max-height:12rem">
												</a>
											
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
						
						<!-- For Videos Panel-->
						<div class="tab-pane" id="videos" role="tabpanel" aria-labelledby="videos-tab">
						
							<?php 
								$videos=explode(',',$details['our_works_details_video']);
								foreach($videos as $video){		
							?>
							
							<iframe width="320" height="240" src="<?php echo $video ?>"></iframe>
							<?php }?>
						</div>
						
						
						<!-- For Blogs Panel-->
						<div class="tab-pane" id="blogs" role="tabpanel" aria-labelledby="blogs-tab">
							<?php 
								$blogs=explode(',',$details['our_works_details_exp']);
								foreach($blogs as $blog){		
							?>
								<iframe width="320" height="240" src="<?php echo base_url(); ?>public/upload/our_works_details_pdf/<?php echo (!empty($blog)?$blog:'PHP Assignmemt.pdf')?>"></iframe>
							<?php }?>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		<?php $this->load->view('footer') ?>
					
					<!--		<br>
							
							<?php 
								
								$videos=explode(',',$details['videos_details_video']);
								foreach($videos as $video){
										
								
							?>
							
							<iframe width="320" height="240" src="<?php echo $video ?>">
							</iframe>
							<?php }?>
							
							<h3><strong><em>Facebook</em></strong><h3>
							<?php 
								
								$videos=explode(',',$details['videos_details_video']);
								foreach($videos as $video){
										
								
							?>
							
							<div  width="420" height="420" class="fb-video" data-href="<?php echo $video ?>" data-show-text="true" data-width="">
							</div>
							<?php }?>    -->
		
		
		
		<!-- Scripts -->
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
		 
		<script>
			baguetteBox.run('.tz-videos');
		</script>
		
		
		
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="6epQR4rw">
		</script>
		
	</body>
</html>