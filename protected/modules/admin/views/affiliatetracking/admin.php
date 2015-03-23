<?php
/* @var $this AffiliatetrackingController */
/* @var $model AffiliateTracking */

$this->breadcrumbs=array(
	'Affiliate Trackings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AffiliateTracking', 'url'=>array('index')),
	array('label'=>'Create AffiliateTracking', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#affiliate-tracking-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Affiliate Trackings</h1>

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
	'id'=>'affiliate-tracking-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                'header' => 'Product Name',
                'name' => 'product_id',
                'value' => '$data->product->name'
            ),
		array(
			'header' => 'Product Name',
			'name' => 'product_details_id',
			'value' => '$data->productDetails->store->name'
		),
		'counter',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
