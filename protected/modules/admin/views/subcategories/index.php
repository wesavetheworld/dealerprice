<?php
/* @var $this SubcategoriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sub Categories',
);

$this->menu=array(
	array('label'=>'Create SubCategories', 'url'=>array('create')),
	array('label'=>'Manage SubCategories', 'url'=>array('admin')),
);
?>

<h1>Sub Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
