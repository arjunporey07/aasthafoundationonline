<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
  <head>
		<?php $this->load->view('head') ?>
		<!--
		<link href="<?php echo base_url(); ?>public/css/aastha.css" rel="stylesheet" type="text/css"/>
-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Caveat:wght@700&family=Cormorant+Garamond:wght@700&family=Lovers+Quarrel&family=Montserrat:wght@400&family=Poppins:wght@200&display=swap" rel="stylesheet">
		<style>
			#intro{
				margin-top:60px;
			}
			
			#our_works{
				margin-top:10px;
			}
			
			 #facts{
				/* background:url('<?php echo base_url(); ?>public/img/facts_bg.jpg') ; */
				margin:10px;
			}
				
			#about{
				margin-top:10px;
				
			}
			
			#about #logo img {
				border:3px solid #13a456;
				border-radius: 50%;
			}

			@media only screen and (min-width: 768px) {
				#about  #admin {
					min-width: 80%;
					}
				}
			
			#our_member{
				
				margin-top:10px;
			}

			#new_activity{
				margin-top:10px;
				padding-bottom: 50px;
				text-align: center;
				background-size:100% 100%;
				height:100%;
			}
			
			.responsive {
				max-width: 100%;
				height: auto;
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
	
	<div>	
		<?php $this->load->view('nav') ?>
	</div>
	<!-- ======= Intro Section ======= -->
		<section id="intro" >
			<!--Carousel Wrapper-->
			<div id="carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
			  <!--Indicators-->
			  <ol class="carousel-indicators">
				<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example" data-slide-to="1"></li>
				<li data-target="#carousel-example" data-slide-to="2"></li>
				<li data-target="#carousel-example" data-slide-to="3"></li>
				<li data-target="#carousel-example" data-slide-to="4"></li>
			  </ol>
			  <!--/.Indicators-->
			  <!--Slides-->
			  <div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
				  <div class="view">
					<img class="d-block w-100" src="<?php echo base_url(); ?>public/img/intro_img/intro_1.jpg"
					   style="max-height:80vh; display:block;" alt="responsive image">
				  </div>
				  <div class="carousel-caption" style="font-family:'poppins';" ><strong><em>
				  	<p style="font-size:20px">&ldquo; Let us sacrifice our today so that our children can have a better tomorrow.&rdquo;</p>
					<h4 class="h3-responsive" style="float:right"> &#9866; Dr. A. P. J.  Abdul Kalam</h4>
					</strong></em>
				  </div>
				</div>
				<div class="carousel-item">
				  <!--Mask color-->
				  <div class="view">
					<img class="d-block w-100" src="<?php echo base_url(); ?>public/img/intro_img/intro_3.jpg"
					  style="max-height:80vh; display:block;" alt="responsive image">
				  </div>
				  <div class="carousel-caption" style="font-family:'poppins'"><strong><em>
					<p style="font-size:20px">&ldquo;It&rsquo;s not how much we give but how much love we put into giving.&rdquo;</p>
					<h3 class="h3-responsive"> &#9866; Mother Teresa</h3>
					</strong></em>
				  </div>
				</div>
				<div class="carousel-item">
				  <!--Mask color-->
				  <div class="view">
					<img class="d-block w-100" src="<?php echo base_url(); ?>public/img/intro_img/intro_2.jpg"
					  style="max-height:80vh; display:block;" alt="responsive image">
				  </div>
				  <div class="carousel-caption" style="font-family:'poppins'"><strong><em>
				  	<p style="font-size:20px">&ldquo;As we lose ourselves in the service of others, we discover our own lives and our own happiness.&rdquo;</p>
					<h3 class="h3-responsive"> &#9866; Dieter F. Uchtdorf</h3>
					</strong></em>
				  </div>
				</div>
				<div class="carousel-item">
				  <!--Mask color-->
				  <div class="view">
					<img class="d-block w-100" src="<?php echo base_url(); ?>public/img/intro_img/intro_7.jpg"
					  style="max-height:80vh; display:block;" alt="responsive image">
				  </div>
				  <div class="carousel-caption" style="font-family:'poppins'"><strong><em>
				  	<p style="font-size:20px"></p>
					<h3 class="h3-responsive"></h3>
					</strong></em>
				  </div>
				</div>
				<div class="carousel-item">
				  <!--Mask color-->
				  <div class="view">
					<img class="d-block w-100" src="<?php echo base_url(); ?>public/img/intro_img/intro_6.jpg"
					  style="max-height:80vh; display:block;" alt="responsive image">
				  </div>
				  <div class="carousel-caption" style="font-family:'poppins'"><strong><em>
				  	<p style="font-size:20px; " >&ldquo;We make a living by what we get. We make a life by what we give.&rdquo;</p>
					<h3 class="h3-responsive"> &#9866; Winston S. Churchill</h3>
					</strong></em>
				  </div>
				</div>
			  </div>
			  <!--/.Slides-->
			  <!--Controls-->
			  <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			  <!--/.Controls-->
			</div>
			<!--/.Carousel Wrapper--> 
		<!-- End Intro Section -->
		</section>
		<!-- ======= New Activity Section ======= -->
		<section id="new_activity">
		
					<h2 class="p-2" style="color:#C708FE; font-family: 'Caveat', cursive; font-size:60px"><strong>New Activty</strong></h2>
				
				<div class="container">
					<div class="" >
						<div>
							<h3 id="switch"  style="color:#58D68D; letter-spacing:2px;"></h3>
							<hr>
							<p id="demo" style="font-size:30px; font-weight:lighter; color:#2E86C1"></p>
						</div>
						
						<div class="row" class="">
						
						
						<?php 
							foreach($new_activity_list as $i=>$row)
							{	
						?>
						
							<div class="col-lg-6 col-md-6 col-sm-6 col-12 p-1">
								<div>
									<img src="<?php echo base_url(); ?>public/upload/new_activity_img/<?php echo (!empty($row['new_event_img'])?$row['new_event_img']:'Aastha_logo.jpg')?>" class="responsive"  alt="responsive" style="max-width:80%">
								</div>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-6 col-12 p-2">
								<h4><?php echo $row['new_event_title']?></h4>
								<p style=" font-family: 'Montserrat', sans-serif;"><?php echo substr($row['new_event_details'],0,200)?></p>
								<hr>
								<strong>Find Location By Clicking Here:  </strong><a style="" href="<?php echo $row['new_event_location']?>"><button class="btn map" style=""><i class="fas fa-search-location"></i></button></a>
								<hr>
								<p><?php echo $row['new_event_route']?></p>
								<div style="padding-bottom: 50px;">
									<a href="<?php echo base_url('index.php/Welcome/new_activity');?>" class="btn btn-default" style="background:#58D68D65; float:right;"><strong>Know More</strong></a>
								</div>
								
							</div>
							
							
						<?php } ?>
						
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
					
			<!--		<div>
						<?php 
							foreach($article_list as $i=>$row)
							{	
						?>
						
							<a href="<?php echo base_url(); ?>public/upload/article/article_pdf/<?php echo $row['article_pdf'] ?>" width="80%" height="300px" class="btn btn-danger" style="width:40%; color:#FDF90E" >New Blog</a>
							
						<?php } ?>
					
					</div>
						
					<div class="row ">
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
		</section>  End New Activity Section -->
		
		
		
		<!-- ======= Fact Section ======= -->
		<section id="facts">
			<div class="container">

				<header class="section-header p-2">
				<center>
					<h2 class="p-2" style="color:#18d26e; font-family: 'Caveat', cursive; font-size:60px"><strong>Facts</strong></h2>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
				</center>
				</header>

				<div class="row ">
					<?php 
						foreach($fact_form as $i=>$row)
						{	
					?>
						<div class="col-lg-4 col-6 text-center">
							<span data-toggle="counter-up"><?php echo $row['active_member']?></span>
							<p><strong>Members</strong></p>
						</div>

						<div class="col-lg-4 col-6 text-center">
							<span data-toggle="counter-up"><?php echo $row['work_done']?></span>
							<p><strong>Event Done</strong></p>
						</div>

						<div class="col-lg-4 col-6 text-center">
							<span data-toggle="counter-up"><?php echo $row['person']?></span>
							<p><strong>How Many People And Child Appretiate</strong></p>
						</div>

					<?php } ?>
				</div>
			</div>
			
		</section> <!-- End Fact Section -->
		
		
		<!-- ======= Our Works Section ======= -->
		<section id="our_works">
			<div class="container" style="max-width:100%">
				<center>
					<h2 class="p-2" style="color:#E74C3C; font-family: 'Caveat', cursive; font-size:60px "><strong>Our Works</strong></h2>
				</center>
				
				
				<div class="row justify-content-center">
					<?php 
						foreach($our_works_list as $i=>$row)
						{	
					?>
					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="p-2">
							<div class="inner">
								<a href="<?php echo base_url(); ?>public/upload/our_works_img/<?php echo (!empty($row['our_works_img'])?$row['our_works_img']:'Aastha.jpg')?>">
									<img src="<?php echo base_url(); ?>public/upload/our_works_img/<?php echo (!empty($row['our_works_img'])?$row['our_works_img']:'Aastha.jpg')?>" class="card-img-top" style="height:20rem" alt="card image cap">
								</a>
							</div>
							<div class="p-1" style="text-align:center">
						<!--		<h5 class=""><?php echo $row['our_works_title']?></h5>
								<p class="card-text"><?php echo substr($row['our_works_desc'],0,100); ?></p> -->
								
								<a href="<?php echo base_url() ?>index.php/Welcome/our_works_details/<?php echo $row['our_works_id'] ?>" class="btn btn-primary">See More</a>
							</div>
						</div>
					</div>
					<?php } ?>	
				</div> 
			</div>
			
			<div style="padding-bottom: 50px;">
				<button  class="btn btn-default" style="background:#58D68D65; float:right; "><strong>Know More</strong></button>
			</div>
			
		</section> <!-- End Our Works Section -->
		
		
		
		<!-- ======= Future Vision Section ======= -->
		
		</section> <!-- End Future Vision Section --> 
		
		
		<!-- ======= About Us Section ======= -->
		<section id="about">
			<div class="container" >
				<header class="section-header" class="col-lg-12 col-md-4 col-sm-4 col-12 p-3">
					<section class="about-section p-2" >
						<center>
							<h2 class="p-2" style=" color:#3498DB; font-family: 'Caveat', cursive; font-size:60px "><strong>About Us</strong></h2>
						</center>
							
							<div class="row justify-content-center"  style="background-color:; ">
								
								<div id="logo" class="col-lg-4 col-md-6 col-sm-6 col-12">
									<img src="<?php echo base_url(); ?>public/img/Aastha_Logo.jpg"  width="40%"  class="align-self-center rounded-circle" alt="responsive image">
								</div>
								<div class="col-lg-8 col-md-6 col-sm-6 col-12">
									<h2 class="effect">How We Started Our Aastha Group<span>&#63;</span></h2>
									<p style="font-family: 'Cormorant Garamond', serif; font-size:2vh"><em>
									"The Journey of ASTHA was started on the 15th August 2019, 73rd Independence Day with a vision to serve the needy children and fulfill their challenging & struggled Childhood with a little joy"
									<br>
									"ASTHA is a self-dependent charity group, fully Controlled by a few numbers of dedicated enthusiastic student team"
									<br><br>
									It is not a Non Governmental Organization (NGO) 
									</em></p>
								</div>
							</div>
						
						
					</section>
				
				</header>
				<div style="font-family:Comic Sans MS">
				  
					<div class="row  justify-content-center">
						<div class="col-lg-3 col-md-6 col-sm-6 col-12 p-2">
							<!--Carousel Wrapper-->
							<div id="carousel-example-2" class="carousel slide carousel-fade" >
							  <!--Indicators-->
							  <ol class="carousel-indicators" style="background-color:#1C2833">
								<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-2" data-slide-to="1"></li>
								<li data-target="#carousel-example-2" data-slide-to="2"></li>
							  </ol>
							  <!--/.Indicators-->
							  <!--Slides-->
							  <div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<!-- Card Dark -->
									<div class="card" data-aos="flip-up">

									  <!-- Card image -->
										<div class="view overlay">
											<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2821%29.jpg"
											  alt="Card image cap">
											
										</div>

									  <!-- Card content -->
										<div class="card-body white-text rounded-bottom" style="background-color:none">
											<!-- Title -->
											<h4 class="card-title" style="color:#E74C3C">OUR Mission</h4>
											<hr class="hr-light" style="background-color:#A0A0A0">
											<!-- Text -->
											<p class="card-text mb-4">Some quick example text to build on the card title and make up the bulk
											  of the card's content.</p>
										</div>
									</div>
									<!-- Card Dark -->
								</div>
								<div class="carousel-item">
									<!-- Card Dark -->
									<div class="card" data-aos="flip-up">

									  <!-- Card image -->
										<div class="view overlay">
											<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2821%29.jpg"
											  alt="Card image cap">
											
										</div>

									  <!-- Card content -->
										<div class="card-body white-text rounded-bottom">
											<!-- Title -->
											<h4 class="card-title" style="color:#E74C3C">Our Vision</h4>
											<hr class="hr-light" style="background-color:#A0A0A0">
											<!-- Text -->
											<p class="card-text mb-4">Some quick example text to build on the card title and make up the bulk
											  of the card's content.</p>
										</div>
									</div>
									<!-- Card Dark -->
								</div>
								<div class="carousel-item">
									<!-- Card Dark -->
									<div class="card" data-aos="flip-up">

									  <!-- Card image -->
										<div class="view overlay">
											<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2821%29.jpg"
											  alt="Card image cap">
											
										</div>

									  <!-- Card content -->
										<div class="card-body white-text rounded-bottom"">
											<!-- Title -->
											<h4 class="card-title" style="color:#E74C3C">Our Future Vision</h4>
											<hr class="hr-light" style="background-color:#A0A0A0">
											<!-- Text -->
											<p class="card-text mb-4">Some quick example text to build on the card title and make up the bulk
											  of the card's content.</p>
										</div>
									</div>
									<!-- Card Dark -->
								</div>
							  </div>
							  <!--/.Slides-->
							  <!--Controls-->
							  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
								<span style="color:#28B463"><i class="fas fa-angle-left fa-2x"></i></span>
								<span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carousel-example-2"  role="button" data-slide="next">
								<span style="color:#28B463"><i class="fas fa-angle-right fa-2x"></i></span>
								<span class="sr-only">Next</span>
							  </a>
							  <!--/.Controls-->
							</div>
							<!--/.Carousel Wrapper-->
						</div>
						<div class="col-lg-8 col-md-6 col-sm-6 col-12 ">
						
							<div class="p-3" style="font-size:24px;">
								<span style="color:#CA1D0B" >MEET </span><span style="color:#1C2833">OUR </span><span style="color:#CA1D0B">FOUNDER</span>
							</div>
							<hr style="background:#E74C3C;max-width:80%; height:0.8px">
							
							<div class="row " style="padding-left:30px">
								<div class="col-lg-3 col-md-12 col-sm-12 col-12"  >
									<img src="<?php echo base_url(); ?>public/img/b1.png"  id="admin" class="rounded-circle" style="width:50%; " alt="responsive">
								</div>
								<div class="col-lg-8 col-md-12 col-sm-12 col-12"  >
									<p style="font-size:2vh; font-family: 'Bad Script', cursive;">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				  
					
	<!--				
				<div >
					<div style="font-size:24px;">
						<span style="color:#1C2833">OUR </span><span style="color:#CA1D0B" >TEAM </span><span style="color:#CA1D0B">MEMBERs</span>
					</div>
					<hr style="background:#E74C3C;max-width:80%; height:0.8px;">
					
					<p style="text-align:center">.....+++++.....</p>
					
					<div class="row justify-content-center" >
						<div class="col-lg-4 col-md-6 col-sm-6 col-6" style="color:;">
							<p style="color:; font-size:2vh; text-decoration:Underline;text-underline-position:under;">Treasurers</p>
							<ul>
								<li>Atanu Roy</li>
								<li>Aritry Samaddar</li>
								<li>Biswajit Kundu</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6" style="color:; ">
							<p style="font-size:2vh; text-decoration:Underline;text-underline-position:under;">Editors</p>
							<ul>
								<li>Anirudha Roy</li>
								<li>Mainak Das</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-8" style="color:; ">
							<p style="font-size:2vh; text-decoration:Underline;text-underline-position:under;">Photography</p>
							<ul>
								<li>Soumojit Pramanik</li>
							</ul>
						</div>
					</div>
					
					<div class="container justify-content-center">
						<P style="color:; font-size:2vh; text-align:center; text-decoration:Underline;text-underline-position:under;">Event Planning Team</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6 col-sm-6 col-8" style="color:;">
							<ul>
								<li>Abhinandan Thakur</li>
								<li>Swayatta R. Mondal</li>
								<li>Dipanjan Mondal</li>
								<li>Suman Karmakar</li>
								
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6" style="color:; ">
							<ul>
								<li>Bappa Guha</li>
								<li>Priti Paul</li>
								<li>Shalu Roy</li>
								<li>Susmita Marandi</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6" style="color:; ">
							<ul>
								<li>Ayan Bag</li>
								<li>Tapas Saha</li>
								<li>Milan Murmu</li>
								<li>Kamini Haldar</li>
							</ul>
						</div>
					</div>
				
					<div class="justify-content-center">
						<P style="color:; font-size:2vh; text-align:center; text-decoration:Underline;text-underline-position:under;">Event Management Team</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6 col-sm-6 col-6" style="color:;">
							<ul>
								<li>Shaswata Das</li>
								<li>Shivani Raut</li>
								<li>Tinu Pal</li>
								<li>Sudhesna Lodh</li>
								<li>Debottom Barua</li>
								<li>Debojyoti Roy</li>
								
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6" style="color:; ">
							<ul>
								<li>Sayan Marik</li>
								<li>Debopom Dutta</li>
								<li>Brijesh Jha</li>
								<li>Mehuli Das</li>
								<li>Deblina Biswas</li>
								<li>Savana Khatun</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-8" style="color:; ">
							<ul>
								<li>Piyasa Chakroborty</li>
								<li>Subhamoy Chatterjee</li>
								<li>Subhajit Chakraborty</li>
								<li>Monalisha Chatterjee</li>
								<li>Bishop Bhandary</li>
								<li>Pritam Chakraborty</li>
							</ul>
						</div>
					</div>
				</div>
							-->

			</div>
				  
		</section> <!-- End About Us Section -->
				
		

		<?php $this->load->view('footer') ?>


		
		<script>
		
			// jQuery annimation
			 AOS.init({
			  duration: 1200,
			})
		</script>
		
		
		
		
	
	</body>
</html>