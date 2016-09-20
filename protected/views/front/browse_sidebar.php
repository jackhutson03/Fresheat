		
<div class="col-md-3">
	<p>
		<a class="btn_map full-maps" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap"><?php echo t("View on map"); ?></a>
	</p>
	<div id="filters_col">
		<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><?php echo t("Filters"); ?><i class="icon-plus-1 pull-right"></i></a>
		<div class="collapse" id="collapseFilters">
			<div class="filter_type">
			<!--
				<h6><?php echo t("Distance"); ?></h6>
				<input type="text" id="range" value="" name="range" >
			-->
				<h6><?php echo t("cuisine"); ?></h6>
			<?php if ($theme_hide_cuisine<>2):?>
			<!--CUISINE SECTIONS-->	
			<?php if ( $list1=FunctionsV3::getCuisine() ): ?>
				<ul id="cuisine_filterul"> 						
					<li><label><input type="checkbox" class="icheck" id="chkall">All <small></small></label></li>
					<?php   $colorNo=1; $x=1;
							foreach ($list1 as $val): 	
					if($val['total']>0){	
					?>								
					<li>								
						<label>
						<input type="checkbox" class="icheck cuisine_check" id="cuisine_check_<?=$val['cuisine_id']?>" name="search_cuisine[]">

						<?php 
							$cuisine_json['cuisine_name_trans']=!empty($val['cuisine_name_trans'])?json_decode($val['cuisine_name_trans'],true):'';	 
							echo qTranslate($val['cuisine_name'],'cuisine_name',$cuisine_json);
							
								echo "<span>(".$val['total'].")</span>";
							
						?>
						</label>
					<i class="color_<?=$colorNo;?>"></i></li>							
				<?php 
					} 
				if($colorNo >=6)
				$colorNo = 1;						
				$colorNo++;
				$x++;?>
				<?php endforeach;?>
				</ul>
				<?php endif;?>
				<?php endif;?>
			</div>
			<div class="filter_type">
				<h6>Rating</h6>
				<ul>
					<li><label><input type="checkbox" class="icheck Rate_stars" id="star_5"><span class="rating">
					<i class="icon_star voted"></i><i class="icon_star voted "></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i>
					</span></label></li>
					<li><label><input type="checkbox" class="icheck Rate_stars" id="star_4"><span class="rating">
					<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
					</span></label></li>
					<li><label><input type="checkbox" class="icheck Rate_stars" id="star_3"><span class="rating">
					<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
					</span></label></li>
					<li><label><input type="checkbox" class="icheck Rate_stars" id="star_2"><span class="rating">
					<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
					</span></label></li>
					<li><label><input type="checkbox" class="icheck Rate_stars" id="star_1"><span class="rating">
					<i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
					</span></label></li>
					<li><label><input type="checkbox" class="icheck Rate_stars" id="star_0"><span class="rating">
					<i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
					</span></label></li>
				</ul>
			</div>
<!--
			<div class="filter_type">
				<h6>Options</h6>
				<ul class="nomargin">
					<li><label><input type="checkbox" class="icheck" id="service_filter_2">Delivery</label></li>
					<li><label><input type="checkbox" class="icheck" id="service_filter_3">Take Away</label></li>
					<li><label><input type="checkbox" class="icheck">Distance 10Km</label></li>
					<li><label><input type="checkbox" class="icheck">Distance 5Km</label></li>
				</ul>
			</div>
-->
		</div><!--End collapse -->
	</div><!--End filters col-->
</div><!--End col-md -->
