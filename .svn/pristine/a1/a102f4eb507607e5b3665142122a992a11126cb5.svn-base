<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="google-signin-clientid" content="<?=Yii::app()->params['google']?>" />
<meta name="google-signin-scope" content="https://www.googleapis.com/auth/plus.login" />
<meta name="google-signin-requestvisibleactions" content="http://schema.org/AddAction" />
<meta name="google-signin-cookiepolicy" content="single_host_origin" />
<meta name="google-signin-callback" content="signinCallback" />
<title><?=$this->pageTitle?></title>
<link rel="shortcut icon" href="<?=Yii::app()->theme->baseUrl?>/images/favicon.ico" />
<link href='//fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl?>/style-sheets/global.css">
<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl?>/style-sheets/login-overlay.css">
<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl?>/style-sheets/profile-menu.css">
<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl?>/style-sheets/font-awesome.css">
<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl?>/style-sheets/animate.css">
<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl?>/style-sheets/fontello.css">
<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl?>/style-sheets/bootstrap.min.css">
<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl?>/style-sheets/style.css">
<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl?>/style-sheets/cs-select.css" />
<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl?>/style-sheets/cs-skin-elastic.css" />
<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl?>/style-sheets/jquery.sliderTabs.css">
<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl?>/style-sheets/owl.carousel.css">
<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl?>/style-sheets/jquery-ui.css">
<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl?>/style-sheets/style-reset.css">
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/modernizr.js"></script>

</head>
<body>
	<div id="wrap">
    	<div id="container">
        	<div id="header">
				<div id="innerHeader">
                    <div id="topHeaderMenu">
						<div id="innerTopHeaderMenu">
							<div id="topHeaderRight">
								<div id="dealsAndCoupons">
									<ul>
										<li><a href="coupons.php"><i class="fa fa-ticket"></i> Coupons</a></li>
										<li><a href="deals.php"><i class="fa fa-tags"></i> Offers &amp; Deals</a></li>
									</ul>
								</div>
								<!-- End of Offers and Coupons -->
								<div id="userProfile">
                                    <div id="account" style="margin-top:0px;">
                                        <p>Welcome to Dealer Price! <a href="#" id="login" class="show-popup" data-showpopup="1" data-url='<?php echo Yii::app()->createAbsoluteUrl("/site/login", array('ajax'=>true));?>'>login</a> or <a href="#" id="register" class="show-popup-signup" data-showpopup="1" data-url='<?php echo Yii::app()->createAbsoluteUrl("/users/create", array('ajax'=>true));?>'>create an account</a>
