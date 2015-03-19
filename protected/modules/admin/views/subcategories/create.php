<?php
/* @var $this SubcategoriesController */
/* @var $model SubCategories */

$this->breadcrumbs=array(
	'Sub Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SubCategories', 'url'=>array('index')),
	array('label'=>'Manage SubCategories', 'url'=>array('admin')),
);
?>

<h1>Create SubCategories</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>