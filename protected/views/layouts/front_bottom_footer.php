<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3><?=t("Secure payments with")?></h3>
                <p>
                    <img src="<?=assetsURL();?>/img/cards.png" alt="" class="img-responsive">
                </p>
            </div>
            <div class="col-md-3 col-sm-3">
				 <?php if ($theme_hide_footer_section1!=2):?>
                <h3><?php echo t("Menu")?></h3>
				<?php $this->widget('zii.widgets.CMenu', FunctionsV3::getMenu() );?> 
				<?php endif; ?>
            </div>
            <div class="col-md-3 col-sm-3" id="newsletter">
                <h3><?php echo t("Subscribe to our newsletter") ?></h3>
                <p>
                    <?php echo t("Join our newsletter to keep be informed about offers and news.")?>
                </p>
                <div id="message-newsletter_2">
                </div>

	<?php if ( getOptionA('disabled_subscription') == ""):?>
                <form method="POST" id="frm-subscribe" class="frm-subscribe" onsubmit="return false;" >
					<?php echo CHtml::hiddenField('action','subscribeNewsletter')?>
                    <div class="form-group">
						  <?php echo CHtml::textField('subscriber_email','',array(
							 'placeholder'=>t("E-mail"),
							 'required'=>true,
							 'class'=>"email form-control"
						   ))?>

                    </div>
                    <input type="submit" value="<?=t('Subscribe')?>" class="btn_1" id="submit-newsletter_2">
                </form>
      <?php endif;?>           
            </div>
          
            <div class="col-md-2 col-sm-3">
                <h3>Settings</h3>
                <?php if ($show_language<>1){ ?>
                <div class="styled-select">
					 <select class="form-control language-options" name="lang" id="lang">
					 <?php
					 $seLecT = FunctionsV3::getLanguage();
					  foreach($seLecT as $key => $value){						  						 
						  $selecteD ="";
						  if(!empty($show_language) && $show_language == $value)
							$selecteD = 'selected';
														
						  echo '<option value="'.$key.'" $selecteD>'.$value.'</option>';
						 }					  
					 ?>	                    
                    </select>
                </div>
                <?php }?>

            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
				<?php if ($social_flag<>1):?>
                <div id="social_footer">
                    <ul>
                        <li>
							<?php if (!empty($fb_page)):?>
								<a target="_blank" href="<?php echo FunctionsV3::prettyUrl($fb_page)?>"><i class="icon-facebook"></i></a>
							<?php endif;?>
						</li>
                        <li>
							<?php if (!empty($twitter_page)):?>
								<a target="_blank" href="<?php echo FunctionsV3::prettyUrl($twitter_page)?>"><i class="icon-twitter"></i></a>
							<?php endif;?>
						</li>
                        <li>
							<?php if (!empty($google_page)):?>
								<a target="_blank" href="<?php echo FunctionsV3::prettyUrl($google_page)?>"><i class="icon-google"></i></a>
							<?php endif;?>
						</li>
                        <li>
							<?php if (!empty($intagram_page)):?>
								<a target="_blank" href="<?php echo FunctionsV3::prettyUrl($intagram_page)?>"><i class="icon-instagram"></i></a>
							<?php endif;?>
						</li>
                        <li>
							<?php if (!empty($pinterest)):?>
								<a target="_blank" href="#0"><i class="icon-pinterest"></i></a>
							<?php endif;?>
						</li>
                        <li>
							<?php if (!empty($vimeo)):?>
								<a target="_blank" href="#0"><i class="icon-vimeo"></i></a>
							<?php endif;?>
						</li>
                        <li>
							<?php if (!empty($youtube_url)):?>
								<a target="_blank" href="<?php echo FunctionsV3::prettyUrl($youtube_url)?>"><i class="icon-youtube-play"></i></a>
							<?php endif;?>
						</li>
                    </ul>
                    <p>
                        © Karenderia 2016
                    </p>
                </div>
                <?php endif;?>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer>

  

