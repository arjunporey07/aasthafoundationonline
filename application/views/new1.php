<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>AAstha</title>
		
		<style type="text/css">
		body{
    width: 100%;
    height: 100%;
    margin: 0;
}
#text{
	color:#58D68D;
	font-size:4vw;
	text-transform:center;
	animation:type 2.8s infinite linear;
	overflow: hidden;
	white-space: nowrap;
	font-family:Consolas;
	border-right: none;
	overflow: hidden;
	width: 19ch;
	
}
@keyframes type {
	0% {
      width: 0ch;
      border-left: 4px solid #F4D03F;
    }
    70% {
      width: 24ch;
      border-right: 4px solid #F4D03F;
    }
}
#banner_image{
	padding-top: 10%;
	padding-bottom: 10%;
	text-align: center;
	color: #f8f8f8;
	background: url('<?php echo base_url(); ?>public/img/intro-bg_1.jpg') no-repeat center center;
	height:100vh;
	background-size:100% 100%;
}
.inner-banner-image{
	padding-top: 12%;
	width:80%;
	margin:auto;
 }
.banner_content{
	position: relative;
	padding-top: 6%;
	padding-bottom: 6%;
	margin-top: 12%;
	margin-bottom: 12%;
	background-color: rgba(0, 0, 0, 0.7);
	max-width: 660px; 
}
 




.footer{
	padding: 10px 0;
	background-color: ;
	color:#9d9d9d;
	left:0;
	position:fixed;
	bottom: 0;
	width: 100%;
	}
		</style>


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="fox.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-toggler" href="#"><img src="<?php echo base_url(); ?>public/img/Aastha_Logo.jpg?>" width="50" alt="responsive image"></a>
                </div>
				<div>
                    <ul class="nav navbar-nav navbar-right">
						<li><a href="Memberlist.html" target="_blank"><span class="glyphicon glyphicon-user"></span> Article</a></li>
                        <li><a href="Login.html" target="_blank"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						<li><a href="Signup.html" target="_blank"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a href="Memberlist.html" target="_blank"><span class="glyphicon glyphicon-user"></span> Memberlist</a></li>
						<li><a href="Memberlist.html" target="_blank"><span class="glyphicon glyphicon-user"></span> Contact Us</a></li>
						<li><a href="Memberlist.html" target="_blank"><span class="glyphicon glyphicon-user"></span> About Us</a></li>
                    </ul>
				</div>
			</div>
		</div>
		<div id="banner_image" alt="responsive image">
		<center>
			<div>
				<p id="text"><strong><em>Welcome To | AASTHA.....</em></strong></p>
			</div>
			<div class="container" >
				<div class="banner_content">
					<a href="Activity.html" target="_blank" class="btn btn-danger btn-lg active">Activity</a>
				</div>
			</div>
		</center>
		</div>
		<footer class="footer">
		<center>
		<div class="container">
			<p>Copyright © Aastha. Social Help Organization | Contact Us: +91 90000 00000</p>
		</div>
		</center>
		</footer>	
    </body>
</html>






@-webkit-keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/* #banner_image{
	
	padding-top: 75px;
	padding-bottom: 50px;
	text-align: center;
	color: #f8f8f8;
	background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(<?php echo base_url(); ?>public/img/Aastha_Logo.jpg?>) no-repeat center;
	
	height:100vh;
	background-size:100% 100%;
} */
#text{
	color:#58D68D;
	font-size:3vw;
	text-transform:center;
	animation:type 2.8s infinite linear;
	overflow: hidden;
	white-space: nowrap;
	font-family:Consolas;
	border-right: none;
	overflow: hidden;
	width: 19ch;
	
}
@keyframes type {
	0% {
      width: 0ch;
      border-left: 4px solid #F4D03F;
    }
    70% {
      width: 24ch;
      border-right: 4px solid #F4D03F;
    }
}
.inner-banner-image{
	padding-top: 12%;
	width:60%;
	margin:auto;
 }
.banner_content{
	position: relative;
	padding-top: 6%;
	padding-bottom: 6%;
	margin-top: 12%;
	margin-bottom: 12%;
	background-color: rgba(0, 0, 0, 0.6);
	max-height:50px;
	
	
}

.btn-view{
	display: inline-block;
	font-weight:lighter;
	text-align:center;
	text-decoration:none;
	text-transform:uppercase;
	color:#f8f8f8;
	border:2px solid #8E44AD;
	border-radius: 200px;
	transition: background-color: 0.2s, border: 0.2s, color: 0.2s;
	background-color:transparent;
}



.link ul{
	
	padding-bottom:10%;
	display:flex;
	position:absolute;'
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
}

