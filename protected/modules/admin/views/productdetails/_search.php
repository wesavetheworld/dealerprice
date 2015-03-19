<?php
/* @var $this ProductdetailsController */
/* @var $model ProductDetails */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'store_id'); ?>
		<?php echo CHtml::dropDownList('ProductDetails[store_id]', $model->store_id, CHtml::listData(Stores::model()->findAll(), 'id', 'name'), array('empty' => '(Select store)')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'affiliate_url'); ?>
		<?php echo $form->textField($model,'affiliate_url',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mrp'); ?>
		<?php echo $form->textField($model,'mrp',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->