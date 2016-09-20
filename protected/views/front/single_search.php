<div class="search-wraps single-search" id="sub_content">
	
  <h1><?php echo $home_search_text;?></h1>
  <p><?php echo $home_search_subtext;?></p>
    
  <form method="GET" class="forms-search" id="forms-search" action="<?php echo Yii::app()->createUrl('store/searcharea')?>">
  <div class="search-input-wraps rounded30" id="custom-search-input">
		<div class="input-group">
     
			<?php echo CHtml::textField('s',$kr_search_adrress,array(
			 'placeholder'=>$placholder_search,
			 'required'=>true,
			 'class'=>"search-query",
			 'autocomplete' => 'off'
			))?>        
		  
			<span class="input-group-btn">
				<input type="submit" class="btn_search" value="submit">
			</span>
		</div> 
  </div> <!--search-input-wrap-->
  </form>
  
</div> <!--single-search-wrapper-->
