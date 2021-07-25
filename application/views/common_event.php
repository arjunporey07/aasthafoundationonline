<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
	<head>
		<?php $this->load->view('head') ?>
		<?php $this->load->view('bootstrap_cdn') ?>

		<link href="<?php echo base_url(); ?>public/css/activity.css" rel="stylesheet" type="text/css"/>
		
		<style>
			#banner_image{
				padding-top: 75px;
				padding-bottom: 50px;
				text-align: center;
				background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('<?php echo base_url(); ?>public/img/15(1).jpg') center;
				background-size:100% 100%;
				height:100%;
			}
			.responsive {
			  width: 100%;
			  height: auto;
			}

		</style>
	</head>
	<body>
		
		<?php $this->load->view('nav') ?>
		
		<div id="banner_image" alt="responsive image">
		<div class="middle" >
				
			</div>
			
			<div class="feedback-section">
				<div class="container">
					<div>
						<h1>শারদ শুভেচ্ছা</h1>
						<hr>
						<p id="demo" style="font-size:30px">শারদীয়া উপলক্ষে আপনাদের সকলকে জানাই শারদীয়ার প্রীতি শুভেচ্ছা ও অভিনন্দন।</p>
					</div>
					<div>
					<!--
					<p><em>Astha er 2nd event,,Keota etvata te Ami amer kichu friends der niye attend Kori,, 1st event e khub valo lage,r khub disciplined way te completion hoi😇 ••Then recently Naihati te kichu friends der niye ekta choto event Kori..
</em></p>
-->
						<img src="<?php echo base_url(); ?>public/img/Aastha(1).jpg" class="responsive" width="600" height="400" alt="responsive">
						
						<p>••Astha er 2nd event,,Keota etvata te Ami amer kichu friends der niye attend Kori,, 1st event e khub valo lage,r khub disciplined way te completion hoi😇 ••Then recently Naihati te kichu friends der niye ekta choto event Kori..

						Borabor ee baccha theke boro,, sober jnnoi kichu Korte valo lage,,r koreo esechi😇 Astha grp Tai add hoyer por sei Kora Tai ekta regularity eseche,,EI grp a achi bolei oder jnno alada Kore kichu vbte pari,, vabte valou lage,new ideas ele share kori😇

						Ei Group ter most important bepar Holo j keo demotivate korena,,ekhne sober mdhyei enthu ache and sabai bolte gele optimistic😇... Amer personally Astha er sthe kaj korte pare,,oder jnno kichu Kore nijeke lucky Mone hoi,,
						 Hope so future a amra ei kaj ta anek dur egiye niye jbo and spread korbo amader society te😇❤️. *#Long_Lives_Astha*</p>

					</div>
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
			
			<div id="set">
				<h3>Know More About This Event:<h3>
				<div class="link">
					<ul>
						<li><a href="https://www.facebook.com/groups/863723317347552/?ref=br_tf&epa=SEARCH_BOX"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>