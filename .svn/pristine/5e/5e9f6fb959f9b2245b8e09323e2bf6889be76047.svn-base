<?php
/* @var $this ProductreviewsController */
/* @var $model ProductReviews */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-reviews-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'reviewer_name'); ?>
		<?php echo $form->textField($model,'reviewer_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'reviewer_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'review_title'); ?>
		<?php echo $form->textField($model,'review_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'review_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'review'); ?>
		<?php echo $form->textArea($model,'review',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'review'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rating'); ?>
	<?php echo CHtml::activeDropDownList($model, 'rating', array(1=>'1', 2=>'2', 3=>'3', 4=>'4', 5=>'5')); ?>
		<?php echo $form->error($model,'rating'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->