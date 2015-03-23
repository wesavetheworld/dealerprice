<!-- End of Header -->
            <div id="pageHeader">
                <div id="innerPageHeader">
                    <div id="mainMenuBtn">
                        <span id="allCatBtn">
                            <i class="fa fa-th-large"></i><a href="#">All Categories</a>
                        </span>
                    </div>
                    <!-- End of Main Menu Button -->
                    <div id="breadcrumb">

						<div id="breadcrumbItm">
                            <span id="bcPnt"><?=CHtml::link("Home", array('/site/index')); ?></span> <span class="nextItm">&gt;</span> <span class="bcItm lastItm"><?=CHtml::link('Alerts', array('/customer/default/alerts')); ?></span>
                        </div>
						
                    </div>
                    <!-- End of Breadcrumb -->
					<div id="sorting">
						<div id="sortMenu" class="lastLogin">
							<div>Last logged in:&nbsp;&nbsp;<?=Yii::app()->user->past > 0 ? date("F j Y, g:i a", Yii::app()->user->past): ''?></div>
						</div>
					</div>
                </div>    
            </div>
            <div id="pageMegaMenu">
                <div id="megaMenu" class="pageMenu">
               		<?php $this->beginContent('//layouts/mega-menu'); $this->endContent(); ?>
                </div>  
                <!-- End of Mega Menu -->
            </div>
            <!-- End of Menu and Slider -->
			<div id="pageContents" class="page">
                <div id="menuPanel">
                    <div id="menuPanelItems">
                    	<ul>
                            <li><a href="<?=$this->createUrl('/customer/default/index')?>"><i class="fa fa-lock"></i> My Account</a></li>
                            <li><a href="<?=$this->createUrl('/customer/default/wishlist')?>"><i class="fa fa-tags"></i> Wishlist</a></li>
							<li><a href="<?=$this->createUrl('/customer/default/alerts')?>" class="activeMnPnItm"><i class="fa fa-bell"></i> Alerts</a></li>
							<li><a href="<?=$this->createUrl('/customer/default/subscriptions')?>"><i class="fa fa-envelope"></i> Subscriptions</a></li>
                            <li><a href="<?=$this->createUrl('/site/logout')?>"><i class="fa fa-sign-out"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div id="contentPanel">
                    <div id="panelContents">
					<?php if(isset($alerts) && !empty($alerts))
						foreach($alerts as $a){ ?>
						<!-- Start of Alerts -->
                    	<div class="alerts" data-aid="<?=$a->id?>">
							<div class="alertItmImg">
								<span>
									<?php $images = json_decode($a->product->images); ?>
									<img src="<?=str_replace('400x400', '100x100', $images[0]->normal)?>" alt="" width="40">
								</span>
							</div>
							<div class="alertItmDesc">
								<div class="alertItm tblDiv">
									<span>
										<h3><?=CHtml::link($a->product->name, array('/site/products', 'url'=>$a->product->url))?></h3>
									</span>
								</div>
								<div class="alertPrice tblDiv">
									<span>
										Rs. <input class="targetPrice" name="target_price" value="<?=$a->target?>"/>
									</span>
								</div>
								<div class="alertCommands tblDiv">
									<span><i class="fa fa-floppy-o save-alerts"></i></span>
									<span><i class="fa fa-times remove-alerts"></i></span>
								</div>
							</div>
						</div>
						<!-- End of Alerts -->
						<?php } else { ?>
						<div><h1>Product Alerts Empty...!</h1></div>
						<?php } ?>
                    </div>
					
                </div>
				<div style="clear:both"></div>
			</div>
			<!-- End of Page Contents -->
			<script type="text/javascript">
			$(function(){
			$(document).on('click', '.remove-alerts', function(){
					var url = "<?=$this->createUrl('/customer/default/removealert')?>";
					var aid = $(this).closest('.alerts').attr('data-aid');
					var obj = $(this);
					if(confirm('Are you sure?'))
					$.post(url,{aid: aid}, function(d){ d = $.parseJSON(d); if(d.status == "success") $(obj).closest('.alerts').remove(); });
					return false;
				});
			$(document).on('click', '.save-alerts', function(){
				var url = "<?=$this->createUrl('/customer/default/updatealert')?>";
					var aid = $(this).closest('.alerts').attr('data-aid');
					var newTarget = $(this).closest('.alerts').find('.targetPrice').val();
					var obj = $(this);
					$.post(url,{aid: aid, target: newTarget}, function(d){ d = $.parseJSON(d); if(d.status == "success") $(obj).closest('.alerts').find('.targetPrice').css('border', '2px solid green'); });
					return false;
			});
			});
			</script>