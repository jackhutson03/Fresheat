<?php
$this->renderPartial('/front/default-header',array(
   'h1'=>t("Restaurant  by cuisine"),
   'sub_text'=>t("choose from your favorite restaurant")
));
?>
<div class="sections section-grey2 section-browse" id="section-browse">
  
<div class="container margin_60_35">
	<div class="row">
		  
<?php  $this->renderPartial('/front/browse_sidebar',array()); ?>

		<div class="col-md-9">
        
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
				
					  $this->renderPartial('/front/browse-list',array(
						   'list'=>$list,
						   'cuisine_page'=>2,
						   'category'=>$category
					  ));
				
				   ?>
				   
			</div> <!--FilTer_result--> 
		</div> <!--col-md-9--> 
 </div> <!--row--> 
 </div> <!--container--> 

</div><!-- sections-->




