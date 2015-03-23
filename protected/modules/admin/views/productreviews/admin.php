<?php
/* @var $this ProductreviewsController */
/* @var $model ProductReviews */

$this->breadcrumbs=array(
	'Product Reviews'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProductReviews', 'url'=>array('index')),
	array('label'=>'Create ProductReviews', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-reviews-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
$(document).on('click', '#mark_verified', function(){
    var checkedItems = [];
    $('.approve').each(function(i, v){
        if($(v).is(':checked'))
        {
            $(v).attr('id').split('_')[1] ? checkedItems.push($(v).attr('id').split('_')[1]) : '';
            $(v).removeAttr('checked');
        }
    });
    if(checkedItems.length > 0)
    $.post('".$this->createAbsoluteUrl('/admin/productreviews/approve')."', {ids: checkedItems}, function(d){
        $('#product-reviews-grid').yiiGridView('update');
    });
});
");
?>

<h1>Manage Product Reviews</h1>

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
	'id'=>'product-reviews-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'user_id',
		'product_id',
		'reviewer_name',
		'review_title',
		'review',
		'rating',
                array(
                    'header' => 'verified',
                    'value' => 'CHtml::checkBox("verified",$data->verified, array("id"=>"review_".$data->review_id, "class"=>"approve"))',
                    'type' => 'raw',
                ),
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}{delete}',
		),
	),
)); ?>

<button id="mark_verified">Marks as Verified</button>