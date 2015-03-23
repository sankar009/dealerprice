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
								<?php if(Yii::app()->user->isGuest){ ?>
                                    <div id="account" style="margin-top:0px;">
                                        <p>Welcome to Dealer Price! <a href="#" id="login" class="show-popup" data-showpopup="1" data-url='<?php echo Yii::app()->createAbsoluteUrl("/site/login", array('ajax'=>true));?>'>login</a> or <a href="#" id="register" class="show-popup-signup" data-showpopup="1" data-url='<?php echo Yii::app()->createAbsoluteUrl("/users/create", array('ajax'=>true));?>'>create an account</a>
</p>
                                    </div>
									 <?php } else if(Yii::app()->user->role =='SuperAdmin' || Yii::app()->user->role =='Admin' ) { ?>
									<div id="account">
										<ul>
											<li><?=CHtml::link('Admin Panel',array('/admin'));?></li>
											<li id="divider">|</li>
											<li><?=CHtml::link('Logout',array('/site/logout'));?></li>
										</ul>
									</div>
									<?php } else { ?>
									<div id="profileMenu">
										<div id="profileName">
											<div id="admin">Hi, <?=Yii::app()->user->name?></div>
											<div id="settings" class="userIcon fa fa-chevron-down"></div>
										</div>  
										<div id="menu">
											<div id="arrow"></div>
											<?php 
											$wc=Wishlist::model()->count('user_id='.Yii::app()->user->id);
											$ac=AlertUsers::model()->count('user_id='.Yii::app()->user->id);
											?>
			<?=CHtml::link('My Account <i id="firstIcon" class="fa fa-lock"></i>',array('/customer/default/index'));?>
			<?=CHtml::link('Wishlist('.$wc.') <i id="secondIcon" class="fa fa-tags"></i>',array('/customer/default/wishlist'));?>
			<?=CHtml::link('Alerts('.$ac.') <i id="thirdIcon" class="fa fa-bell"></i>',array('/customer/default/alerts'));?>
			<?=CHtml::link('Subscriptions <i id="fourthIcon" class="fa fa-envelope"></i>',array('/customer/default/subscriptions'));?>
			<?=CHtml::link('Logout <i id="fifthIcon" class="fa fa-sign-out "></i>',array('/site/logout'));?>
									   </div>
									</div>
									<?php } ?>
								
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
	--><label><select id="selectCategories" name="cat" class="cs-select cs-skin-elastic">
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
									<a href="#app"><span><i class="fa fa-android"></i></span><p>Download Our Android App</p></a>
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
					<nav class="footer_nav">
						<ul class="bottombar">
							<li><a href="<?=$this->createUrl('/site/category', array('url'=>'mobiles-and-tablets'))?>">Mobile &amp; Tablets</a></li>
							<li><a href="<?=$this->createUrl('/site/category', array('url'=>'laptops-and-computers'))?>">Laptops &amp; Computers</a></li>
							<li><a href="<?=$this->createUrl('/site/category', array('url'=>'televisions-and-cameras'))?>">Televisions &amp; Cameras</a></li>
							<li><a href="<?=$this->createUrl('/site/category', array('url'=>'home-and-kitchen-appliances'))?>">Home &amp; Kitchen Appliances</a></li>
							<li><a href="<?=$this->createUrl('/site/category', array('url'=>'men'))?>">Men</a></li>
							<li><a href="<?=$this->createUrl('/site/category', array('url'=>'women'))?>">Women</a></li>
							<li><a href="<?=$this->createUrl('/site/category', array('url'=>'kids'))?>">Kids</a></li>
							<li><a href="<?=$this->createUrl('/site/category', array('url'=>'health-and-fitness'))?>">Health &amp Fitness</a></li>
						</ul>
					</nav>
					<p class="copyright">&copy; 2015 <a href="index.html">Dealer Price</a>. All Rights Reserved. <a href="terms-of-use.php">Terms of Use</a><span class="navDivider">|</span><a href="privacy-policy.php">Privacy Policy</a></p>
					<p class="designedBy">Designed By <a href="http://www.appture.in">Appture</a></p>
					<div style="clear:both;"></div>
				</div>
				<!-- End of Footer Nav -->
			</div><!-- End of Footer -->
			
            <div class="menuPopupOverlay"></div>
         </div>
		<!-- End of Best Price Alert -->
		 <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
    </div>
	<!-- End of Wrap -->
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/scroll-to-top.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/fixed-menu.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/profile-menu.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/login-overlay.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/classie.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/scripts/selectFx.js"></script>

<script>
	(function() {
		[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
			new SelectFx(el);
		} );
	})();
</script>    
<script>
var cancel = false;
$("div#megaMenu").hide();
$("span#allCatBtn").hover(function(){
    $("div#megaMenu").show();
    $("div.menuPopupOverlay").addClass('showOverlay');
});
$("div#megaMenu").hover(function(){
    $("div#megaMenu").show();
    $("div.menuPopupOverlay").addClass('showOverlay');
});
$("div#megaMenu").mouseleave(function(){
    $("div#megaMenu").hide();
    $("div.menuPopupOverlay").removeClass('showOverlay');
});
$("span#allCatBtn").mouseleave(function(){
    $("div#megaMenu").hide();
    $("div.menuPopupOverlay").removeClass('showOverlay');
});
</script>
<script>
$("div#profileMenu").hover(function(){
    $("div.userIcon").removeClass('fa-chevron-down');
	$("div.userIcon").addClass('fa-chevron-up');
});
$("div#profileMenu").mouseleave(function(){
    $("div.userIcon").addClass('fa-chevron-down');
	$("div.userIcon").removeClass('fa-chevron-up');
});
</script>
</body>
</html>
