<?php
/* @var $this ProductdetailsController */
/* @var $model ProductDetails */

$this->breadcrumbs=array(
	'Product Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductDetails', 'url'=>array('index')),
	array('label'=>'Create ProductDetails', 'url'=>array('create')),
	array('label'=>'Update ProductDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductDetails', 'url'=>array('admin')),
);
?>

<h1>View ProductDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'store_id',
		'affiliate_url',
		'mrp',
		'price',
	),
)); ?>
