<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>  
<html>  
<head>  
    <title>Aastha</title>  
</head>  
<body>
	 Welcome <?php echo $this->session->userdata('user'); ?>   
	<br>  
		<a href="<?php echo base_url('index.php/Welcome/logout'); ?>">logout</a>
	  
	  
</body>  
</html>  