<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>  
<html>  
<head>  
    <title></title>  
</head>  
<body>  
    Welcome <?php echo $this->session->userdata('user'); ?>   
<br>  
    <?php echo anchor('w/logout', 'Logout'); ?>  
  <center>
								<h2 class="p-2" style="background-color:#E8E8E8;">(Conformation Guideline For Admin/Moderator)</h2>
							</center>
								
								<div class="media p-1" style="background-color:#E8E8E899;">
									<img src="<?php echo base_url(); ?>public/img/Aastha_Logo.jpg"  width="20%"  class="align-self-center rounded-circle" alt="responsive image">
									<div class="media-body">
										<center>
											<P><Strong><em>Dear Admin/MOderator,<em></strong><P>
											<p>.....<p>
										</center>
									</div>
								</div>
  
</body>  
</html>  