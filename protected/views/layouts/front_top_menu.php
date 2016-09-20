<div id="preloader">
	<div class="sk-spinner sk-spinner-wave" id="status">
		<div class="sk-rect1"></div>
		<div class="sk-rect2"></div>
		<div class="sk-rect3"></div>
		<div class="sk-rect4"></div>
		<div class="sk-rect5"></div>
	</div>
</div><!-- End Preload -->
<!-- Header =============================================== -->
<header>	
	<div class="container-fluid top-menu-wrapper <?php echo "top-".$action;?>">

	<div class="row" >
	  <div class="col--md-4 col-sm-4 col-xs-4">
		<?php //if ( $theme_hide_logo<>2):?>
		<a href="<?php echo Yii::app()->createUrl('/store')?>" id="logo">
		 <img src="<?php echo FunctionsV3::getDesktopLogo();?>" class="logo logo-desktop hidden-xs" width="180" height="71" alt="" data-retina="true" >
		 <img src="<?php echo FunctionsV3::getMobileLogo();?>" class="logo logo-mobile hidden-lg hidden-md hidden-sm" width="110" height="41" alt="" data-retina="true" >
		</a>
		<?php // endif;?>
	  </div>
	   <nav class="col--md-8 col-sm-8 col-xs-8">
		<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
		<div class="main-menu" >
			<div id="header_menu">
			<img src="<?php echo FunctionsV3::getMobileLogo();?>" class="logo logo-mobile hidden-lg hidden-md hidden-sm" width="110" height="41" alt="" data-retina="true" >
			</div> 
			<a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
			<?php $this->widget('zii.widgets.CMenu', FunctionsV3::getMenu() );?> 
		</div><!-- End main-menu -->
		</nav>    
	</div> <!--row-->
	
	</div><!-- End container -->
</header>
<!-- End Header =============================================== -->
<div class="layer"></div><!-- Mobile menu overlay mask -->

