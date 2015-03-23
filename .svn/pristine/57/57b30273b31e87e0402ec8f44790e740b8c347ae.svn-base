<?php
/* @var $this ProductreviewsController */
/* @var $model ProductReviews */

$this->breadcrumbs=array(
	'Product Reviews'=>array('index'),
	$model->review_id,
);

$this->menu=array(
	array('label'=>'List ProductReviews', 'url'=>array('index')),
	array('label'=>'Create ProductReviews', 'url'=>array('create')),
	array('label'=>'Update ProductReviews', 'url'=>array('update', 'id'=>$model->review_id)),
	array('label'=>'Delete ProductReviews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->review_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductReviews', 'url'=>array('admin')),
);
?>

<h1>View ProductReviews #<?php echo $model->review_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'review_id',
		'user_id',
		'product_id',
		'reviewer_name',
		'review_title',
		'review',
		'rating',
		'verified',
	),
)); ?>
