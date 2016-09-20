<section class="parallax-window parallax_img1" id="short" type="image" data-parallax="scroll" >
	
	<div class="parallax-content">
		<div id="sub_content">
			 <h1><?php echo $h1?></h1>
			 <?php if (!empty($sub_text)):?>
			<p><i class="ion-ios-location"></i> <?php echo $sub_text?></p>
			<?php endif;?>
			
			<?php if (!empty($contact_phone)):?>
			<p class="text-small"> 
			  <span class="relative"><i class="ion-iphone"></i></span>
			  <?php echo $contact_phone?>
			</p>
			<?php endif;?>
			
			<?php if (!empty($contact_email)):?>
			<p class="text-small">
			  <span class="relative"><i class="ion-email"></i></span>
			  <?php echo $contact_email?>
			</p>
			<?php endif;?>
		</div><!-- End sub_content -->
	</div><!-- End subheader -->
   
</section><!-- End section -->


