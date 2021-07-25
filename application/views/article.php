<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
		<link href="<?php echo base_url(); ?>public/css/article.css" rel="stylesheet" type="text/css"/>
		
		<style>
		.navbar{
			background:#000;
		}
			#background_image{
				padding-top: 75px;
				padding-bottom: 50px;
				text-align: center;
				background-image: linear-gradient( 138deg,  rgba(32,201,255,1) 36.7%, rgba(0,8,187,1) 84.4%, rgba(255,255,255,1) 119.7% ); center;
				background-size:100% 100%;
			}
			.banner_content:hover{background: url('<?php echo base_url(); ?>public/img/btn.jpg')  center;}
			
			.responsive {
				max-width: 100%;
				height: auto;
			}
			
		</style>
	</head>
	<body>
		
		<?php $this->load->view('nav') ?>
		<div id="background_image" alt="responsive image">
		
			
            <center>
                <div class="row container">
                    
                    <?php 
                        foreach($article_list as $i=>$row)
                        {	
                    ?>
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-2">
                        <div class="card shadow">
                            <div class="inner">
                                <img src="<?php echo base_url(); ?>public/upload/article/article_img/<?php echo (!empty($row['article_img'])?$row['article_img']:'Aastha_logo.jpg')?>"          class="card-img-top" style="height:15rem" alt="card image cap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['article_title']?></h5>
                                <p class="card-text"><?php echo substr($row['article_desc'],0,100); ?></p>
                                <a href="<?php echo base_url(); ?>public/upload/article/article_pdf/<?php echo $row['article_pdf']?>" class="btn btn-primary">Read</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </center>
		</div>
    
        <?php $this->load->view('footer') ?>

    </body>
</html>