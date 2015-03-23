<?php
/* @var $this NewsLetterController */
/* @var $model NewsLetter */

$this->breadcrumbs=array(
	'News Letters'=>array('index'),
	$model->news_letter_id,
);

$this->menu=array(
	array('label'=>'List Accounts', 'url'=>array('index')),
	array('label'=>'Create Account', 'url'=>array('create')),
	array('label'=>'Update Account', 'url'=>array('update', 'id'=>$model->news_letter_id)),
	array('label'=>'Delete Account', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->news_letter_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Accounts', 'url'=>array('admin')),
        array('label'=>'News Letter', 'url'=>array('newsletter')),
);
?>

<h1>View NewsLetter #<?php echo $model->news_letter_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'news_letter_id',
		'email',
		'joined',
	),
)); ?>
