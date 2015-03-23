<?php
/* @var $this AffiliatetrackingController */
/* @var $model AffiliateTracking */

$this->breadcrumbs=array(
	'Affiliate Trackings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AffiliateTracking', 'url'=>array('index')),
	array('label'=>'Create AffiliateTracking', 'url'=>array('create')),
	array('label'=>'Update AffiliateTracking', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AffiliateTracking', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AffiliateTracking', 'url'=>array('admin')),
);
?>

<h1>View AffiliateTracking #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'product_details_id',
		'counter',
	),
)); ?>
