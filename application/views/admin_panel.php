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
				background-image: ;
				background-size:100% 100%;
			}
			body {
  padding-bottom: 30px;
  position: relative;
  min-height: 100%;
}

a {
  transition: background 0.2s, color 0.2s;
}
a:hover,
a:focus {
  text-decoration: none;
}

#wrapper {
  padding-left: 0;
  transition: all 0.5s ease;
  position: relative;
}

#sidebar-wrapper {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 0;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  overflow-x: hidden;
  background: #222;
  transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
  width: 250px;
}

.sidebar-brand {
  position: absolute;
  top: 0;
  width: 250px;
  text-align: center;
  padding: 20px 0;
}
.sidebar-brand h2 {
  margin: 0;
  font-weight: 600;
  font-size: 24px;
  color: #fff;
}

.sidebar-nav {
  position: absolute;
  top: 75px;
  left: 75px;
  width: 250px;
  margin: 0;
  padding: 0;
  list-style: none;
}
.sidebar-nav > li {
  text-indent: 10px;
  line-height: 42px;
}
.sidebar-nav > li a {
  display: block;
  text-decoration: none;
  color: #757575;
  font-weight: 600;
  font-size: 18px;
}
.sidebar-nav > li > a:hover,
.sidebar-nav > li.active > a {
  text-decoration: none;
  color: #fff;
  background: #F8BE12;
}
.sidebar-nav > li > a i.fa {
  font-size: 24px;
  width: 60px;
}

#navbar-wrapper {
    width: 100%;
    position: absolute;
    z-index: 2;
}
#wrapper.toggled #navbar-wrapper {
    position: absolute;
    margin-right: -250px;
}
#navbar-wrapper .navbar {
  border-width: 0 0 0 0;
  background-color: #eee;
  font-size: 24px;
  margin-bottom: 0;
  border-radius: 0;
}
#navbar-wrapper .navbar a {
  color: #757575;
}
#navbar-wrapper .navbar a:hover {
  color: #F8BE12;
}

#content-wrapper {
  width: 100%;
  position: absolute;
  padding: 15px;
  top: 100px;
}
#wrapper.toggled #content-wrapper {
  position: absolute;
  margin-right: -250px;
}

@media (min-width: 992px) {
  #wrapper {
    padding-left: 250px;
  }
  
  #wrapper.toggled {
    padding-left: 60px;
  }

  #sidebar-wrapper {
    width: 250px;
  }
  
  #wrapper.toggled #sidebar-wrapper {
    width: 60px;
  }
  
  #wrapper.toggled #navbar-wrapper {
    position: absolute;
    margin-right: -190px;
}
  
  #wrapper.toggled #content-wrapper {
    position: absolute;
    margin-right: -190px;
  }

  #navbar-wrapper {
    position: relative;
  }

  #wrapper.toggled {
    padding-left: 60px;
  }

  #content-wrapper {
    position: relative;
    top: 0;
  }

  #wrapper.toggled #navbar-wrapper,
  #wrapper.toggled #content-wrapper {
    position: relative;
    margin-right: 60px;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  #wrapper {
    padding-left: 60px;
  }

  #sidebar-wrapper {
    width: 60px;
  }
  
#wrapper.toggled #navbar-wrapper {
    position: absolute;
    margin-right: -250px;
}
  
  #wrapper.toggled #content-wrapper {
    position: absolute;
    margin-right: -250px;
  }

  #navbar-wrapper {
    position: relative;
  }

  #wrapper.toggled {
    padding-left: 250px;
  }

  #content-wrapper {
    position: relative;
    top: 0;
  }

  #wrapper.toggled #navbar-wrapper,
  #wrapper.toggled #content-wrapper {
    position: relative;
    margin-right: 250px;
  }
}

@media (max-width: 767px) {
  #wrapper {
    padding-left: 0;
  }

  #sidebar-wrapper {
    width: 0;
  }

  #wrapper.toggled #sidebar-wrapper {
    width: 250px;
  }
  #wrapper.toggled #navbar-wrapper {
    position: absolute;
    margin-right: -250px;
  }

  #wrapper.toggled #content-wrapper {
    position: absolute;
    margin-right: -250px;
  }

  #navbar-wrapper {
    position: relative;
  }

  #wrapper.toggled {
    padding-left: 250px;
  }

  #content-wrapper {
    position: relative;
    top: 0;
  }

  #wrapper.toggled #navbar-wrapper,
  #wrapper.toggled #content-wrapper {
    position: relative;
    margin-right: 250px;
  }
}

/* Back to top button */
.back-to-top {
  position: fixed;
  display: none;
  background: #18d26e;
  color: #fff;
  width: 44px;
  height: 44px;
  text-align: center;
  line-height: 1;
  font-size: 16px;
  border-radius: 50%;
  right: 15px;
  bottom: 15px;
  transition: background 0.5s;
  z-index: 11;
}
input{
	background: #fff;
}
.back-to-top i {
  padding-top: 12px;
  color: #fff;
}

