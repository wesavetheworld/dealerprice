<?php
/* @var $this AffiliatetrackingController */
/* @var $model AffiliateTracking */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'affiliate-tracking-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id'); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_details_id'); ?>
		<?php echo $form->textField($model,'product_details_id'); ?>
		<?php echo $form->error($model,'product_details_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'counter'); ?>
		<?php echo $form->textField($model,'counter',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'counter'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->