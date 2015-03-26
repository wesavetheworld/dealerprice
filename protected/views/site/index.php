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
                        <li><a href="#one">Great Deals</a></li>
                        <li><a href="#two">Compare Prices</a></li>
                        <li><a href="#three">Best Deals</a></li>
                        <li><a href="#four">Latest Collections</a></li>
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
                <section class="section_offset"> 
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
								<?php
									$url = "mobiles-and-tablets";

									$q = new CDbCriteria;
									$q->limit=6;
									$q->order='RAND()';
									$q->group = 'products.id';
									$q->addSearchCondition('tcategory.url', $url, true, 'AND', 'LIKE');
									$q->addSearchCondition('bcategory.url', $url, true, 'OR', 'LIKE');
									
									$q->addCondition('productDetails.product_id is not null');
									$q->addCondition('products.status = 0');
									$q->together = true;
									$q->alias="products";
									$q->with = array('types', 'brands', 'productDetails', 'types.typessubCategory.tcategory', 'brands.brandssubCategory.bcategory');
									$tempproducts = Products::model()->findAll($q);
									if(isset($tempproducts) && !empty($tempproducts))
									foreach($tempproducts as $tprod){
									$images = json_decode($tprod->images);
								?>
										
										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=isset($images) && !empty($images) && $images[0]->normal ? $images[0]->normal : Yii::app()->theme->baseUrl.'/images/no-img.png'; ?>" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													<?php if(Yii::app()->user->isGuest){ ?>
														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container new_item_wishlist" data-pid="<?=$tprod->id?>">
														<span class="tooltip right">Add to Wishlist</span></a>
													<?php } else { ?>
													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container <?=$tprod->wishlist > 0 ? 'remove_item_wishlist': 'new_item_wishlist' ?>" data-pid="<?=$tprod->id?>"><span class="tooltip right"><?=$tprod->wishlist > 0 ? 'Remove from Wishlist': 'Add to Wishlist' ?></span></a>
													<?php } ?>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<div class="description">
												<?=CHtml::link(CString::truncate($tprod->name, 60, '...', false), array('site/products', 'url'=>$tprod->url), array('class'=>'productTitle'))?>

												<ul class="rating">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li></li>

												</ul>
												
												<div class="clearfix product_info">
													<?php if($tprod->productPrice->discount > 0 && $tprod->productPrice->mrp > 0){ ?>
													<p class="product_price"><span class="discount"><span class="discountRs">Rs. <?=number_format($tprod->productPrice->mrp-$tprod->productPrice->price)?></span><span class="discountRate">(<?=$tprod->productPrice->discount?>% off)</span></span></p>
													<?php } ?>
													<p class="product_price alignleft"><b>Rs. <?=number_format($tprod->productPrice->price)?></b></p>
												</div>
											</div>

										</div><!--/ .product_item-->

									<?php } ?>
									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of medicine & health - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-1-->

								<div id="tab-9" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of beauty products - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">

									<?php
									$url = "laptops-and-computers";
									$q = new CDbCriteria;
									$q->limit=6;
									$q->order='RAND()';
									$q->group = 'products.id';
									$q->addSearchCondition('tcategory.url', $url, true, 'AND', 'LIKE');
									$q->addSearchCondition('bcategory.url', $url, true, 'OR', 'LIKE');
									
									$q->addCondition('productDetails.product_id is not null');
									$q->addCondition('products.status = 0');
									$q->together = true;
									$q->alias="products";
									$q->with = array('types', 'brands', 'productDetails', 'types.typessubCategory.tcategory', 'brands.brandssubCategory.bcategory');
									$tempproducts = Products::model()->findAll($q);
									if(isset($tempproducts) && !empty($tempproducts))
									foreach($tempproducts as $tprod){
									$images = json_decode($tprod->images);
								?>
										
										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=isset($images) && !empty($images) && $images[0]->normal ? $images[0]->normal : Yii::app()->theme->baseUrl.'/images/no-img.png'; ?>" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													<?php if(Yii::app()->user->isGuest){ ?>
														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container new_item_wishlist" data-pid="<?=$tprod->id?>">
														<span class="tooltip right">Add to Wishlist</span></a>
													<?php } else { ?>
													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container <?=$tprod->wishlist > 0 ? 'remove_item_wishlist': 'new_item_wishlist' ?>" data-pid="<?=$tprod->id?>"><span class="tooltip right"><?=$tprod->wishlist > 0 ? 'Remove from Wishlist': 'Add to Wishlist' ?></span></a>
													<?php } ?>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<div class="description">
												<?=CHtml::link(CString::truncate($tprod->name, 60, '...', false), array('site/products', 'url'=>$tprod->url), array('class'=>'productTitle'))?>

												<ul class="rating">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li></li>

												</ul>
												
												<div class="clearfix product_info">
													<?php if($tprod->productPrice->discount > 0 && $tprod->productPrice->mrp > 0){ ?>
													<p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. <?=number_format($tprod->productPrice->mrp-$tprod->productPrice->price)?></span><span class="discountRate">(<?=$tprod->productPrice->discount?>% off)</span></span></p>
													<?php } ?>
													<p class="product_price alignleft"><b>Rs. <?=number_format($tprod->productPrice->price)?></b></p>
												</div>
											</div>

										</div><!--/ .product_item-->

									<?php } ?>
									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of beauty products - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-2-->

								<div id="tab-10" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of personal care - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">

								<?php
									$url = "televisions-and-cameras";
									$q = new CDbCriteria;
									$q->limit=6;
									$q->order='RAND()';
									$q->group = 'products.id';
									$q->addSearchCondition('tcategory.url', $url, true, 'AND', 'LIKE');
									$q->addSearchCondition('bcategory.url', $url, true, 'OR', 'LIKE');
									
									$q->addCondition('productDetails.product_id is not null');
									$q->addCondition('products.status = 0');
									$q->together = true;
									$q->alias="products";
									$q->with = array('types', 'brands', 'productDetails', 'types.typessubCategory.tcategory', 'brands.brandssubCategory.bcategory');
									$tempproducts = Products::model()->findAll($q);
									if(isset($tempproducts) && !empty($tempproducts))
									foreach($tempproducts as $tprod){
									$images = json_decode($tprod->images);
								?>
										
										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=isset($images) && !empty($images) && $images[0]->normal ? $images[0]->normal : Yii::app()->theme->baseUrl.'/images/no-img.png'; ?>" alt=""  >

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													<?php if(Yii::app()->user->isGuest){ ?>
														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container new_item_wishlist" data-pid="<?=$tprod->id?>">
														<span class="tooltip right">Add to Wishlist</span></a>
													<?php } else { ?>
													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container <?=$tprod->wishlist > 0 ? 'remove_item_wishlist': 'new_item_wishlist' ?>" data-pid="<?=$tprod->id?>"><span class="tooltip right"><?=$tprod->wishlist > 0 ? 'Remove from Wishlist': 'Add to Wishlist' ?></span></a>
													<?php } ?>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<div class="description">
												<?=CHtml::link(CString::truncate($tprod->name, 60, '...', false), array('site/products', 'url'=>$tprod->url), array('class'=>'productTitle'))?>

												<ul class="rating">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li></li>

												</ul>
												
												<div class="clearfix product_info">
													<?php if($tprod->productPrice->discount > 0 && $tprod->productPrice->mrp > 0){ ?>
													<p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. <?=number_format($tprod->productPrice->mrp-$tprod->productPrice->price)?></span><span class="discountRate">(<?=$tprod->productPrice->discount?>% off)</span></span></p>
													<?php } ?>
													<p class="product_price alignleft"><b>Rs. <?=number_format($tprod->productPrice->price)?></b></p>
												</div>
											</div>

										</div><!--/ .product_item-->

									<?php } ?>
									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of personal care - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-3-->

								<div id="tab-11" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of vitamins & supplements - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">
										
									<?php
									$url = "home-and-kitchen-appliances";
									$q = new CDbCriteria;
									$q->limit=6;
									$q->order='RAND()';
									$q->group = 'products.id';
									$q->addSearchCondition('tcategory.url', $url, true, 'AND', 'LIKE');
									$q->addSearchCondition('bcategory.url', $url, true, 'OR', 'LIKE');
									
									$q->addCondition('productDetails.product_id is not null');
									$q->addCondition('products.status = 0');
									$q->together = true;
									$q->alias="products";
									$q->with = array('types', 'brands', 'productDetails', 'types.typessubCategory.tcategory', 'brands.brandssubCategory.bcategory');
									$tempproducts = Products::model()->findAll($q);
									if(isset($tempproducts) && !empty($tempproducts))
									foreach($tempproducts as $tprod){
									$images = json_decode($tprod->images);
								?>
										
										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=isset($images) && !empty($images) && $images[0]->normal ? $images[0]->normal : Yii::app()->theme->baseUrl.'/images/no-img.png'; ?>" alt=""  >

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													<?php if(Yii::app()->user->isGuest){ ?>
														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container new_item_wishlist" data-pid="<?=$tprod->id?>">
														<span class="tooltip right">Add to Wishlist</span></a>
													<?php } else { ?>
													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container <?=$tprod->wishlist > 0 ? 'remove_item_wishlist': 'new_item_wishlist' ?>" data-pid="<?=$tprod->id?>"><span class="tooltip right"><?=$tprod->wishlist > 0 ? 'Remove from Wishlist': 'Add to Wishlist' ?></span></a>
													<?php } ?>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<div class="description">
												<?=CHtml::link(CString::truncate($tprod->name, 60, '...', false), array('site/products', 'url'=>$tprod->url), array('class'=>'productTitle'))?>

												<ul class="rating">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li></li>

												</ul>
												
												<div class="clearfix product_info">
													<?php if($tprod->productPrice->discount > 0 && $tprod->productPrice->mrp > 0){ ?>
													<p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. <?=number_format($tprod->productPrice->mrp-$tprod->productPrice->price)?></span><span class="discountRate">(<?=$tprod->productPrice->discount?>% off)</span></span></p>
													<?php } ?>
													<p class="product_price alignleft"><b>Rs. <?=number_format($tprod->productPrice->price)?></b></p>
												</div>
											</div>

										</div><!--/ .product_item-->

									<?php } ?>
									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of vitamins & supplements - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-4-->

								<div id="tab-12" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of baby needs products - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">

									<?php
									$url = "men";
									$q = new CDbCriteria;
									$q->limit=6;
									$q->order='RAND()';
									$q->group = 'products.id';
									$q->addSearchCondition('tcategory.url', $url, true, 'AND', 'LIKE');
									$q->addSearchCondition('bcategory.url', $url, true, 'OR', 'LIKE');
									
									$q->addCondition('productDetails.product_id is not null');
									$q->addCondition('products.status = 0');
									$q->together = true;
									$q->alias="products";
									$q->with = array('types', 'brands', 'productDetails', 'types.typessubCategory.tcategory', 'brands.brandssubCategory.bcategory');
									$tempproducts = Products::model()->findAll($q);
									if(isset($tempproducts) && !empty($tempproducts))
									foreach($tempproducts as $tprod){
									$images = json_decode($tprod->images);
								?>
										
										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=isset($images) && !empty($images) && $images[0]->normal ? $images[0]->normal : Yii::app()->theme->baseUrl.'/images/no-img.png'; ?>" alt=""  >

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													<?php if(Yii::app()->user->isGuest){ ?>
														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container new_item_wishlist" data-pid="<?=$tprod->id?>">
														<span class="tooltip right">Add to Wishlist</span></a>
													<?php } else { ?>
													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container <?=$tprod->wishlist > 0 ? 'remove_item_wishlist': 'new_item_wishlist' ?>" data-pid="<?=$tprod->id?>"><span class="tooltip right"><?=$tprod->wishlist > 0 ? 'Remove from Wishlist': 'Add to Wishlist' ?></span></a>
													<?php } ?>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<div class="description">
												<?=CHtml::link(CString::truncate($tprod->name, 60, '...', false), array('site/products', 'url'=>$tprod->url), array('class'=>'productTitle'))?>

												<ul class="rating">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li></li>

												</ul>
												
												<div class="clearfix product_info">
													<?php if($tprod->productPrice->discount > 0 && $tprod->productPrice->mrp > 0){ ?>
													<p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. <?=number_format($tprod->productPrice->mrp-$tprod->productPrice->price)?></span><span class="discountRate">(<?=$tprod->productPrice->discount?>% off)</span></span></p>
													<?php } ?>
													<p class="product_price alignleft"><b>Rs. <?=number_format($tprod->productPrice->price)?></b></p>
												</div>
											</div>

										</div><!--/ .product_item-->

									<?php } ?>
									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of baby needs products - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-5-->

								<div id="tab-13" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of diet & fitness products - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">

									<?php
									$url = "women";
									$q = new CDbCriteria;
									$q->limit=6;
									$q->order='RAND()';
									$q->group = 'products.id';
									$q->addSearchCondition('tcategory.url', $url, true, 'AND', 'LIKE');
									$q->addSearchCondition('bcategory.url', $url, true, 'OR', 'LIKE');
									
									$q->addCondition('productDetails.product_id is not null');
									$q->addCondition('products.status = 0');
									$q->together = true;
									$q->alias="products";
									$q->with = array('types', 'brands', 'productDetails', 'types.typessubCategory.tcategory', 'brands.brandssubCategory.bcategory');
									$tempproducts = Products::model()->findAll($q);
									if(isset($tempproducts) && !empty($tempproducts))
									foreach($tempproducts as $tprod){
									$images = json_decode($tprod->images);
								?>
										
										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=isset($images) && !empty($images) && $images[0]->normal ? $images[0]->normal : Yii::app()->theme->baseUrl.'/images/no-img.png'; ?>" alt=""  

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													<?php if(Yii::app()->user->isGuest){ ?>
														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container new_item_wishlist" data-pid="<?=$tprod->id?>">
														<span class="tooltip right">Add to Wishlist</span></a>
													<?php } else { ?>
													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container <?=$tprod->wishlist > 0 ? 'remove_item_wishlist': 'new_item_wishlist' ?>" data-pid="<?=$tprod->id?>"><span class="tooltip right"><?=$tprod->wishlist > 0 ? 'Remove from Wishlist': 'Add to Wishlist' ?></span></a>
													<?php } ?>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<div class="description">
												<?=CHtml::link(CString::truncate($tprod->name, 60, '...', false), array('site/products', 'url'=>$tprod->url), array('class'=>'productTitle'))?>

												<ul class="rating">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li></li>

												</ul>
												
												<div class="clearfix product_info">
													<?php if($tprod->productPrice->discount > 0 && $tprod->productPrice->mrp > 0){ ?>
													<p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. <?=number_format($tprod->productPrice->mrp-$tprod->productPrice->price)?></span><span class="discountRate">(<?=$tprod->productPrice->discount?>% off)</span></span></p>
													<?php } ?>
													<p class="product_price alignleft"><b>Rs. <?=number_format($tprod->productPrice->price)?></b></p>
												</div>
											</div>

										</div><!--/ .product_item-->

									<?php } ?>
									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of diet & fitness products - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-6-->

								<div id="tab-14" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of sexual well-being - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">
										
									<?php
									$url = "kids";
									$q = new CDbCriteria;
									$q->limit=6;
									$q->order='RAND()';
									$q->group = 'products.id';
									$q->addSearchCondition('tcategory.url', $url, true, 'AND', 'LIKE');
									$q->addSearchCondition('bcategory.url', $url, true, 'OR', 'LIKE');
									
									$q->addCondition('productDetails.product_id is not null');
									$q->addCondition('products.status = 0');
									$q->together = true;
									$q->alias="products";
									$q->with = array('types', 'brands', 'productDetails', 'types.typessubCategory.tcategory', 'brands.brandssubCategory.bcategory');
									$tempproducts = Products::model()->findAll($q);
									if(isset($tempproducts) && !empty($tempproducts))
									foreach($tempproducts as $tprod){
									$images = json_decode($tprod->images);
								?>
										
										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=isset($images) && !empty($images) && $images[0]->normal ? $images[0]->normal : Yii::app()->theme->baseUrl.'/images/no-img.png'; ?>" alt=""  >

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													<?php if(Yii::app()->user->isGuest){ ?>
														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container new_item_wishlist" data-pid="<?=$tprod->id?>">
														<span class="tooltip right">Add to Wishlist</span></a>
													<?php } else { ?>
													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container <?=$tprod->wishlist > 0 ? 'remove_item_wishlist': 'new_item_wishlist' ?>" data-pid="<?=$tprod->id?>"><span class="tooltip right"><?=$tprod->wishlist > 0 ? 'Remove from Wishlist': 'Add to Wishlist' ?></span></a>
													<?php } ?>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<div class="description">
												<?=CHtml::link(CString::truncate($tprod->name, 60, '...', false), array('site/products', 'url'=>$tprod->url), array('class'=>'productTitle'))?>

												<ul class="rating">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li></li>

												</ul>
												
												<div class="clearfix product_info">
													<?php if($tprod->productPrice->discount > 0 && $tprod->productPrice->mrp > 0){ ?>
													<p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. <?=number_format($tprod->productPrice->mrp-$tprod->productPrice->price)?></span><span class="discountRate">(<?=$tprod->productPrice->discount?>% off)</span></span></p>
													<?php } ?>
													<p class="product_price alignleft"><b>Rs. <?=number_format($tprod->productPrice->price)?></b></p>
												</div>
											</div>

										</div><!--/ .product_item-->

									<?php } ?>
									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of sexual well-being  - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-7-->
								
								<div id="tab-15" class="tab_container">

									<!-- - - - - - - - - - - - - - Carousel of sexual well-being - - - - - - - - - - - - - - - - -->

									<div class="owl_carousel carousel_in_tabs type_2">
										
										<?php
									$url = "health-and-fitness";
									$q = new CDbCriteria;
									$q->limit=6;
									$q->order='RAND()';
									$q->group = 'products.id';
									
									$q->addSearchCondition('tcategory.url', $url, true, 'AND', 'LIKE');
									$q->addSearchCondition('bcategory.url', $url, true, 'OR', 'LIKE');
									
									$q->addCondition('productDetails.product_id is not null');
									$q->addCondition('products.status = 0');
									$q->together = true;
									$q->alias="products";
									$q->with = array('types', 'brands', 'productDetails', 'types.typessubCategory.tcategory', 'brands.brandssubCategory.bcategory');
									$tempproducts = Products::model()->findAll($q);
									if(isset($tempproducts) && !empty($tempproducts))
									foreach($tempproducts as $tprod){
									$images = json_decode($tprod->images);
								?>
										
										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?=isset($images) && !empty($images) && $images[0]->normal ? $images[0]->normal : Yii::app()->theme->baseUrl.'/images/no-img.png'; ?>" alt=""  >

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													<?php if(Yii::app()->user->isGuest){ ?>
														<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container new_item_wishlist" data-pid="<?=$tprod->id?>">
														<span class="tooltip right">Add to Wishlist</span></a>
													<?php } else { ?>
													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container <?=$tprod->wishlist > 0 ? 'remove_item_wishlist': 'new_item_wishlist' ?>" data-pid="<?=$tprod->id?>"><span class="tooltip right"><?=$tprod->wishlist > 0 ? 'Remove from Wishlist': 'Add to Wishlist' ?></span></a>
													<?php } ?>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

												</div><!--/ .actions_wrap-->
												
												<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

											</div><!--/. image_wrap-->

											<div class="description">
												<?=CHtml::link(CString::truncate($tprod->name, 60, '...', false), array('site/products', 'url'=>$tprod->url), array('class'=>'productTitle'))?>

												<ul class="rating">

													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li class="active"></li>
													<li></li>

												</ul>
												
												<div class="clearfix product_info">
													<?php if($tprod->productPrice->discount > 0 && $tprod->productPrice->mrp > 0){ ?>
													<p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. <?=number_format($tprod->productPrice->mrp-$tprod->productPrice->price)?></span><span class="discountRate">(<?=$tprod->productPrice->discount?>% off)</span></span></p>
													<?php } ?>
													<p class="product_price alignleft"><b>Rs. <?=number_format($tprod->productPrice->price)?></b></p>
												</div>
											</div>

										</div><!--/ .product_item-->

									<?php } ?>
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
			<script type="text/javascript">
			$(function(){
				$(document).on('click', '.new_item_wishlist', function(){
					var url = "<?=$this->createUrl('/site/addwishlist')?>";
					var obj = $(this);
					$.post(url,{pid: $(obj).attr('data-pid')}, function(d){ d = $.parseJSON(d); if(d.status == "success") { $(obj).find("span").text("Remove from Wishlist"); $( obj ).switchClass( "new_item_wishlist", "remove_item_wishlist"); } });
					return false;
				});
				$(document).on('click', '.remove_item_wishlist', function(){
					var url = "<?=$this->createUrl('/site/removewishlist')?>";
					var obj = $(this);
					$.post(url,{pid: $(obj).attr('data-pid')}, function(d){ d = $.parseJSON(d); if(d.status == "success"){ $(obj).find("span").text("Add to Wishlist"); $( obj ).switchClass( "remove_item_wishlist", "new_item_wishlist"); }});
					return false;
				});
			});

			</script>
			