<?php
/* @var $this NewsLetterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'News Letters',
);

$this->menu=array(
	array('label'=>'Create Account', 'url'=>array('create')),
	array('label'=>'Manage Accounts', 'url'=>array('admin')),
        array('label'=>'News Letter', 'url'=>array('newsletter')),
);
?>

<h1>News Letters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
