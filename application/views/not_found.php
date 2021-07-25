<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
	</head>
	<body>
		<?php if($this->session->flashdata('message')){?>
  <div class="alert alert-primary">      
    <?php echo $this->session->flashdata('message')?>
  </div>
<?php } ?>
	</body>
</html>