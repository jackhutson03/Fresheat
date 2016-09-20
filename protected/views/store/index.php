<?php
$kr_search_adrress = FunctionsV3::getSessionAddress();

$home_search_text=Yii::app()->functions->getOptionAdmin('home_search_text');
if (empty($home_search_text)){
	$home_search_text=Yii::t("default","Find restaurants near you");
}

$home_search_subtext=Yii::app()->functions->getOptionAdmin('home_search_subtext');
if (empty($home_search_subtext)){
	$home_search_subtext=Yii::t("default","Order Delivery Food Online From Local Restaurants");
}

$home_search_mode=Yii::app()->functions->getOptionAdmin('home_search_mode');
$placholder_search=Yii::t("default","Street Address,City,State");
if ( $home_search_mode=="postcode" ){
	$placholder_search=Yii::t("default","Enter your postcode");
}
$placholder_search=Yii::t("default",$placholder_search);
?>

<!--  Header video -->
 <section class="header-video">
   <div id="hero_video">
      
<?php 
if ( $home_search_mode=="address" || $home_search_mode=="") { 
	if ( $enabled_advance_search=="yes"){
		$this->renderPartial('/front/advance_search',array(
		  'home_search_text'=>$home_search_text,
		  'kr_search_adrress'=>$kr_search_adrress,
		  'placholder_search'=>$placholder_search,
		  'home_search_subtext'=>$home_search_subtext,
		  'theme_search_merchant_name'=>getOptionA('theme_search_merchant_name'),
		  'theme_search_street_name'=>getOptionA('theme_search_street_name'),
		  'theme_search_cuisine'=>getOptionA('theme_search_cuisine'),
		  'theme_search_foodname'=>getOptionA('theme_search_foodname'),
		  'theme_search_merchant_address'=>getOptionA('theme_search_merchant_address'),
		));
	} else $this->renderPartial('/front/single_search',array(
	      'home_search_text'=>$home_search_text,
		  'kr_search_adrress'=>$kr_search_adrress,
		  'placholder_search'=>$placholder_search,
		  'home_search_subtext'=>$home_search_subtext
	));
} else {
	$this->renderPartial('/front/search_postcode',array(
	      'home_search_text'=>$home_search_text,
		  'placholder_search'=>$placholder_search,
		  'home_search_subtext'=>t("Enter your post code")
	));
}
?>

</div>

   <img src="<?=assetsURL();?>/img/video_fix.png" alt="" class="header-video--media" data-video-src="<?= assetsURL()?>/video/intro" data-teaser-source="<?= assetsURL()?>/video/intro" data-provider="Vimeo" data-video-width="1920" data-video-height="960">
    <div id="count" class="hidden-xs">
        <ul>
            <li><span class="number">2650</span> Restaurant</li>
            <li><span class="number">53508</span> People Served</li>
            <li><span class="number">129350</span> Registered Users</li>
        </ul>
    </div>
  </section><!-- End Header video -->

<!--HOW IT WORKS SECTIONS-->
<?php if ($theme_hide_how_works<>2):?>

         <div class="container margin_60">
        
         <div class="main_title">
            <h2 class="nomargin_top" style="padding-top:0"><?php echo t("How it works")?></h2>
            <p>
                <?=t("Ordering Food from your Favorite Restaurant has never been Faster, Easier and Simple.");?>
            </p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="box_home" id="one">
                    <span>1</span>
                    <h3> <?=t("Search by address")?></h3>
                    <p>
                         <?=t("Find all restaurants available in your zone.")?>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box_home" id="two">
                    <span>2</span>
                    <h3> <?=t("Choose a restaurant");?></h3>
                    <p>
                        <?=t(" We have more than 2000s of menus online.");?>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box_home" id="three">
                    <span>3</span>
                    <h3> <?=t("Pay by card or cash")?></h3>
                    <p>
                        <?=t(" It's quick, easy and totally secure.")?>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box_home" id="four">
                    <span>4</span>
                    <h3> <?=t("Delivery or takeaway")?></h3>
                    <p>
                         <?=t("You are lazy? Are you backing home?")?>
                    </p>
                </div>
            </div>
        </div><!-- End row -->
        
        <div id="delivery_time" class="hidden-xs">
            <strong><span>2</span><span>5</span></strong>
            <h4> <?=t("The minutes that usually takes to deliver!")?></h4>
        </div>
        </div><!-- End container -->