@media (max-width: 768px) {
  .back-to-top {
    bottom: 15px;
  }
}

		</style>
	</head>
	<body>
		
		<div id="wrapper">

			<aside id="sidebar-wrapper">
				<div class="sidebar-brand">
					<h2>Logo</h2>
				</div>
				<ul class="sidebar-nav">
					<li class="active">
						<a href="#"><i class="fa fa-home"></i>Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Members</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<!-- <a class="nav-link" href="<?php echo base_url('index.php/Welcome/memberlist'); ?>">Team Members</a> -->
							<div class="dropdown-divider"></div>
							<a href="#fact">Fact Form</a>
							<a href="#new_activity">New Activity Form</a>
							<a href="#our_works">Our Works Form</a>
							<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('index.php/Welcome/contact_us'); ?>">Contact Us</a>
			</li>
						</div>
					</li>
					
					<?php $this->load->view('logout') ?>
				</ul>
			</aside>

			<div id="navbar-wrapper">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
				</div>
				</div>
			</nav>
			</div>

			<section id="content-wrapper">
				<div class="row">
				<div class="col-lg-12">
					<h2 class="content-title">Test</h2>
					<p>Welcome <?php echo $this->session->userdata('user'); ?></p>
					<p>How are You <?php echo $this->session->userdata('user'); ?> &#63;</p>

					
				</div>
				</div>
			</section>

		</div>

		<hr style="background:#E74C3C;max-width:80%; height:0.8px;">
		<!-- For Fact Panel-->
		<div class="tab-pane" id="fact" role="tabpanel" style="padding-top:30%" >
			<div class="container">

			<header class="section-header p-2">
			<center>
				<h2 class="p-2" style="background-color:#E8E8E8; color:#18d26e; font-family:Times Roman,Time"><strong>FACT's FORM</strong></h2>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
			</center>
			</header>
			<div>
				<!-- Material form subscription -->
				<div class="card">

				<h5 class="card-header info-color white-text text-center py-4">
					<strong>
						<p>
							<a href="<?php echo base_url();?>" target="_blank">See the last Update</a>
						</p>
					</strong>
				</h5>

				<!--Card content-->
				<div class="card-body px-lg-5">

					<!-- Form -->
					<form method="POST" action="<?php echo base_url(); ?>index.php/Welcome/save_fact_form">
					
						<div class="modal-body mx-3">
							<div class="md-form mb-5">
								<i class="fas fa-user-shield"></i>
								<input type="text" name="active_member"  class="form-control validate" required>
								<label >ACTIVE MEMBERS</label>
							</div>

							<div class="md-form mb-5">
								<i class="fas fa-praying-hands"></i>
								<input type="text" name="work_done"  class="form-control validate" required>
								<label >WORK DONE</label>
							</div>

							<div class="md-form mb-5">
								<i class="fa fa-users" aria-hidden="true"></i>
								<input type="text" name="person"  class="form-control validate" required>
								<label >PERSON APPRICIATE</label>
							</div>
						</div>
						
						<div class="modal-footer d-flex justify-content-center">
							<button class="btn btn-default" style="background-image: radial-gradient( circle 266px at 12% 29.3%,  
							rgba(58,219,154,0.93) 2%, rgba(153,228,208,1) 38.6%, rgba(142,246,219,0.82) 73.9%, rgba(253,255,238,1) 100.7% );">SUBMIT</button>
						</div>
					</form>
					<!-- Form -->

				</div>

				</div>
				<!-- Material form subscription -->
			</div>

			</div>

			</section> <!-- End Fact_Form Section -->
			<br>
			<section id="facts">
			<div class="container">

				<header class="section-header p-2">
				<center>
					<h2 class="p-2" style="background-color:#E8E8E8; color:#18d26e; font-family:Times Roman,Time"><strong>FACTs</strong></h2>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
				</center>
				</header>

				<div class="row " style="background-color:#E8E8E899;">
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

		</div>
		<!-- For New Activity Panel-->
		<div class="tab-pane" id="new_activity" role="tabpanel" style="padding-top:3% " >
			<div class="container">
				<header class="section-header p-2">
					<center>
						<h2 class="p-2" style="background-color:#E8E8E8; color:#18d26e; font-family:Times Roman,Time"><strong>Event Details Form</strong></h2>
						<p>....... <a href="#"></a>...</p>
					</center>
				</header>
			</div>
			<div class="container justify-content-center">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<form method="POST" action="<?php echo base_url(); ?>index.php/Welcome/save_new_activity"  enctype="multipart/form-data">
					
						<div class="modal-body  w-100" >
							<div class="md-form mb-4">
								<label><strong>New Event Title<b style="color:red">*</b></strong></label>
								<input type="text" name="new_activity_title" placeholder="New Event/Activity Title" class="form-control  validate" required>
							</div>
							<div class="md-form mb-4" >
								<label><strong>New Event Descriptions<b style="color:red">*</b></strong></label>
								<textarea class="md-textarea form-control" name="new_activity_details" placeholder="Within 100 Letters" required></textarea>
							</div>
							<div class="md-form mb-4">
								<label><strong>New Event Thumbnail / Poster<b style="color:red">*</b></strong></label>
								<input type="file" name="new_activity_img"  class="form-control validate " required>	
							</div>
							<div class="md-form mb-4" >
								<label><strong>New Event Locations</strong></label>
								<textarea class="md-textarea form-control" name="new_activity_location" placeholder="Location Link"></textarea>
							</div>
							<div class="md-form mb-4" >
								<label><strong>Route</strong></label>
								<textarea class="md-textarea form-control" name="new_activity_route" placeholder="Route"></textarea>
							</div>
							<div class="md-form mb-4">
								<label><strong>New Event Date And Time<b style="color:red">*</b></strong></label>
								<input placeholder="Date and Time" name="new_activity_dt" type="datetime-local" data-open="picker2" class="form-control date-time picker-opener" required>	
							</div>

						</div>

						<div class="modal-footer d-flex justify-content-center">
							<button id="submit_button" class="btn btn-default" style="background-color: #2ECC71">SUBMIT</button>
						</div>

					</form>
				</div>
			</div>

		</div>
		<!-- For Our Work Panel-->
		<div class="tab-pane" id="our_works" role="tabpanel" style="padding-top:3% " >
			<div class="container">
				<header class="section-header p-2">
					<center>
						<h2 class="p-2" style="background-color:#E8E8E8; color:#18d26e; font-family:Times Roman,Time"><strong>Our Works Form</strong></h2>
						<p>....... <a href="#"></a>...</p>
					</center>
				</header>
			</div>

			<div class="container justify-content-center">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<form method="POST" action="<?php echo base_url(); ?>index.php/Welcome/save_our"  enctype="multipart/form-data">
					
						<div class="modal-body  w-100" >
							<div class="md-form mb-4">
								<label><strong>Event Title<b style="color:red">*</b></strong></label>
								<input type="text" name="our_works_title" placeholder="Enter Event Name" class="form-control  validate" required>
							</div>
							<div class="md-form mb-4" >
								<label><strong>Event Descriptions<b style="color:red">*</b></strong></label>
								<textarea class="md-textarea form-control" name="our_works_desc" placeholder="Within 100 Characters" required></textarea>
							</div>
							<div class="md-form mb-4">
								<label><strong>Event Thumbnail / Poster<b style="color:red">*</b></strong></label>
								<input type="file" name="our_works_img"  class="form-control validate " required>	
							</div>
							<div class="md-form mb-4">
								<label><strong>Event Date And Time<b style="color:red">*</b></strong></label>
								<input placeholder="Date and Time" name="our_works_dt" type="datetime-local" data-open="picker2" class="form-control date-time picker-opener" required>	
							</div>

							<div class="md-form mb-4">
								<label><strong>Event Details Image<b style="color:red">*</b></strong></label>
								<input type="file" name="our_works_details_img[]" placeholder="Event Details Image" multiple  class="form-control validate" required>	
							</div>
							<div class="md-form mb-4">
								<label><strong>Event Video Link<b style="color:red">*</b></strong></label>
								<input type="text" name="our_works_details_video" placeholder="Enter Video Link" class="form-control  validate">
							</div>
							<div class="md-form mb-4">
								<label><strong>Event Experience<b style="color:red">*</b></strong></label>
								<input type="file" name="our_works_details_exp[]" placeholder="Event Experience" multiple  class="form-control validate">	
							</div>
							<div class="md-form mb-4">
							<select class="form-control" name="our_works_status" class="browser-default custom-select">
									<option value="">Event Status</option>
									<option value="active">Active</option>
									<option value="inactive">Inactive</option>
									<option value="deleted">Deleted</option>
								</select>
							</div>
							

						</div>

						<div class="modal-footer d-flex justify-content-center">
							<button id="submit_button" class="btn btn-default" style="background-color: #2ECC71">SUBMIT</button>
						</div>

					</form>
				</div>
			</div>

		</div>
		<!-- For Article Panel-->
		<div class="tab-pane" id="article" role="tabpanel" style="padding-top:3% " >
		
		</div>
		
		 <div>
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
         </div>

		<script>
			const $button  = document.querySelector('#sidebar-toggle');
			const $wrapper = document.querySelector('#wrapper');

			$button.addEventListener('click', (e) => {
			e.preventDefault();
			$wrapper.classList.toggle('toggled');
			});
		</script>

	<!-- Vendor JS Files -->
		<script src="<?php echo base_url(); ?>public/jquery/jquery.min.js"></script>

        <script src="<?php echo base_url(); ?>public/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>public/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>public/vendor/counterup/counterup.min.js"></script>

 
 <!-- Template Main JS File -->
 <script src="<?php echo base_url(); ?>public/js/aastha.js"></script>
		
		
	</body>
</html>