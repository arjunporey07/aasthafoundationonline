	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		
		<link href="<?php echo base_url(); ?>public/css/footer.css" rel="stylesheet" type="text/css"/>
		
		<style>
		
#facts:before{
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  
}

#facts .container {
  position: relative;
 
}

#facts span {
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  font-size: 48px;
  display: block;
  color: #18d26e;
}

#facts .counters p {
  padding: 0;
  margin: 0 0 20px 0;
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  color: #111;
}

#facts .facts-img {
  text-align: center;
  padding-top: 30px;
  
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


/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #58D68DBF;
  padding: 16px 20px;
  border: none;
  border-radius:50px 50px;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 30%;
  right: 15px;
 
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
   
    max-width: 300px;
    padding: 10px;
    background-image: radial-gradient( circle 266px at 12% 29.3%,  rgba(58,219,154,0.93) 2%, rgba(153,228,208,1) 38.6%, rgba(142,246,219,0.82) 73.9%, rgba(253,255,238,1) 100.7% );
}

.form-container input {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
    resize: none;
    min-height: 10px;
  }
  
  /* When the textarea gets focus, do something */
  .form-container input:focus {
    background-color: #ddd;
    outline: none;
  }

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 00px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 16px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.inner{
	overflow:hidden;
}
.inner img{
	transition:all 1.5s ease;
}
.inner:hover img{
	transform: scale(1.5);
}	

#footer .copyright {
  text-align: center;
  padding: 5px;
}
#footer img {
  border:2px solid #13a456;
  border-radius: 50%;
}


		</style>
		
	</head>
	
	<body>
		
		
		<section>
      <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-info">
                    <div class="p-2">
                      <a href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>public/img/Aastha_Logo.jpg"  width="50" alt="responsive image" ></a>
                    </div>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                  </div>

                  <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url(); ?>">Home</a></li>
                      <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('index.php/Welcome/gallery'); ?>">Gallery</a></li>
                      <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('index.php/Welcome/our_works'); ?>">Our Works</a></li>
                      <li><i class="ion-ios-arrow-right"></i> <a href="#">Future VIsion</a></li>
                      <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('index.php/Welcome/donate_us'); ?>">Donate Us</a></li>
                      <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('index.php/Welcome/memberlist_form'); ?>">Be A Member?</a></li>
                      <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('index.php/Welcome/memberlist'); ?>">Team Members</a></li>
                      <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('index.php/Welcome/about_us'); ?>">About Us</a></li>
                    </ul>
                  </div>

                  <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                      <strong>Phone:</strong> +91 6291 811 695<br>
                      <strong>Email:</strong> asthafoundation@gmail.com<br>
                    </p>

                    <div class="social-links">
                      <a href="https://www.facebook.com/groups/863723317347552/?epa=SEARCH_BOX" class="facebook"><i class="fab fa-facebook"></i></a>
                      <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                      <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                    </div>

                  </div>

                  <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>

                   

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <h6 class="copyright">
            আস্থা  | Aastha Foundation &#169; 2021
          </h6>
        </div>

      </footer><!-- End Footer -->
			
		</section> <!-- End Footer Section -->
		
		<div>
			<a class="open-button" onclick="openForm()"><i class="far fa-comment-dots" aria-hidden="true" style="font-size:24px;"></i></a>
			<div class="chat-popup" id="myForm">
				<form action="<?php echo base_url(); ?>index.php/Welcome/save_message_box" class="form-container" method="POST" enctype="multipart/form-data">
					<button type="button" class="close" onclick="closeForm()" >
					  <span aria-hidden="true">&times;</span>
					</button>
					<h2>Tell Us...</h2>
          <hr>
          <h6>(<b style="color:red">*</b>) Marks Are Required Field.<h6>
					<label for="email"><b style="color:red">*</b><b>Your Email</b></label>
					<input placeholder="something@example.com" name="email" required >
					<label for="msg"><b style="color:red">*</b><b>Message(Mention Your Name)</b></label>
					<textarea placeholder="Your Name,
          Write Your Thought..." name="msg" required></textarea>
					<label for="file"><b>Choose Any Files/Photos(Optional)</b><br><h6>(jpg, png, pdf, docs etc valid files)</h6></label>
					<input type="file"  name="message_file[]" placeholder="Your files" multiple>
					<button type="submit" class="btn">Send</button>
          
				</form>
			</div>
		</div>

		<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
		<!-- Uncomment below i you want to use a preloader -->
		<!-- <div id="preloader"></div> -->
		

		<script>
			function openForm() {
			  document.getElementById("myForm").style.display = "block";
			}
			
			function closeForm() {
			  document.getElementById("myForm").style.display = "none";
			}
		</script>

	
<!-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> -->
<!-- or -->
<!-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script> -->




		<!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>public/jquery/jquery.min.js"></script>
 
  <script src="<?php echo base_url(); ?>public/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>public/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>public/vendor/counterup/counterup.min.js"></script>

  <!-- <script src="<?php echo base_url(); ?>public/vendor/php-email-form/validate.js"></script> -->
  <!-- <script src="<?php echo base_url(); ?>public/vendor/isotope-layout/isotope.pkgd.min.js"></script> -->
  <!-- <script src="<?php echo base_url(); ?>public/vendor/venobox/venobox.min.js"></script> -->
  <!-- <script src="<?php echo base_url(); ?>public/vendor/owl.carousel/owl.carousel.min.js"></script> -->
  <!-- <script src="<?php echo base_url(); ?>public/vendor/aos/aos.js"></script> -->

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>public/js/aastha.js"></script>
	
	</body>
</html>