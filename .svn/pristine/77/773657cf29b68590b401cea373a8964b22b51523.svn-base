<?php
/* @var $this ProducttypeController */
/* @var $model ProductType */

$this->breadcrumbs=array(
	'Product Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ProductType', 'url'=>array('index')),
	array('label'=>'Create ProductType', 'url'=>array('create')),
	array('label'=>'Update ProductType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductType', 'url'=>array('admin')),
);
?>

<h1>View ProductType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sub_category_id',
		'name',
		'url',
		'description',
		'status',
	),
)); ?>
