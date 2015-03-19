<?php
/* @var $this SubcategoriesController */
/* @var $model SubCategories */

$this->breadcrumbs=array(
	'Sub Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List SubCategories', 'url'=>array('index')),
	array('label'=>'Create SubCategories', 'url'=>array('create')),
	array('label'=>'Update SubCategories', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SubCategories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubCategories', 'url'=>array('admin')),
);
?>

<h1>View SubCategories #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_id',
		'name',
		'url',
		'description',
		'status',
	),
)); ?>
