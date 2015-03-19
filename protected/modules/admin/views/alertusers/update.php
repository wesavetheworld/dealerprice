<?php
/* @var $this AlertusersController */
/* @var $model AlertUsers */

$this->breadcrumbs=array(
	'Alert Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlertUsers', 'url'=>array('index')),
	array('label'=>'Create AlertUsers', 'url'=>array('create')),
	array('label'=>'View AlertUsers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AlertUsers', 'url'=>array('admin')),
);
?>

<h1>Update AlertUsers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>