</p>
                                    </div>
									<!--<div id="account">
										<ul>
											<li><a href="#" id="register" class="show-popup-signup" data-showpopup="1">Register</a></li>
											<li id="divider">|</li>
											<li><a href="#" id="login" class="show-popup" data-showpopup="1">Log in</a></li>
										</ul>
									</div>-->
									<!--<div id="profileMenu">
										<div id="profileName">
											<div id="admin">Hi, Partha</div>
											<div id="settings" class="fa fa-angle-double-down"></div>
										</div>  
										<div id="menu">
											<div id="arrow"></div>
											<a href="personal-details.php">My Account <i id="firstIcon" class="fa fa-lock"></i></a>
											<a href="wishlist.php">Wishlist <i id="thirdIcon" class="fa fa-tags"></i></a>
											<a href="reviews-and-ratings.php">Reviews & Ratings <i id="fifthIcon" class="fa fa-star"></i></a>
											<a href="logout.php">Logout <i id="sixthIcon" class="fa fa-sign-out "></i></a>
										</div>
									</div>-->
								</div> 
								<!-- End of User Profile --> 
							</div>  
							<!-- End of Top Header Right -->
						</div>
						<!-- End of Inner Header Top Contents -->
                    </div>
                    <div class="overlay-bg">
					<div class="overlay-content popup1" id="loginFormOverlay">
						</div>
				</div>
				<div class="overlay-bg-signup">
					<div class="overlay-content-signup popup1" id="signupFormOverlay">
					</div>
				</div>
                    <div id="headerContents">
						<div id="innerHeaderContents">
							<div id="headerLeft">
								<div id="logo">
									<?=CHtml::link("Dealer Price", array('/site/index'));?>
								</div>
							</div>
							<div id="headerRight">
								<div id="searchBox">
									<form id="searchForm" action="<?=$this->createUrl('site/search')?>" method="get">
										<span id="searchBoxFrame">
										<label>
										<?php 
											$this->widget('ext.YiiComplete.YiiComplete', array(
											'jsonUrl' => $this->createAbsoluteUrl('/site/hints'),
										));
										?>
										</label><!--
	--><label>						    <select id="selectCategories" name="cat" class="cs-select cs-skin-elastic">
										<option value="all">All Categories</option>
										<?php
										$cat = Categories::model()->findAll();
										if(isset($cat))
										foreach($cat as $c)
											echo '<option value="'.$c->url.'">'.$c->name.'</option>';
										?>
										</select></span></label><!--
	--><input type="submit" id="searchBtn" class="alignLeft" value="GO" />
									</form>
								</div>
								<div id="downloadApp">
									<a href="#app"><span><i class="fa fa-android"></i></span><p>Download Our Andriod App</p></a>
								</div>
							</div>
						</div>
						<!-- End of Inner Header Contents -->
                    </div>    
                </div>
            </div>
			<?php echo $content; ?>
			<!-- End of Home Contents -->
			<div id="footer">
				<div id="footerNav">
					<div id="socialIcons" class="alignCenter">
						<section class="widget">
								<ul class="social_btns">
									<li>
										<a href="#" class="icon_btn middle_btn social_facebook tooltip_container"><i class="icon-facebook-1"></i><span class="tooltip top">Like us Facebook</span></a>
									</li>

									<li>
										<a href="#" class="icon_btn middle_btn social_twitter tooltip_container"><i class="icon-twitter"></i><span class="tooltip top">Follow us Twitter</span></a>
									</li>

									<li>
										<a href="#" class="icon_btn middle_btn social_googleplus tooltip_container"><i class="icon-gplus-2"></i><span class="tooltip top">Join us GooglePlus</span></a>
									</li>

									<li>
										<a href="#" class="icon_btn middle_btn social_pinterest tooltip_container"><i class="icon-pinterest-3"></i><span class="tooltip top">Pin us</span></a>
									</li>
								</ul>
							</section>
					</div>
					<nav class="footer_nav">
						<ul class="bottombar">
							<li><a href="#">Mobile &amp; Tablets</a></li>
							<li><a href="#">Laptops &amp; Computers</a></li>
							<li><a href="#">Televisions &amp; Cameras</a></li>
							<li><a href="#">Home &amp; Kitchen Appliances</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Women</a></li>
							<li><a href="#">Kids</a></li>
							<li><a href="#">Health &amp Fitness</a></li>
						</ul>
					</nav>
					<p class="copyright">&copy; 2015 <a href="index.html">Dealer Price</a>. All Rights Reserved. <a href="terms-of-use.php">Terms of Use</a><span class="navDivider">|</span><a href="privacy-policy.php">Privacy Policy</a></p>
					<p class="designedBy">Designed By <a href="http://www.appture.in">Appture</a></p>
					<div style="clear:both;"></div>
				</div>
				<!-- End of Footer Nav -->
			</div
			<!-- End of Footer -->
			 <div class="menuPopupOverlay"></div>
         </div>
		 <!-- End of Container -->
		 <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
    </div>
	<!-- End of Wrap -->
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/scroll-to-top.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/fixed-menu.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/profile-menu.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/login-overlay.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/classie.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/jquery.appear.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/owl.carousel.min.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/selectFx.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/jquery.sliderTabs.js"></script>
<!--<script src="<?=Yii::app()->theme->baseUrl?>/scripts/queryloader2.min.js" type="text/javascript"></script>-->
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/theme.plugins.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/theme.core.js"></script>
<script>
	(function() {
		[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
			new SelectFx(el);
		} );
	})();
</script>    
<script>
var slider = $("div#sliderTabs").sliderTabs({
  autoplay: false,
  mousewheel: false,
  position: "bottom"
});
</script>
<script>

$("div#megaMenu").hover(function(){
    $("div.menuPopupOverlay").addClass('showOverlay');
});
$("div#megaMenu").mouseleave(function(){
    $("div.menuPopupOverlay").removeClass('showOverlay');
});

</script>
</body>
</html>
