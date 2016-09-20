



	
	 <?php

       //~ dump($list['list']); exit;
        if (is_array($list['list']) && count($list['list'])>=1){
        foreach ($list['list'] as $val):
		
		$merchant_id=$val['merchant_id'];
		$ratings=Yii::app()->functions->getRatings($merchant_id);   
		$merchant_delivery_distance=getOption($merchant_id,'merchant_delivery_miles');
		$distance_type='';
		$merchant_address = $val['merchant_address'];
		
		/*fallback*/
		if ( empty($val['latitude'])){
			if ($lat_res=Yii::app()->functions->geodecodeAddress($merchant_address)){        
				$val['latitude']=$lat_res['lat'];
				$val['lontitude']=$lat_res['long'];
			} 
		}
		?>
		<div id="section-browse">
			<div class="strip_list wow fadeIn" data-wow-delay="0.1s"> <!-- @K. -->
				<?php if ( $val['is_sponsored']==2):?>
				<div class="ribbon_1">
					<?=t("Popular");?>
				</div>
				<?php endif;?>
				<?php if ($offer=FunctionsV3::getOffersByMerchant($merchant_id)):?>
				   <div class="ribbon-offer"><span><?php echo $offer;?></span></div>
				<?php endif;?>
				<div class="row">
					<div class="col-md-9 col-sm-9">
						<div class="desc">
							<div class="thumb_strip">
								<a href="<?php echo Yii::app()->createUrl('store/menu/merchant/'.$val['restaurant_slug'])?>"><img src="<?php echo FunctionsV3::getMerchantLogo($merchant_id);?>" alt=""></a>
							</div>
<!--
							<div class="rating">
								<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
							</div>
-->
						 
						 <div class="mytable">
							 <div class="mycol">
								<div class="rating-stars" data-score="<?php echo $ratings['ratings']?>"></div>   
							 </div>
							 <div class="mycol">
								<p><?php echo $ratings['votes']." ".t("Reviews")?></p>
							 </div>
							 <div class="mycol">
								<?php echo FunctionsV3::merchantOpenTag($merchant_id)?>                
							 </div>		         		         		         
						  </div> <!--mytable-->
							 
							<h3><?php echo $val['restaurant_name']?></h3>
							<div class="type">
								<?php //echo FunctionsV3::displayCuisine($val['restaurant_slug']);?>
								 <?php echo FunctionsV3::displayCuisine($val['cuisine']);?>
							</div>
							<div class="location">
								<?php echo $merchant_address;?>. <span class="opening">Opens at 17:00.</span> <?php echo t("Minimum Order").": ".FunctionsV3::prettyPrice($val['minimum_order'])?>
							</div>
							<!--Delivery & Take away -->
								<?php echo FunctionsV3::displayServicesList($val['service'])?>
							<!--End  Delivery & Take away -->
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="go_to">
							<div>
								<a href="<?php echo Yii::app()->createUrl('store/menu/merchant/'.$val['restaurant_slug'])?>" class="btn_1">View Menu</a>
							</div>
						</div>
					</div>
				</div><!-- End row-->
			</div><!-- End strip_list-->
            <?php endforeach;?>
<!--
            <a href="#0" class="load_more_bt wow fadeIn search-result-loader" data-wow-delay="0.2s"><?php echo t("Loading more restaurant...")?></a>  
-->
			<div class="search-result-loader">
				<i></i>
				<p><?php echo  t("Loading more restaurant...")?></p>
			 </div>
			 <?php }  else echo '<p class="text-danger">'.t("No restaurant found").'</p>';?>
			 </div>

