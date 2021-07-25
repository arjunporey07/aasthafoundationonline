<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
		<!--	<link href="<?php echo base_url(); ?>public/css/gallery.css" rel="stylesheet" type="text/css"/> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
		
		
		<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
		<!-- or -->
		<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>

		<style>

			#gallery{
				padding-top: 75px;
				padding-bottom: 50px;
				text-align: center;
				background:none;
				background-size:100% 100%;
			}
			.grid-item { width: 20%; }
			/* 2 columns */
			.grid-item--width2 { width: 40%; }

		</style>

	</head>
	<body>
		<?php $this->load->view('nav') ?>

				<section id="gallery">
			
					<center>
						<h2 class="p-2" style="color:#C708FE; font-family:Times Roman,Time"><strong>GALLERY</strong></h2>
					</center>
				

					<div class="tab-pane" id="photos" role="tabpanel" aria-labelledby="photos-tab">
						<div class="view">							
							<div class="grid">
						
								<?php 
											
									foreach($our_works_list as $i=>$row)
									{
								?>
									<?php 
										$imgs=explode(',',$row['our_works_details_img']);
										foreach($imgs as $img){
									?>
										<div class="grid-item p-1">
											<a href="<?php echo base_url(); ?>public/upload/our_works_img/<?php echo (!empty($img)?$img:'Aastha.jpg')?>">
											
											<img src="<?php echo base_url(); ?>public/upload/our_works_img/<?php echo (!empty($img)?$img:'Aastha.jpg')?>" class="img-fluid"  alt="card image cap" >
											</a>
										</div>
									<?php }?>
								<?php }?>
							
							</div>
						</div>
					</div>

				</sction>
			</div>
		</div>
		

		<?php $this->load->view('footer') ?>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

		<script src="/path/to/masonry.pkgd.min.js"></script>

		<script>
			var elem = document.querySelector('.grid');
			var msnry = new Masonry( elem, {
			// options
			itemSelector: '.grid-item',
			columnWidth: 200
			});

			// element argument can be a selector string
			//   for an individual element
			var msnry = new Masonry( '.grid', {
			// options
			});
			// external js: masonry.pkgd.js

			$('.row').masonry({
			itemSelector: '.grid-item',
			columnWidth: 160
			});
		</script>
		
		<script>
			//without caption
			baguetteBox.run('.view');

			//for image caption... cation in the alt=""
		// 	baguetteBox.run('.tz-videos', {
		// 		captions: function(element) {
		// 			return element.getElementsByTagName('img')[0].alt;
		// 		}
		// 	});
		</script>
	</body>
	
