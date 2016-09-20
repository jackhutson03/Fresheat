<?php
$this->renderPartial('/front/banner-contact',array(
   'h1'=>t("Contact Us"),
   'sub_text'=>$address." ".$country,
   'contact_phone'=>$contact_phone,
   'contact_email'=>$contact_email
));

$fields=yii::app()->functions->getOptionAdmin('contact_field');
if (!empty($fields)){
	$fields=json_decode($fields);
}
?>
<!--
 <div id="contact-map"></div>
-->
<div class="container margin_60_35 ">
	<div class="row" id="contacts">
    	<div class="col-md-6 col-sm-6">
        	<div class="box_style_2">
            	<h2 class="inner"><?php echo t("Contact")." $website_title";?></h2>
                <p class="add_bottom_30"> <?php echo t("We are always happy to hear from our clients and visitors, you may contact us anytime")?></p>
                <p><a href="tel://<?=$contact_phone?>" class="phone"><i class="icon-phone-circled"></i> <?=$contact_phone?></a></p>
                <p class="nopadding"><a href="mailto:<?=$contact_email?>"><i class="icon-mail-3"></i> <?=$contact_email?></a></p>
            </div>
    	</div>
    	  <?php echo CHtml::hiddenField('action','contacUsSubmit')?>
             <?php echo CHtml::hiddenField('currentController','store')?>
        <div class="col-md-6 col-sm-6">
        	<div class="box_style_2">
            	<h2 class="inner">Restaurant Support</h2>
                <p class="add_bottom_30">Quo ex rebum petentium, cum alia illud molestiae in, pro ea paulo gubergren. 
                <p><a href="tel://004542344599" class="phone"><i class="icon-phone-circled"></i>  +45 423 445 99</a></p>
                <p class="nopadding"><a href="mailto:customercare@quickfood.com"><i class="icon-mail-3"></i> support@quickfood.com</a></p>
            </div>
    	</div>
    </div><!-- End row -->
</div><!-- End container -->


