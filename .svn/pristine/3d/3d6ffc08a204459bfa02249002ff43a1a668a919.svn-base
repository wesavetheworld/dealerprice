<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php $types = ProductType::model()->with('subCategory')->findAll();
		$temp = array();
		foreach($types as $t){
		$temp[$t->id]=$t->subCategory->name.' - '.$t->name;
		} ?>
	<div class="row">
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo CHtml::dropDownList('Products[type_id]', $model->type_id, $temp, array('empty' => '(Select product type)')); ?>
		<?php echo $form->error($model,'type_id'); ?>
	</div>

	<?php $types = Brands::model()->with('subCategory')->findAll();
		$temp = array();
		foreach($types as $t){
		$temp[$t->id]=$t->subCategory->name.' - '.$t->name;
		} ?>
		
	<div class="row">
		<?php echo $form->labelEx($model,'brand_id'); ?>
		<?php echo CHtml::dropDownList('Products[brand_id]', $model->brand_id, $temp, array('empty' => '(Select brand)')); ?>
		<?php echo $form->error($model,'brand_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'video_url'); ?>
		<?php echo $form->textField($model,'video_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'video_url'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
	$(document).ready( function() {
		$("#Products_name").stringToSlug({
			setEvents: 'keyup keydown blur',
			getPut: '#Products_url',
			space: '-',
		});
        $("#Products_url").stringToSlug({
			setEvents: 'blur',
			getPut: '#Products_url',
			space: '-',
		});
	});
</script>