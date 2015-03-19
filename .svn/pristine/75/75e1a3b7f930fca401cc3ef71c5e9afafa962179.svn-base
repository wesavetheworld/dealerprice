<?php
/* @var $this ProductdetailsController */
/* @var $model ProductDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-details-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'store_id'); ?>
		<?php echo CHtml::dropDownList('ProductDetails[store_id]', $model->store_id, CHtml::listData(Stores::model()->findAll(), 'id', 'name'), array('empty' => '(Select store)')); ?>
		<?php echo $form->error($model,'store_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'affiliate_url'); ?>
		<?php echo $form->textField($model,'affiliate_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'affiliate_url'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->