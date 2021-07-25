<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
        
    </head>
<body>
    <!-- End Fact_Form Section -->
    <section id="facts_form">
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
			
		</section>
</body>
</html>