<?php
$this->renderPartial('/front/banner-receipt',array(
   'h1'=>t("Login & Signup"),
   'sub_text'=>t("sign up to start ordering")
));

echo CHtml::hiddenField('mobile_country_code',Yii::app()->functions->getAdminCountrySet(true));
?>
	<div class="container margin_60_35">
	<!-- Login modal -->   

				<div class="col-md-6 form-group">
					<form id="forms" class="forms Login has-validation-callback" method="POST">
						<?php echo CHtml::hiddenField('action','clientLogin')?>
						<?php echo CHtml::hiddenField('currentController','store')?>    
						<?php if ($google_login_enabled==2 || $fb_flag==2 ) :?>
							<?php if ( $fb_flag==2):?>
							<a href="javascript:fbcheckLogin();" class="fb-button orange-button medium rounded">
								<i class="ion-social-facebook"></i><?php echo t("login with Facebook")?>
							</a> 
							<?php endif;?>
							<?php if ($google_login_enabled==2):?>
							<div class="top10"></div>
								<a href="<?php echo Yii::app()->createUrl('/store/googleLogin')?>" 
								class="google-button orange-button medium rounded">
									<i class="ion-social-googleplus-outline"></i><?php echo t("Sign in with Google")?>
								</a> 
							<?php endif;?>
						  
							  <div class="login-or">
								<span><?php echo t("Or")?></span>
							  </div>
						<?php endif;?>
						<div class="col-md-10 login_icon" ><i class="icon_lock_alt i-big"></i><?=t("Login")?></div>

						<?php echo CHtml::textField('username','',
						array('class'=>'form-control  form-inpt',
						'placeholder'=>t("Email"),
					   'required'=>true
					   ))?>

						<?php echo CHtml::passwordField('password','',
							array('class'=>'form-control  form-inpt',
							'placeholder'=>t("Password"),
						   'required'=>true
						   ))?>
						  
						<?php if ($captcha_customer_login==2):?>
						   <div class="top10">
							 <div id="kapcha-1"></div>
						   </div>
						<?php endif;?> 
						<div class="text-left">
						<a href="javascript:;" class="forgot-pass-link2 block orange-text">
							<?php echo t("Forgot Password");?> <i class="ion-help"></i>
						</a>      
						</div>
						<input type="submit" value="<?php echo t("Login")?>" class="btn btn-submit medium full-width">
					</form>
				
<!--- forgot password -->
<div class="clearfix"></div>	

		<form id="frm-modal-forgotpass" class="frm-modal-forgotpass section-forgotpass" method="POST" onsubmit="return false;" style="display:none;">
		<?php echo CHtml::hiddenField('action','forgotPassword')?>
		<?php echo CHtml::hiddenField('do-action', isset($_GET['do-action'])?$_GET['do-action']:'' )?>   
				  
			<div class=" col-md-10 login_icon"><i class="ion-unlocked i-big"></i>	 
				<?php echo t("Forgot Password")?>        
			</div>    
			<div class="col-md-2 bold" style="background:#fff;padding-top:8px;">		  
			<a href="javascript:;" class="back-link block orange-text text-center">
				<?php echo t("Close");?>
			</a> 		  	
			</div>	
				<div class="row top15">
		      
			     <?php echo CHtml::textField('username-email','',
	                array('class'=>'grey-fields',
	                'placeholder'=>t("Email address"),
	               'required'=>true,
	               'class'=>"form-control  form-inpt"
	               ))?>
			   
				</div> <!--row-->			  
			<div class="row top10">	
			    <input type="submit" value="<?php echo t("Retrieve Password")?>" class="btn btn-submit">			  
			</div>  	
		</form><!--- END forgot password -->
</div>		<!-- End Login modal -->	
	<!-- Register modal -->   
			
				<div class="col-md-6 form-group">
				<form id="form-signup"  class="Register form-signup uk-panel uk-panel-box uk-form" method="POST" >
					<?php echo CHtml::hiddenField('action','clientRegistrationModal')?>
					<?php echo CHtml::hiddenField('currentController','store')?>
					<?php echo CHtml::hiddenField('single_page',2)?>    
					<?php 
					$verification=Yii::app()->functions->getOptionAdmin("website_enabled_mobile_verification");	    
						if ( $verification=="yes"){
							echo CHtml::hiddenField('verification',$verification);
						}
						if (getOptionA('theme_enabled_email_verification')==2){
							echo CHtml::hiddenField('theme_enabled_email_verification',2);
						}
					?>
                	<div class=" col-md-10 login_icon" ><i class="icon_lock_alt i-big"></i><?=t("Signup")?></div>
					<?php echo CHtml::textField('first_name','',
						array('class'=>'form-control form-inpt',
						'placeholder'=>t("First Name"),
					   'required'=>true               
					))?>
					<?php echo CHtml::textField('last_name','',
						array('class'=>'form-control form-inpt',
						'placeholder'=>t("Last Name"),
						'required'=>true
					))?>
					<?php echo CHtml::textField('contact_phone','',
						array('class'=>'form-control form-inpt mobile_inputs',
						'placeholder'=>t("Mobile"),
					   'required'=>true
					))?>
					<?php echo CHtml::textField('email_address','',
						array('class'=>'form-control form-inpt',
						'placeholder'=>t("Email address"),
					   'required'=>true
					))?>
					<?php echo CHtml::textField('password','',
						array('class'=>'form-control form-inpt',
						'placeholder'=>t("Password"),
					   'required'=>true
					))?>
					<?php echo CHtml::textField('cpassword','',
						array('class'=>'form-control form-inpt',
						'placeholder'=>t("Confirm Password"),
					   'required'=>true
					))?>
					<?php 
						$FunctionsK=new FunctionsK();
						$FunctionsK->clientRegistrationCustomFields();
					?>
					<?php if ($captcha_customer_signup==2):?>         		 
					<div class="top10">
						<div id="kapcha-2"></div>
					</div>
					<?php endif;?> 
					<p class="text-muted">
					<?php echo Yii::t("default","By creating an account, you agree to receive sms from vendor.")?>
					</p> 

					<?php if ($terms_customer=="yes"): ?> 
					   <?php 
						echo CHtml::checkBox('terms_n_condition',false,array(
						'value'=>2,
						'class'=>"icheck",
						'required'=>true
					   ));?>

					<?php 
					   echo " ". t("I Agree To")." <a href=\"$terms_customer_url\" target=\"_blank\">".t("The Terms & Conditions")."</a>";
					   
					endif;;?>
					<input type="submit" value="<?php echo t("Create Account")?>" class="btn btn-submit  medium block full-width">
				</form>
				</div>
				
	<!-- End Register modal -->	

</div> <!--- container margin_60_35-->


