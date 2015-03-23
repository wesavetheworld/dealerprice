<?php
/* @var $this ProductreviewsController */
/* @var $data ProductReviews */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('review_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->review_id), array('view', 'id'=>$data->review_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reviewer_name')); ?>:</b>
	<?php echo CHtml::encode($data->reviewer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('review_title')); ?>:</b>
	<?php echo CHtml::encode($data->review_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('review')); ?>:</b>
	<?php echo CHtml::encode($data->review); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating')); ?>:</b>
	<?php echo CHtml::encode($data->rating); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('verified')); ?>:</b>
	<?php echo CHtml::encode($data->verified); ?>
	<br />

	*/ ?>

</div>