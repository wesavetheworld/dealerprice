<?php
/* @var $this BrandsController */
/* @var $model Brands */

$this->breadcrumbs=array(
	'Brands'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Brands', 'url'=>array('index')),
	array('label'=>'Create Brands', 'url'=>array('create')),
	array('label'=>'View Brands', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Brands', 'url'=>array('admin')),
);
?>

<h1>Update Brands <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>