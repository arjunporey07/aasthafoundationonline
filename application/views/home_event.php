
		
		
			<div class="card-group justify-content-center">
				<?php 
					foreach($our_works_list as $i=>$row)
					{	
				?>
				<div class="col-lg-3 col-md-4 col-sm-4 col-12 p-3">
					<div class="card shadow">
						<div class="inner">
							<img src="<?php echo base_url(); ?>public/upload/our_works_img/<?php echo (!empty($row['our_works_img'])?$row['our_works_img']:'Aastha.jpg')?>" class="card-img-top" style="height:15rem" alt="card image cap">
						</div>
						<div class="card-body">
							<h5 class="card-title"><?php echo $row['our_works_title']?></h5>
							<p class="card-text"><?php echo substr($row['our_works_desc'],0,100); ?></p>
							<a href="<?php echo base_url('index.php/Welcome/our_works_details'); ?>" class="btn btn-primary">See More</a>
						</div>
					</div>
				</div>
				<?php } ?>	
			</div>