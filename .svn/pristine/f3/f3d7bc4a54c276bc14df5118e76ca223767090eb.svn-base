<?php
/* @var $this NewsLetterController */
/* @var $model NewsLetter */

$this->breadcrumbs=array(
	'News Letters'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Accounts', 'url'=>array('index')),
	array('label'=>'Create Account', 'url'=>array('create')),
        array('label'=>'News Letter', 'url'=>array('newsletter')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#news-letter-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage News Letters</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'news-letter-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'news_letter_id',
		'email',
		'joined',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
