<?php
/* @var $this ProductdetailsController */
/* @var $model ProductDetails */

$this->breadcrumbs=array(
	'Product Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Back To Products', 'url'=>array('/admin/products/admin')),
);
?>

<h1>Create ProductDetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<?php
$this->renderPartial('admin',array('model'=>$model)); ?>