				<?php foreach($products as $prod){ 
					$images = json_decode($prod->images);
					?>
                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                    <div class="product_item keySpec" data-prodid="<?=$prod->id?>">
                        <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                        <div class="image_wrap">
                            <img src="<?=$images[0]->normal ? $images[0]->normal : Yii::app()->theme->baseUrl.'/images/no-img.png'; ?>" alt="" width="126" height="250">
                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                <div class="actions_wrap">
								<?php if(Yii::app()->user->isGuest){ ?>
                                    <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container new_item_wishlist" data-pid="<?=$prod->id?>">
                                    <span class="tooltip right">Add to Wishlist</span></a>
								<?php } else { ?>
								<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container <?=$prod->wishlist ? 'remove_item_wishlist': 'new_item_wishlist' ?>" data-pid="<?=$prod->id?>">
                                    <span class="tooltip right"><?=$prod->wishlist ? 'Remove from Wishlist': 'Add to Wishlist' ?></span></a>
								<?php } ?>
                                    <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container">
                                    <span class="tooltip left">Add to Compare</span></a>
                                </div><!--/ .actions_wrap-->
								<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                        </div><!--/. image_wrap-->
                        <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                        <div class="description">
							<?=CHtml::link(CString::truncate($prod->name, 60, '...', false), array('site/products', 'url'=>$prod->url), array('class'=>'productTitle'))?>
                            <div class="clearfix product_info">
								<?php if($prod->productPrice->discount > 0 && $prod->productPrice->mrp > 0){ ?>
                                <p class="product_price alignright"><span class="discount"><span class="discountRs">Rs. <?=number_format($prod->productPrice->mrp-$prod->productPrice->price)?></span><span class="discountRate">(<?=$prod->productPrice->discount?>% off)</span></span></p>
								<?php } ?>
                                <p class="product_price alignleft"><b>Rs. <?=number_format($prod->productPrice->price)?></b></p>
                            </div>
                        </div>
                        <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                    </div><!--/ .product_item-->
                    <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
					<?php } ?>
