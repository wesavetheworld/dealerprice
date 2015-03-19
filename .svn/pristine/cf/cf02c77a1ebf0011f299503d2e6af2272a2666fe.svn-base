<?php
/* @var $this ProductdetailsController */
/* @var $model ProductDetails */

$this->breadcrumbs=array(
	'Product Details'=>array('index'),
	'Manage',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-details-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Product Details</h1>

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
	'id'=>'product-details-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		array(
                    'header' => 'Product',
                    'name' => 'product_id',
                    'value' => '$data->product_id ? $data->product->name :""'
                ),
		array(
                    'header' => 'Store',
                    'name' => 'store_id',
                    'value' => '$data->store_id ? $data->store->name :""'
                ),
		'affiliate_url',
		'mrp',
		'price',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
