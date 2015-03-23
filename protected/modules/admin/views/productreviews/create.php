<?php if(Yii::app()->user->hasFlash('review')){ ?>

<div style="color:green;">
	<?php echo Yii::app()->user->getFlash('review'); ?>
</div>

<?php } ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>