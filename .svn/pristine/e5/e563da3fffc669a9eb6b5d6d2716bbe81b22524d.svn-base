<?php
/* @var $this AlertusersController */
/* @var $model AlertUsers */

$this->breadcrumbs=array(
	'Alert Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AlertUsers', 'url'=>array('index')),
	array('label'=>'Create AlertUsers', 'url'=>array('create')),
	array('label'=>'Update AlertUsers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AlertUsers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlertUsers', 'url'=>array('admin')),
);
?>

<h1>View AlertUsers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'target',
		'mobile',
	),
)); ?>
