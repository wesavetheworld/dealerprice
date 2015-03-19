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

	<div class="row">
		<?php echo $form->labelEx($model,'reviewer_name'); ?>
		<?php echo $form->textField($model,'reviewer_name',array('size'=>60,'maxlength'=>255, 'required'=>'required')); ?>
		<?php echo $form->error($model,'reviewer_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'review_title'); ?>
		<?php echo $form->textField($model,'review_title',array('size'=>60,'maxlength'=>255, 'required'=>'required')); ?>
		<?php echo $form->error($model,'review_title'); ?>
	</div>

	<div class="row reviewMsg">
		<?php echo $form->labelEx($model,'review'); ?>
		<?php echo $form->textArea($model,'review',array('rows'=>6, 'cols'=>50, 'required'=>'required')); ?>
		<?php echo $form->error($model,'review'); ?>
	</div>

	<div class="row">
    	<?php echo $form->labelEx($model,'rating'); ?>
        <div class="stars">
            <input type="radio" name="ProductReviews[rating]" class="star-1" id="star-1" value="1" <?=$model->rating == 1 ? 'checked' : ''?>/>
            <label class="star-1" for="star-1">1</label>
            <input type="radio" name="ProductReviews[rating]" class="star-2" id="star-2" value="2" <?=$model->rating == 2 ? 'checked' : ''?>/>
            <label class="star-2" for="star-2">2</label>
            <input type="radio" name="ProductReviews[rating]" class="star-3" id="star-3" value="3" <?=$model->rating == 3 ? 'checked' : ''?>/>
            <label class="star-3" for="star-3">3</label>
            <input type="radio" name="ProductReviews[rating]" class="star-4" id="star-4" value="4" <?=$model->rating == 4 ? 'checked' : ''?>/>
            <label class="star-4" for="star-4">4</label>
            <input type="radio" name="ProductReviews[rating]" class="star-5" id="star-5" value="5" <?=$model->rating == 5 ? 'checked' : ''?>/>
            <label class="star-5" for="star-5">5</label>
            <span></span>
        </div>
    <?php echo $form->error($model,'rating'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'SUBMIT' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->