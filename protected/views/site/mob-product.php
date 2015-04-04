<div class="main">
	  <div class="content_box">
		<div class="container">
			<div class="row">
				<div class="col-md-9 index_right">
				<div class="content_grid">
				    <div class="col_1_of_3 span_1_of_3"> 
						<div class="view view-first itemDetails">
							   <div class="inner_content clearfix">
									<div class="product_image">
										<?php $images = json_decode($product->images); ?>
										<img src="<?=(isset($images) && !empty($images) && !empty($images[0]->normal)) ? $images[0]->normal: Yii::app()->theme->baseUrl.'/images/no-img.png'; ?>" class="img-responsive" alt="" width='100'/>
									</div>
									<div class="product_container">
										<div class="cart-left">
											<p class="title"><?=$product->name?></p>
										</div>
										<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                        <?php $rating = round($product->productPrice->rating); ?>
										<ul class="rating">
											<li class="<?=$rating>=1 ? 'active': ''?>"></li>
											<li class="<?=$rating>=2 ? 'active': ''?>"></li>
											<li class="<?=$rating>=3 ? 'active': ''?>"></li>
											<li class="<?=$rating>=4 ? 'active': ''?>"></li>
											<li class="<?=$rating>=5 ? 'active': ''?>"></li>
										</ul>
                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->
										<div class="noOfStores">Available at <?=count($product->productDetails)?> Store(s)</div>
										<div class="bestPrice">Best Price On</div>
										<span class="bestPriceStore">
										<?php if(strpos($product->productPrice->affiliate_url, 'amazon') !== false) { ?>
											<img src="<?=Yii::app()->theme->baseUrl?>/mob/images/amazon-store-logo.png"/>
										<?php } ?>
										<?php if(strpos($product->productPrice->affiliate_url, 'flipkart') !== false) { ?>
											<img src="<?=Yii::app()->theme->baseUrl?>/mob/images/flipkart-store-logo.png"/>
										<?php } ?>
										<?php if(strpos($product->productPrice->affiliate_url, 'snapdeal') !== false) { ?>
											<img src="<?=Yii::app()->theme->baseUrl?>/mob/images/snapdeal-store-logo.png"/>
										<?php } ?>
										<?php if(strpos($product->productPrice->affiliate_url, 'infibeam') !== false) { ?>
											<img src="<?=Yii::app()->theme->baseUrl?>/mob/images/infibeam-store-logo.png"/>
										<?php } ?>
										</span>
										
										
									<?php if($product->productPrice->discount > 0 && $product->productPrice->mrp > 0){ ?>
									<div class="price"><span class="mrp">Rs. <?=number_format($product->productPrice->mrp)?></span> (<?=$product->productPrice->discount?>% off) </div>
									<?php } ?>
									<div class="discountedPrice">Rs. <?=number_format($product->productPrice->price)?></div>
										<?=CHtml::link('BUY NOW', array('/site/affiliateurl'), array('class'=>"button_blue middle_btn buy-button", 'data-redirect'=>$product->productPrice->id, 'target'=>'_blank'))?>
										<div class="clear"></div>
									</div>	
								</div>
						</div>
						<!-- End of Product -->
                        <div id="accordion">
                            <h3>PRICES</h3>
                                <div>
                                <div id="storePrices">
												<?php if(isset($product->productDetails))
													foreach($product->productDetails as $p) 
													if($p->id != $product->productPrice->id) {?>
												
													<!-- Start of Store -->
													<div class="store">
														<div class="itmStoreLogo">
															<?php if (strpos($p->affiliate_url, 'amazon') !== false){ ?>
															<a href="http://www.amazon.in" target="_blank" class="amazonStore">Amazon</a>
															<?php } else if(strpos($p->affiliate_url, 'flipkart') !== false){?>
															<a href="http://www.flipkart.com" target="_blank" class="flipkartStore">Flipkart</a>
															<?php } else if(strpos($p->affiliate_url, 'snapdeal') !== false){?>
															<a href="http://www.snapdeal.com" target="_blank" class="snapdealStore">Snapdeal</a>
															<?php } else if(strpos($p->affiliate_url, 'infibeam') !== false){?>
															<a href="http://www.infibeam.com/" target="_blank" class="infibeamStore">Infibeam</a>
															<?php } ?>
														</div>
														<div class="itmStorePrice">
															<span>Rs. <?=number_format($p->price)?></span>
														</div>
														<div class="itmStoreBuyBtn">
														<?=CHtml::link('BUY AT STORE', array('/site/affiliateurl'), array('class'=>"button_blue middle_btn storeBtn buy-button", 'data-redirect'=>$p->id, 'target'=>'_blank'))?>
														</div>
													</div>
													<!-- End of Stores -->
													<?php } ?>
												
													
												</div>
                                </div>
                            <h3>OVERVIEW</h3>
                            <div>
                                <?=$product->overview?>
                            </div>
                            <h3>SPECIFICATIONS</h3>
                            <div>
                                <?=$product->specifications?>
                            </div>
                            <h3>PHOTOS</h3>
                            <div id="ProdPhotoGallery">
								<div id="owl-example" class="owl-carousel">

                                            <?php
											$firstime = true;
											if(!empty($images))
												foreach($images as $img){
												if(!$firstime && isset($img) && !empty($img)){ ?>
											<div>
                                            <a class="imgProdImg" rel="prodImgGallery" href="<?=!empty($img->zoom) ?  $img->zoom : $img->normal?>" >

											<img alt="Product Image One" src="<?=str_replace("400x400","100x100",$img->normal)?>">
                                            </a>
											</div>
												<?php } $firstime = false; } ?>

									
								</div>	
                            </div>
                        </div>
				    </div>
					<div class="clear"></div>
			  </div>
		 </div>
		</div>
     </div></div></div>
	 		<script type="text/javascript">
			$(function(){

				$('.buy-button').click(function(){
					var url ="<?=$this->createUrl('/site/selectedstore')?>";
					var data = $.ajax({type: "POST", url: url, data: {id: $(this).attr('data-redirect')}, async: false}).responseText;  
					d = $.parseJSON(data); 
					if(d.status == "success")
						return true;
					else
					return false;
				});
			});
			</script>
