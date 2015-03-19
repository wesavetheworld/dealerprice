<div id="pageContents">
<?php if(Yii::app()->user->hasFlash('review')){ ?>

<div style="color:green;">
	<?php echo Yii::app()->user->getFlash('review'); ?>
</div>

<?php } ?>
<h1>Write A Review</h1>
<?php $prod = Products::model()->findByPk($_GET['id']); ?>
<h2>Item: <?=$prod->name?></h2>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>