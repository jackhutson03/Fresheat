
<?php
//class="irs-hidden-input"
$this->renderPartial('/front/default-header',array()); 


?>
<div class="collapse" id="collapseMap">
	<div class="full-map-wrapper" >
               <div id="full-map"></div>

    </div>	
</div>
<!-- End Map -->

<div class="sections section-grey2 section-browse" id="section-browse">
  
<div class="container margin_60_35">
	<div class="row">
  
<?php  $this->renderPartial('/front/browse_sidebar',array()); ?>
		
	
		<div class="col-md-9" >
        
			<div id="tools">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="styled-select">
							<select name="sort_rating" id="sort_rating">
								<option value="" selected>Sort by ranking</option>
								<option value="0">Lowest ranking</option>
								<option value="1">Highest ranking</option>
							</select>
						</div>
					</div>
					<div class="col-md-9 col-sm-6 hidden-xs">

					</div>
				</div>
			</div><!--End tools -->
			<div id="FilTer_result">
			<?php 
				if (is_array($list['list']) && count($list['list'])>=1){
					$this->renderPartial('/front/browse-list',array(
					   'list'=>$list,
					   'tabs'=>$tabs
					));
				} 
				else $msg = '<p class="text-danger">'.t("No restaurant found").'</p>';
			?>			
			</div>
		</div><!-- End col-md-9-->
        <?php ?>
	</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->

</div> <!--sections-->
