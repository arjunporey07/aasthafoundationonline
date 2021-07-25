<nav class="navbar  navbar-expand-lg navbar-light fixed-top" style="background:#fff;  ">
	<!-- Default switch -->
	<!-- <div class="custom-control custom-switch"  style="padding-left:5%">
	<input type="checkbox" class="custom-control-input" onclick="myFunction()" id="customSwitches">
	<label class="custom-control-label" for="customSwitches">Dark Mode</label>
	</div> -->
			
	<a class="navbar-brand" style="padding-left:10%" href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>public/img/Aastha_Logo.jpg"  width="" alt="responsive image"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left:5%">
		<ul class="nav navbar-nav ml-auto"  >
			<li class="nav-item active">
			<a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('index.php/Welcome/new_activity'); ?>">New Activity</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('index.php/Welcome/gallery'); ?>">Gallery</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('index.php/Welcome/our_works'); ?>">Our Works</a>
			</li>
			<!-- <li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('index.php/Welcome/article'); ?>">Article</a>
			</li> -->
			<!-- <li class="nav-item">
			<a class="nav-link" href="#">Future VIsion</a>
			</li> -->
			<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('index.php/Welcome/donate_us'); ?>">Donate Us</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('index.php/Welcome/memberlist_form'); ?>">Be A Member?</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Members</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<!-- <a class="nav-link" href="<?php echo base_url('index.php/Welcome/memberlist'); ?>">Team Members</a> -->
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalLoginForm">Admin Panel</a>
			</div>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('index.php/Welcome/about_us'); ?>">About Us</a>
			</li>
			<!-- <li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('index.php/Welcome/contact_us'); ?>">Feedback & Suggestions</a>
			</li> -->
			
		</ul>
	
	</div>	
</nav>
		
		
<style>
			.navbar-nav a{
				font-family:Arial;
				font-size:14px;
				text-transform:uppercase;
				font-weight:bold;
	
			}
	
			button:hover{
				transition: .5s;
				box-shadow: 5px 5px 5px grey;
			}

			@media only screen and (min-width: 367px) {
				.navbar-brand img{
					width:30px;
				}
			}
			@media only screen and (min-width: 1200px) {
				nav{
					margin:0%;
					padding:0%;
				  }
				  
				.navbar-brand{
					margin:0% ;
					padding:0%;
				  }
				.navbar-brand img{
					width:60px;
				}
			} 
		/*	.dark-mode {
				background-color: black;
				color: #2980B9;
			}
			.dark-mode .btn{
				color: #fff;
			}
			
			.dark-mode .far{
				color: #fff;
			} */
		</style>
		
	<!--	<script>
			function myFunction() {
			var element = document.body;
			element.classList.toggle("dark-mode");
			}
		</script> -->
		
		<!-- For A Panel LOg In Button -->
		
		<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		  aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<h4 class="modal-title  font-weight-bold">Sign in</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					
					<?php echo isset($error) ? $error : ''; ?>  
					<form method="POST" action="<?php echo base_url(); ?>index.php/Welcome/process">
					
						<div class="modal-body mx-3">
							<div class="md-form mb-5">
								<i class="fas fa-envelope prefix grey-text"></i>
								<input type="text" name="user" id="defaultForm-email" class="form-control validate" required>
								<label data-error="wrong" data-success="right" for="defaultForm-email">USER ID</label>
							</div>

							<div class="md-form mb-4">
							  <i class="fas fa-lock prefix grey-text"></i>
							  <input type="password" name="pass" id="defaultForm-pass" class="form-control validate" required>
							  <label data-error="wrong" data-success="right" for="defaultForm-pass">PASSWORD</label>
							</div>
						</div>
						
						<div class="modal-footer d-flex justify-content-center">
							<button class="btn btn-default" style="background-image: radial-gradient( circle 266px at 12% 29.3%,  
							rgba(58,219,154,0.93) 2%, rgba(153,228,208,1) 38.6%, rgba(142,246,219,0.82) 73.9%, rgba(253,255,238,1) 100.7% );">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>

