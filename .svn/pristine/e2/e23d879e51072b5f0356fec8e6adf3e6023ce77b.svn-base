<?php
/* @var $this NewsLetterController */
/* @var $model NewsLetter */

$this->breadcrumbs=array(
	'News Letters'=>array('index'),
	$model->news_letter_id=>array('view','id'=>$model->news_letter_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Accounts', 'url'=>array('index')),
	array('label'=>'Create Account', 'url'=>array('create')),
	array('label'=>'View Account', 'url'=>array('view', 'id'=>$model->news_letter_id)),
	array('label'=>'Manage Accounts', 'url'=>array('admin')),
        array('label'=>'News Letter', 'url'=>array('newsletter')),
);
?>

<h1>Update NewsLetter <?php echo $model->news_letter_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>