.link ul li{
	list-style:none;
}
.link ul li a{
	width:60px;
	height:60px;
	background:#fff;
	text-align:center;
	line-height:55px;
	font-size:26px;
	margin:0 10px;
	display:block;
	border-radius:50%;
	position:relative;
	overflow:hidden;
	border:3px solid #fff;
	z-index:1;
}
.link ul li a .fab{
	color:#fff;
	position:relative;
	color:#262626;
	transition: .5s;
}
.link ul li a:hover .fab{
	transform:rotateY(360deg);
}
.link ul li a:before{
	content:'';
	position:absolute;
	top:100%;
	left:0;
	width:100%;
	height:100%;
	background:#f00;
	transition:.5s;
	z-index:2;
	
}
.link ul li a:hover:before{
	top:0%;
}
.link ul li:nth-child(1) a:before
{
	background:#3b5999;
}
.link ul li:nth-child(2) a:before
{
	background:#55acee;
}
.link ul li:nth-child(3) a:before
{
	background:#dd4b39;
}
.link ul li:nth-child(4) a:before
{
	background:#e4405f;
}




<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
		<link href="<?php echo base_url(); ?>public/css/activity.css" rel="stylesheet" type="text/css"/>
		
		<style>
			#banner_image{
				padding-top: 75px;
				padding-bottom: 50px;
				text-align: center;
				background:none;
				background-size:100% 100%;
				height:100%;
			}
		
.feedback-section .container{
	width:100%
	margin:auto;
	overflow:hidden;
}

		</style>
	</head>
	<body>
		
		<?php $this->load->view('nav') ?>
		
		<div id="banner_image" alt="responsive image">
			<!--
			<div class="container">
				<center>
					<div class="banner_content w-100" style="margin-top:5%">
						<div>
							<p id="text"><strong><em>Welcome To | AASTHA.....</em></strong></p>
						</div>
					</div>
				</center>
			</div>
			-->
			
			
			<div class="feedback-section">
				<div class="container" style="min-width:100%">
					<div>
						<h1>COMING SOON</h1>
						<hr>
						<p id="demo" style="font-size:30px"></p>
						<p id="switch" style="font-size:30px"></p>
						
						
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-4 col-sm-6 col-6 p-1">
							<img src="<?php echo base_url(); ?>public/upload/our_works_img/<?php echo (!empty($our_works['our_works_img'])?$our_works['our_works_img']:'th1.jpg')?>" class="responsive" style="height:400px; width:400px" alt="responsive">
						</div>
						
						<div class="col-lg-6 col-md-4 col-sm-6 col-6 p-1">
							<h2>Feedback Us</h2>
							<p>Help Us To Put Your Own OPinion Or Any Query</p>
							<div class="feedback-form">
								<div>
									<form>
										<input type="text" placeholder="Name" required>
										<input type="Email" placeholder="Email" required>
										<textarea type="message" placeholder="Message" required></textarea>
										<button class="submit">Let's Talk</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div id="set">
				<h3>Know More About This Event:<h3>
				<div class="link">
					<ul>
						<li><a href="https://www.facebook.com/groups/863723317347552/?ref=br_tf&epa=SEARCH_BOX"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<script>
		// Set the date we're counting down to
		var countDownDate = new Date("<?php echo $our_works['our_works_dt']; ?>").getTime();

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
			document.getElementById("demo").innerHTML = "EXPIRED";
		  }
		}, 1000);
		</script>

		
		
	</body>
</html>






<div class="col-lg-3 col-md-4 col-sm-4 col-12 p-3">
						<div class="card shadow"  >
							<div class="card-body" style="padding-top:0px; padding-bottom:0px">
								
									<div class="inner p-2" id="bg-img">
										<a href="<?php echo base_url(); ?>public/upload/memberlist/<?php echo (!empty($row['member_img'])?$row['member_img']:'Arjun.jpg')?>">
											<img src="<?php echo base_url(); ?>public/upload/memberlist/<?php echo (!empty($row['member_img'])?$row['member_img']:'Arjun.jpg')?>" alt="John Doe" class="rounded-circle" style="width:200px;">
										</a>
									</div>
									<div class="media-body p-2" style="border:1.2px solid">
										<h2><?php echo $row['member_name']?></h2>
										<hr style="background-color:#A0A0A0">
										<small><i><?php echo substr($row['member_designation'],0,100); ?></i></small>
										<p>A Formal Group <?php echo substr($row['member_position'],0,100); ?> Of Aastha</p>
										<p><?php echo substr($row['member_quote'],0,100); ?></p>
										<div class="link" style="float:left">
											<p class="btn" style="background:#3b5999" href="#"><i class="fab fa-facebook" style="color:#fff" aria-hidden="true"></i></p>
											<p class="btn" style="background:#55acee" href="#"><i class="fab fa-twitter" style="color:#fff" aria-hidden="true"></i></p>
											<p class="btn" style="background:#e4405f" href="#"><i class="fab fa-instagram" style="color:#fff" aria-hidden="true"></i></p>
										</div>
									</div>
								
							</div>
						</div>
