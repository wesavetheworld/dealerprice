<?php
/* @var $this AffiliatetrackingController */
/* @var $model AffiliateTracking */

$this->breadcrumbs=array(
	'Affiliate Trackings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AffiliateTracking', 'url'=>array('index')),
	array('label'=>'Manage AffiliateTracking', 'url'=>array('admin')),
);
?>

<h1>Create AffiliateTracking</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>