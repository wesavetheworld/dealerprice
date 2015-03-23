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
            <div id="pageContents" class="page">
                <div id="menuPanel">
                    <div id="menuPanelItems">
                    	<ul>
                            <li><a href="<?=$this->createUrl('/customer/default/index')?>"><i class="fa fa-lock"></i> My Account</a></li>
                            <li><a href="<?=$this->createUrl('/customer/default/wishlist')?>"><i class="fa fa-tags"></i> Wishlist</a></li>
							<li><a href="<?=$this->createUrl('/customer/default/alerts')?>" ><i class="fa fa-bell"></i> Alerts</a></li>
							<li><a href="<?=$this->createUrl('/customer/default/subscriptions')?>" class="activeMnPnItm"><i class="fa fa-envelope"></i> Subscriptions</a></li>
                            <li><a href="<?=$this->createUrl('/site/logout')?>"><i class="fa fa-sign-out"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
				<div id="contentPanel">
                    <div id="panelContents">
                        <div id="errorSum"></div>
                    	<form id="personalDetails" class="accountForms" method="post" action="<?=$this->createAbsoluteUrl('/customer/default/subscriptions')?>">
                        <label><span>Subscribe</span>
                            <?php $check = NewsLetterUsers::model()->findByAttributes(array('email'=>Yii::app()->user->email)); ?>
                            <input type="hidden" name="forSupport" />
                            <input type="checkbox" id="email" name="subscribe" required <?= isset($check) ? 'checked': ''?> /></label>
                        <div style="clear: both"></div>
                            <?php echo CHtml::ajaxSubmitButton('Subscribe',CHtml::normalizeUrl(array('/customer/default/subscriptions')),
             array(
                 'dataType'=>'json',
                 'type'=>'post',
                 'success'=>'function(data) {
                    $("#submitProfile").removeAttr("disabled");
                    if(data.status=="success")
                    $("#errorSum").text("Your request successfully registered.").css({"color": "green", "display":"block"}).delay(5000).fadeOut();
                }',
                'beforeSend'=>'function(){ $("#submitProfile").attr("disabled","disabled");  }'),array('id'=>'submitProfile','class'=>'accSubmits', 'name'=>'submitAcc')); ?>
                        </form>
                    </div>
                </div>
            </div>
            <div style="clear: both"></div>
        <!-- End of Contents -->