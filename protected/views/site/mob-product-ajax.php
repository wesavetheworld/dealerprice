				<?php foreach($products as $prod){ 
					$images = json_decode($prod->images);
					?>
                    <div class="view view-first">
							<a href="<?=$this->createUrl('/site/products', array('url'=>$prod->url))?>">
							   <div class="inner_content clearfix">
									<div class="product_image">
										<?=CHtml::image(isset($images) && !empty($images) && $images[0]->normal ? str_replace("400x400","100x100",$images[0]->normal) : Yii::app()->theme->baseUrl.'/images/no-img.png', "", array('class'=>'img-responsive'))?>
									</div>
									<div class="product_container">
										<div class="cart-left">
											<p class="title"><?=$prod->name?></p>
										</div>
										<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                        <?php $rating = round($prod->productPrice->rating); ?>
										<ul class="rating">
											<li class="<?=$rating>=1 ? 'active': ''?>"></li>
											<li class="<?=$rating>=2 ? 'active': ''?>"></li>
											<li class="<?=$rating>=3 ? 'active': ''?>"></li>
											<li class="<?=$rating>=4 ? 'active': ''?>"></li>
											<li class="<?=$rating>=5 ? 'active': ''?>"></li>
										</ul>
                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->
										<div class="noOfStores"><?=count($prod->productDetails)?> Stores</div>
										<?php if($prod->productPrice->discount > 0 && $prod->productPrice->mrp > 0){ ?>
										<div class="price"><span class="mrp">Rs. <?=number_format($prod->productPrice->mrp)?></span> (<?=$prod->productPrice->discount?>% off)</div>
										<?php } ?>
										<div class="discountedPrice">Rs. <?=number_format($prod->productPrice->price)?></div>

										
										<div class="clear"></div>
									</div>	
								</div>
							</a>
					</div>
					<?php } ?>
