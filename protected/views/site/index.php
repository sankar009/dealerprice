            <!-- End of Header -->
            <div id="menuSliderNAd">
                <div id="megaMenu" class="homeMegaMenu">
					<?php $this->beginContent('//layouts/mega-menu'); $this->endContent(); ?>
                </div>  
                <!-- End of Mega Menu -->
                <div id="slider">
                    <div id="sliderTabs">
                      <!-- Unordered list representing the tabs -->
                      <ul>
                        <li><a href="#one">Slide One</a></li>
                        <li><a href="#two">Slide Two</a></li>
                        <li><a href="#three">Slide Three</a></li>
                        <li><a href="#four">Slide Four</a></li>
                      </ul>
                    
                      <!-- Afterwards, include the div panels representing the panels of our slider -->
                      <div id="one" class="slides">
                        <img src="<?=Yii::app()->theme->baseUrl?>/images/phones.jpg">
                      </div>
                      <div id="two" class="slides">
                        <img src="<?=Yii::app()->theme->baseUrl?>/images/home appliances.jpg">
                      </div>
                      <div id="three" class="slides">
                        <img src="<?=Yii::app()->theme->baseUrl?>/images/laptops.jpg">
                      </div>
                      <div id="four" class="slides">
                        <img src="<?=Yii::app()->theme->baseUrl?>/images/cloth.jpg">
                      </div>
                    </div>       	
                </div>
                <!-- End of Slider -->
                <div id="sliderAds">
                	<img src="<?=Yii::app()->theme->baseUrl?>/images/android_app_slide.jpg"/>
                </div>
            </div>
            <!-- End of Menu and Slider -->
			<div id="homeContents">
                <div id="featuredStores" class="alignCenter sContent">
                <h1>get the best deal at lowest prices!</h1>
                    <ul>
                        <li><img src="<?=Yii::app()->theme->baseUrl?>/images/flipkart-logo.png"/></li>
                        <li><img src="<?=Yii::app()->theme->baseUrl?>/images/ebay-logo.png"/></li>
                        <li><img src="<?=Yii::app()->theme->baseUrl?>/images/myntra-logo.png"/></li>
                        <li><img src="<?=Yii::app()->theme->baseUrl?>/images/amazon-logo.png"/></li>
                        <li><img src="<?=Yii::app()->theme->baseUrl?>/images/snap-deal-logo.png"/></li>
                        <li><img src="<?=Yii::app()->theme->baseUrl?>/images/shop-clues-logo.png"/></li>
                    </ul>
                </div>
				<!-- End of the Featured Stores -->
                <section class="section_offset animated transparent" data-animation="fadeInDown"> 
                    <div id="polularCategories" class="alignCenter cContent">
                        <h2>popular categories</h2>
                        <div class="pplrCat">
                            <a href="<?=$this->createUrl('site/subcategory', array('url'=>'mobiles'))?>"><i class="fa fa-mobile" id="mobileIcon"></i>Mobile</a>
                        </div>
                        <div class="pplrCat">
                            <a href="<?=$this->createUrl('site/subcategory', array('url'=>'tablets'))?>"><i class="fa fa-tablet" id="tabletIcon"></i>Tablets</a>
                        </div>
                        <div class="pplrCat">
                            <a href="<?=$this->createUrl('site/subcategory', array('url'=>'men-clothing'))?>"><i class="fa fa-barcode" id="fashionIcon"></i>Fashion</a>
                        </div>
                        <div class="pplrCat">
                            <a href="<?=$this->createUrl('site/subcategory', array('url'=>'laptops'))?>"><i class="fa fa-laptop" id="laptopIcon"></i>Laptops</a>
                        </div>
                        <div class="pplrCat">
                            <a href="<?=$this->createUrl('site/subcategory', array('url'=>'televisions'))?>"><i class="fa fa-desktop" id="teleIcon"></i>Televisions</a>
                        </div>
                        <div class="pplrCat">
                            <a href="<?=$this->createUrl('site/subcategory', array('url'=>'home-appliances'))?>"><i class="fa fa-home" id="homeAppIcon"></i>Home Appliances</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </section>    
				<!-- End of Popular Categories -->
                <div id="featuredProducts" class="cContent">
					<!-- - - - - - - - - - - - - - New arrivals - - - - - - - - - - - - - - - - -->

					<section class="section_offset animated transparent" data-animation="fadeInDown"> 

						<h2>Featured Products</h2>

						<div class="tabs type_2 products">

							<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

							<ul class="tabs_nav clearfix">

								<li><a href="#tab-8">Mobile &amp; Tablets</a></li>
								<li><a href="#tab-9">Laptops &amp; Computers</a></li>
								<li><a href="#tab-10">Televisions &amp; Cameras</a></li>
								<li><a href="#tab-11">Home &amp; Kitchen Appliances</a></li>
								<li><a href="#tab-12">Men</a></li>
								<li><a href="#tab-13">Women</a></li>
								<li><a href="#tab-14">Kids</a></li>
								<li><a href="#tab-15">Health &amp Fitness</a></li>

							</ul>

							<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

							<div class="tab_containers_wrap">

								<div id="tab-8" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of medicine & health - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of medicine & health - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-1-->

								<div id="tab-9" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of beauty products - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of beauty products - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-2-->

								<div id="tab-10" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of personal care - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of personal care - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-3-->

								<div id="tab-11" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of vitamins & supplements - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of vitamins & supplements - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-4-->

								<div id="tab-12" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of baby needs products - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of baby needs products - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-5-->

								<div id="tab-13" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of diet & fitness products - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of diet & fitness products - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-6-->

								<div id="tab-14" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of sexual well-being - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of sexual well-being  - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-7-->
								
								<div id="tab-15" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of sexual well-being - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=Yii::app()->theme->baseUrl?>/images/featured-products.jpg" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

											

											<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

											<div class="description">

												<a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing</a>

												<div class="clearfix product_info">
                                                    <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. 80</span><span class="discountRate">(29% off)</span></span></p>
   
													<p class="product_price alignleft"><b>Rs. 44.99</b></p>

												</div>

											</div>

											<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of sexual well-being  - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-7-->

							</div>

							<!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

						</div>

					</section><!--/ .section_offset-->

					<!-- - - - - - - - - - - - - - End of new arrivals - - - - - - - - - - - - - - - - -->
                </div>
                <!-- End of Featured Products -->
                <section class="section_offset animated transparent" data-animation="fadeInDown"> 
                    <div id="banners" class="sContent">
                        <div id="leftBanner" class="banner fLeft">
                            <a href="<?=$this->createUrl('site/subcategory', array('url'=>'televisions'))?>"><img src="<?=Yii::app()->theme->baseUrl?>/images/banner_televisions.jpg"/></a>
                        </div>
                        <div id="middleBanner" class="banner fLeft">
                            <a href="<?=$this->createUrl('site/subcategory', array('url'=>'laptops'))?>"><img src="<?=Yii::app()->theme->baseUrl?>/images/banner_laptop.jpg"/></a>
                        </div>
                        <div id="rightBanner" class="banner fRight">
                            <a href="<?=$this->createUrl('site/subcategory', array('url'=>'women-clothing'))?>"><img src="<?=Yii::app()->theme->baseUrl?>/images/banner_img_2.jpg"/></a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </section>    
				<!-- End of Banners -->
				<div id="aboutDealerPrice" class="sContent">
					<h3>Dealer Price</h3>
					<p>Vestibulum tincidunt feugiat bibendum. Nullam condimentum nibh ac ultricies consectetur. Maecenas nec neque dui. Praesent viverra, mauris sit amet tempor consectetur, tortor quam porta dolor, vel sodales felis purus ac nisl. Maecenas ornare a eros et ultricies. Fusce eu efficitur mi, sed porttitor ex. Duis consequat sit amet nulla eget tempus. Nam sit amet risus ac enim imperdiet consectetur sed a turpis. Morbi id lobortis mi.</p>
					<p>Ut velit risus, consectetur et tortor ut, cursus sodales elit. Sed odio elit, placerat vel risus a, consectetur tempor nisi. Nulla non malesuada elit. Curabitur mattis placerat ultrices. Suspendisse id aliquam mi. Fusce finibus lorem turpis. Quisque congue viverra est sed gravida. Phasellus condimentum pharetra nunc, vel fermentum elit volutpat in. Integer non risus ut nulla ultrices ultrices. Mauris eu lacinia nisi. </p>
				</div>
				<!-- End of About Dealer Price -->

			</div>
			