<?php endif;?>
<!-- End HOW IT WORKS SECTIONS-->
<!--FEATURED RESTAURANT SECIONS-->
<?php if ($disabled_featured_merchant==""):?>
<?php if ( getOptionA('disabled_featured_merchant')!="yes"):?>
<?php if ($res=Yii::app()->functions->getFeatureMerchant2()):?>
<div class="sections section-feature-resto">
<div class="container">


  <h2><?php echo t("Featured Restaurants")?></h2>
  
  <div class="row">
  <?php foreach ($res as $val): //dump($val);?>
  <?php $address= $val['street']." ".$val['city'];
        $address.=" ".$val['state']." ".$val['post_code'];
        
        $ratings=Yii::app()->functions->getRatings($val['merchant_id']);
  ?>   
  
    <a href="<?php echo Yii::app()->createUrl('/store/menu/merchant/'. trim($val['restaurant_slug']) )?>">
    <div class="col-md-5 border-light ">
    
        <div class="col-md-3 col-sm-3">
           <img class="logo-small" src="<?php echo FunctionsV3::getMerchantLogo($val['merchant_id']);?>">
        </div> <!--col-->
        
        <div class="col-md-9 col-sm-9">
        
          <div class="row">
              <div class="col-sm-5">
		          <div class="rating-stars" data-score="<?php echo $ratings['ratings']?>"></div>   
	          </div>
	          <div class="col-sm-2 merchantopentag">
	          <?php echo FunctionsV3::merchantOpenTag($val['merchant_id'])?>   
	          </div>
          </div>
          
          <h4 class="concat-text"><?php echo clearString($val['restaurant_name'])?></h4>
          
          <p class="concat-text">
			<?php //echo wordwrap(FunctionsV3::displayCuisine($val['cuisine']),50,"<br />\n");?>
			<?php echo FunctionsV3::displayCuisine($val['cuisine']);?>
          </p>
			<p class="concat-text"><?php echo $address?></p>                             
			<?php echo FunctionsV3::displayServicesList($val['service'])?>          
        </div> <!--col-->
        
    </div> <!--col-5-->
    </a>
    <div class="col-md-1"></div>
      
  <?php endforeach;?>
  </div> <!--end row-->

  
</div> <!--container-->
</div>
<?php endif;?>
<?php endif;?>
<?php endif;?>
<!--END FEATURED RESTAURANT SECIONS-->
           
    <div class="high_light">
      	<div class="container">
      		<h3>Choose from over 2,000 Restaurants</h3>
            <p>We offer over 2000 Reasons not to cook with thousands of dishes to choose from.</p>
            <a href="/fresheat/store/browse">View all Restaurants</a>
        </div><!-- End container -->
      </div><!-- End hight_light -->        
    <section class="parallax-window" data-parallax="scroll" data-image-src="<?= assetsURL()?>/images/banner.jpg" data-natural-width="1200" data-natural-height="600"><!--<?= assetsURL()?>/img/bg_office.jpg-->
    <div class="parallax-content">
        <div class="sub_content">
            <i class="icon_mug"></i>
            <h3>We also deliver to your office</h3>
            <p>
                If you have Hungry Staffs, Order from Fresh Eat and Enjoy the Delicious Food.
            </p>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
    </section><!-- End section -->

<?php if ($theme_show_app==2):?>
<!--MOBILE APP SECTION-->
<div id="mobile-app-sections" class="container">
<div class="container-medium">
  <div class="row">
     <div class="col-xs-5 into-row border app-image-wrap">
       <img class="app-phone" src="<?php echo assetsURL()."/images/getapp-2.jpg"?>">
     </div> <!--col-->
     <div class="col-xs-7 into-row border">
       <h2><?php echo getOptionA('website_title')." ".t("in your mobile")?>! </h2>
       <h3 class="green-text"><?php echo t("Get our app, it's the fastest way to order food on the go")?>.</h3>
       
       <div class="row border" id="getapp-wrap">
         <div class="col-xs-4 border">
           <a href="<?php echo $theme_app_ios?>" target="_blank">
           <img class="get-app" src="<?php echo assetsURL()."/images/get-app-store.png"?>">
           </a>
         </div>
         <div class="col-xs-4 border">
           <a href="<?php echo $theme_app_android?>" target="_blank">
             <img class="get-app" src="<?php echo assetsURL()."/images/get-google-play.png"?>">
           </a>
         </div>
       </div> <!--row-->
       
     </div> <!--col-->
  </div> <!--row-->
  </div> <!--container-medium-->
  
  <div class="mytable border" id="getapp-wrap2">
     <div class="mycol border">
           <a href="<?php echo $theme_app_ios?>" target="_blank">
           <img class="get-app" src="<?php echo assetsURL()."/images/get-app-store.png"?>">
           </a>
     </div> <!--col-->
     <div class="mycol border">
          <a href="<?php echo $theme_app_android?>" target="_blank">
             <img class="get-app" src="<?php echo assetsURL()."/images/get-google-play.png"?>">
           </a>
     </div> <!--col-->
  </div> <!--mytable-->  
  
</div> <!--container-->
<!--END MOBILE APP SECTION-->
<?php endif;?>


 
