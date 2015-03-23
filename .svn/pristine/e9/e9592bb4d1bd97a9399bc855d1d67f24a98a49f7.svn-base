<?php
/* @var $this NewsLetterController */
/* @var $model NewsLetter */
/* @var $form CActiveForm */
?>
<div class="form">
<?php if(Yii::app()->user->hasFlash('users')){ ?>

<div class="flash-success"><?php print_r(Yii::app()->user->getFlash('users')); ?></div>

<?php } ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-letter-newsletter-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'send_to'); ?>
		<?php echo ZHtml::enumDropDownList($model,'send_to'); ?>
		<?php echo $form->error($model,'send_to'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject'); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'message'); ?>
		<?php $this->widget('application.extensions.ckeditor.CKEditor', array(
			'model'=>$model,
			'attribute'=>'message',
			'language'=>'en',
			'editorTemplate'=>'full',
			)); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->