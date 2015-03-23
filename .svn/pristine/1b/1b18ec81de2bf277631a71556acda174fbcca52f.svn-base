<?php
/* @var $this ProductreviewsController */
/* @var $model ProductReviews */

$this->breadcrumbs=array(
	'Product Reviews'=>array('index'),
	$model->review_id=>array('view','id'=>$model->review_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductReviews', 'url'=>array('index')),
	array('label'=>'Create ProductReviews', 'url'=>array('create')),
	array('label'=>'View ProductReviews', 'url'=>array('view', 'id'=>$model->review_id)),
	array('label'=>'Manage ProductReviews', 'url'=>array('admin')),
);
?>

<h1>Update ProductReviews <?php echo $model->review_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>