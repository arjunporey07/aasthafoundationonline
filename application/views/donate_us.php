<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
		<link href="<?php echo base_url(); ?>public/css/donate_us.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
		
		<style>
		.navbar{
			background:#000;
		}
			#background_image{
				
				text-align: center;
				background-image: url('<?php echo base_url(); ?>public/img/donate_us.jpg');
				background-size:100% 100%;
			}
			.banner_content:hover{background: url('<?php echo base_url(); ?>public/img/btn.jpg')  center;}
		
			/* The Close Button */
			.close {
			  color: #aaaaaa;
			  float: right;
			  font-size: 28px;
			  font-weight: bold;
			}

			.close:hover,
			.close:focus {
			  color: #red;
			  text-decoration: none;
			  cursor: pointer;
			}
			.modal-lg{
				min-width:80%;
			}
		</style>
	</head>
	<body>
		
		<?php $this->load->view('nav') ?>
		<div id="background_image" alt="responsive image">
			 <!--Start Donate Us-->
		<section id="donate_us">
			<div class="container" style="max-width:90%;" >
				<header class="section-header" style="padding-top:80px" class="col-lg-12 col-md-4 col-sm-4 col-12 p-3">
					<section class="about-section p-2" >
                        <center>
                            <h2 class="p-2" style="background-color:#E8E8E8;">Donate Us</h2>
                        </center>
                        
                        <div>...</div>
					</section>
                </header>

                
                <div class="row justify-content-center" style="max-height:90%;">
                    <div>
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
					<!--Mask color-->
					<div class="row">
						<div class="col-lg-6 col-md-4 col-sm-6 col-12 p-2">
						<div class="view">
							<img class="d-block w-100" src="<?php echo base_url(); ?>public/img/intro_img/intro_2.jpg"
							style="max-height:40vh; display:block;" alt="responsive image">
						</div>
						</div>
						<div class="col-lg-6 col-md-4 col-sm-6 col-12 p-2">
							<div class="" style="font-family:'poppins'"><strong><em>
								<p style="font-size:20px; " >&ldquo;We make a living by what we get. We make a life by what we give.&rdquo;</p>
								<h3 class="h3-responsive"> &#9866; Winston S. Churchill</h3>
								</strong></em>
							</div>
						</div>
					</div>
					</div>
					<div class="carousel-item">
					<!--Mask color-->
					<div class="row">
						<div class="col-lg-6 col-md-4 col-sm-6 col-12 p-2">
						<div class="view">
							<img class="d-block w-100" src="<?php echo base_url(); ?>public/img/intro_img/intro_1.jpg"
							style="max-height:40vh; display:block;" alt="responsive image">
						</div>
						</div>
						<div class="col-lg-6 col-md-4 col-sm-6 col-12 p-2">
							<div class="" style="font-family:'poppins'"><strong><em>
								<p style="font-size:20px; " >&ldquo;We make a living by what we get. We make a life by what we give.&rdquo;</p>
								<h3 class="h3-responsive"> &#9866; Winston S. Churchill</h3>
								</strong></em>
							</div>
						</div>
					</div>
					</div>
					<div class="carousel-item">
					<!--Mask color-->
					<div class="row">
						<div class="col-lg-6 col-md-4 col-sm-6 col-12 p-2">
						<div class="view">
							<img class="d-block w-100" src="<?php echo base_url(); ?>public/img/intro_img/intro_7.jpg"
							style="max-height:40vh; display:block;" alt="responsive image">
						</div>
						</div>
						<div class="col-lg-6 col-md-4 col-sm-6 col-12 p-2">
							<div class="" style="font-family:'poppins'"><strong><em>
								<p style="font-size:20px; " >&ldquo;We make a living by what we get. We make a life by what we give.&rdquo;</p>
								<h3 class="h3-responsive"> &#9866; Winston S. Churchill</h3>
								</strong></em>
							</div>
						</div>
					</div>
					</div>
					<div class="carousel-item">
					<!--Mask color-->
					<div class="row">
						<div class="col-lg-6 col-md-4 col-sm-6 col-12 p-2">
						<div class="view">
							<img class="d-block w-100" src="<?php echo base_url(); ?>public/img/intro_img/intro_6.jpg"
							style="max-height:40vh; display:block;" alt="responsive image">
						</div>
						</div>
						<div class="col-lg-6 col-md-4 col-sm-6 col-12 p-2">
							<div class="" style="font-family:'poppins'"><strong><em>
								<p style="font-size:20px; " >&ldquo;We make a living by what we get. We make a life by what we give.&rdquo;</p>
								<h3 class="h3-responsive"> &#9866; Winston S. Churchill</h3>
								</strong></em>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
				  <!--Mask color-->
				  <div class="row">
					<div class="col-lg-6 col-md-4 col-sm-6 col-12 p-2">
					  <div class="view">
						<img class="d-block w-100" src="<?php echo base_url(); ?>public/img/intro_img/intro_3.jpg"
						  style="max-height:40vh; display:block;" alt="responsive image">
					  </div>
					</div>
					<div class="col-lg-6 col-md-4 col-sm-6 col-12 p-2">
						<div class="" style="font-family:'poppins'"><strong><em>
							<p style="font-size:20px; " >&ldquo;We make a living by what we get. We make a life by what we give.&rdquo;</p>
							<h3 class="h3-responsive"> &#9866; Winston S. Churchill</h3>
							</strong></em>
						</div>
					</div>
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
					<div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-3">
                                <div class="card" >
                                    <img class="card-img-top" src="<?php echo base_url(); ?>public/img/paytm.jpg" style="max-height: 300px;" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Paytm</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <button   data-toggle="modal" data-target=".bd-Paytm-modal-lg" class="btn btn-primary">Donate Us</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-3">
                                <div class="card" >
                                    <img class="card-img-top" src="<?php echo base_url(); ?>public/img/phonepe.jpg" style="max-height: 300px;" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">PhonePe</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <button   data-toggle="modal" data-target=".bd-PhonePe-modal-lg" id class="btn btn-primary">Donate Us</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-3">
                                <div class="card" >
                                    <img class="card-img-top" src="<?php echo base_url(); ?>public/img/googlepay.png" style="max-height: 300px;" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Google Pay</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <button   data-toggle="modal" data-target=".bd-GPay-modal-lg" class="btn btn-primary">Donate Us</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

               
                
				<!--For Paytm Modal-->
                <div class="modal fade bd-Paytm-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Header</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="card-group justify-content-center">
                                    <div class="col-lg-6 col-md-4 col-sm-4 col-12 p-3">
                                        <div class="card" >
                                            <img src="<?php echo base_url(); ?>public/img/paytm.jpg" style="height:400px; max-width:600px">
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-6 col-md-4 col-sm-4 col-12 p-3">
                                        <div class="card" >
                                            <img src="<?php echo base_url(); ?>public/img/QR_A.jpeg" style="height:400px; max-width:600px">
                                        </div>
                                    </div>
                            
                                    <div>
                                        <h1>Account Details</h1>
                                        <p>Account no: 12345678900<p>
                                        <p>IFSC Code: SBIN0012428<p>
                                        <p>Account Holder Name: Akash Mondal</p>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>	
				
				<!--For PhonePe Modal-->
                <div class="modal fade bd-PhonePe-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Header</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="card-group justify-content-center">
                                    <div class="col-lg-6 col-md-4 col-sm-4 col-12 p-3">
                                        <div class="card" >
                                            <img src="<?php echo base_url(); ?>public/img/phonepe.jpg" style="height:400px; max-width:600px">
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-6 col-md-4 col-sm-4 col-12 p-3">
                                        <div class="card" >
                                            <img src="<?php echo base_url(); ?>public/img/QR_A.jpeg" style="height:400px; max-width:600px">
                                        </div>
                                    </div>
                            
                                    <div>
                                        <h1>Account Details</h1>
                                        <p>Account no: 12345678900<p>
                                        <p>IFSC Code: SBIN0012428<p>
                                        <p>Account Holder Name: Akash Mondal</p>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>	
                
				<!--For Google Pay Modal-->
                <div class="modal fade bd-GPay-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Header</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="card-group justify-content-center">
                                    <div class="col-lg-6 col-md-4 col-sm-4 col-12 p-3">
                                        <div class="card" >
                                            <img src="<?php echo base_url(); ?>public/img/googlepay.png" style="height:400px; max-width:600px">
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-6 col-md-4 col-sm-4 col-12 p-3">
                                        <div class="card" >
                                            <img src="<?php echo base_url(); ?>public/img/QR_A.jpeg" style="height:400px; max-width:600px">
                                        </div>
                                    </div>
                            
                                    <div>
                                        <h1>Account Details</h1>
                                        <p>Account no: 12345678900<p>
                                        <p>IFSC Code: SBIN0012428<p>
                                        <p>Account Holder Name: Akash Mondal</p>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>	
									

            </div>
		</section> <!-- End Donate Us Section -->
		
  


<?php $this->load->view('footer') ?>
		
		
		
		
	</body>
</html>